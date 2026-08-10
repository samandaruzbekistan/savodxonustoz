<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\QuestionType;
use App\Models\Category;
use App\Models\Content;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

/**
 * Adds a reading-comprehension quiz (via the existing Test/Question
 * infrastructure) for each 1-sinf fairy tale. The questions were
 * extracted once from each tale's "To'g'ri javobni belgilang" section
 * in the source .docx and committed as JSON in
 * data/fairy-tale-grade1-quiz.json, so seeding never depends on the
 * local-only Sayt/ folder. Only 1-sinf is covered for now: other
 * grades' docx files bake their questions into images instead of
 * extractable text, so they can't be seeded the same way.
 *
 * Each Test's slug matches its fairy tale's slug 1:1, which is how
 * the fairy tale show page finds the quiz to link to.
 */
class ReadingCourseFairyTaleQuizSeeder extends Seeder
{
    private const QUIZ_FILE = __DIR__.'/data/fairy-tale-grade1-quiz.json';

    public function run(): void
    {
        $authorId = User::where('email', 'admin@savodxon.uz')->value('id');
        $quizzes = json_decode(File::get(self::QUIZ_FILE), true);

        $category = Category::updateOrCreate(
            ['type' => CategoryType::Test->value, 'slug' => 'ertaklar-testlari'],
            [
                'name' => 'Ertaklar testlari',
                'description' => "1-sinf ertaklariga oid o'qib-tushunish testlari.",
                'depth' => 0,
                'path' => 'ertaklar-testlari',
                'sort_order' => 93,
            ],
        );

        foreach ($quizzes as $slug => $quiz) {
            $tale = Content::where('slug', $slug)->first();

            if (! $tale) {
                continue;
            }

            $test = Test::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id' => $category->id,
                    'author_id' => $authorId,
                    'title' => "{$quiz['title']} — bilimingizni sinang",
                    'description' => "\"{$quiz['title']}\" ertagini o'qib bo'lgach, matnni qanchalik tushunganingizni tekshiring.",
                    'instructions' => "Har bir savolni diqqat bilan o'qing va eng to'g'ri javobni tanlang.",
                    'settings' => ['pass_percent' => 60],
                    'is_published' => true,
                ],
            );

            // Rebuild questions idempotently so re-seeding doesn't duplicate them.
            $test->questions()->each(fn ($q) => $q->delete());

            foreach ($quiz['questions'] as $index => $question) {
                $created = $test->questions()->create([
                    'type' => QuestionType::MultipleChoice,
                    'prompt' => $question['prompt'],
                    'points' => 1,
                    'sort_order' => $index + 1,
                ]);

                foreach ($question['options'] as $optionIndex => $label) {
                    $created->options()->create([
                        'label' => $label,
                        'is_correct' => $optionIndex === $question['correct'],
                        'sort_order' => $optionIndex,
                    ]);
                }
            }
        }
    }
}
