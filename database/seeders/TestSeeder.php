<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\QuestionType;
use App\Models\Category;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run(): void
    {
        $authorId = User::where('email', 'admin@savodxon.uz')->value('id');

        $category = Category::updateOrCreate(
            ['type' => CategoryType::Test, 'slug' => 'diagnostika'],
            ['name' => 'Diagnostika', 'description' => "O'qish savodxonligi diagnostik testlari.", 'depth' => 0, 'path' => 'diagnostika', 'sort_order' => 1],
        );

        $test = Test::updateOrCreate(
            ['slug' => 'oqish-savodxonligi-diagnostikasi'],
            [
                'category_id' => $category->id,
                'author_id' => $authorId,
                'title' => "O'qish savodxonligi diagnostikasi",
                'description' => "O'qish savodxonligi tushunchasi bo'yicha bilimingizni sinab ko'ring.",
                'instructions' => "Har bir savolni diqqat bilan o'qing va eng to'g'ri javobni tanlang.",
                'settings' => ['pass_percent' => 60],
                'is_published' => true,
            ],
        );

        // Rebuild questions idempotently.
        $test->questions()->each(fn ($q) => $q->delete());

        $this->mcq($test);
        $this->trueFalse($test);
        $this->multiple($test);
        $this->ordering($test);
        $this->open($test);
    }

    private function mcq(Test $test): void
    {
        $q = $test->questions()->create([
            'type' => QuestionType::MultipleChoice,
            'prompt' => "O'qish savodxonligi nima?",
            'explanation' => "O'qish savodxonligi — matn mazmunini anglash va undan foydalanish qobiliyati.",
            'points' => 1,
            'sort_order' => 1,
        ]);
        $q->options()->createMany([
            ['label' => 'Matnni tez o\'qish tezligi', 'is_correct' => false, 'sort_order' => 0],
            ['label' => 'Matn mazmunini anglash va undan foydalanish qobiliyati', 'is_correct' => true, 'sort_order' => 1],
            ['label' => 'Harflarni to\'g\'ri talaffuz qilish', 'is_correct' => false, 'sort_order' => 2],
        ]);
    }

    private function trueFalse(Test $test): void
    {
        $q = $test->questions()->create([
            'type' => QuestionType::TrueFalse,
            'prompt' => "Ravon o'qish faqat tez o'qishni anglatadi.",
            'explanation' => "Ravon o'qish aniqlik, tezlik va ifodalilikning birligidir.",
            'points' => 1,
            'sort_order' => 2,
        ]);
        $q->options()->createMany([
            ['label' => "To'g'ri", 'is_correct' => false, 'sort_order' => 0],
            ['label' => "Noto'g'ri", 'is_correct' => true, 'sort_order' => 1],
        ]);
    }

    private function multiple(Test $test): void
    {
        $q = $test->questions()->create([
            'type' => QuestionType::MultipleAnswers,
            'prompt' => "Quyidagilardan qaysilari o'qish savodxonligi ko'nikmalariga kiradi?",
            'explanation' => 'Asosiy fikrni ajratish, xulosa chiqarish va dalil bilan asoslash kiradi.',
            'points' => 2,
            'sort_order' => 3,
        ]);
        $q->options()->createMany([
            ['label' => 'Asosiy fikrni ajratish', 'is_correct' => true, 'sort_order' => 0],
            ['label' => 'Xulosa chiqarish', 'is_correct' => true, 'sort_order' => 1],
            ['label' => 'Matnni yodlab olish', 'is_correct' => false, 'sort_order' => 2],
            ['label' => 'Javobni dalil bilan asoslash', 'is_correct' => true, 'sort_order' => 3],
        ]);
    }

    private function ordering(Test $test): void
    {
        $q = $test->questions()->create([
            'type' => QuestionType::Ordering,
            'prompt' => "Matnni tushunish bosqichlarini to'g'ri tartibda joylashtiring.",
            'explanation' => "So'z → gap → matn → xulosa → baholash.",
            'points' => 2,
            'sort_order' => 4,
        ]);
        $q->options()->createMany([
            ['label' => 'So\'z darajasida tushunish', 'correct_position' => 1, 'sort_order' => 0],
            ['label' => 'Gap darajasida tushunish', 'correct_position' => 2, 'sort_order' => 1],
            ['label' => 'Matn darajasida tushunish', 'correct_position' => 3, 'sort_order' => 2],
            ['label' => 'Baholash darajasida tushunish', 'correct_position' => 4, 'sort_order' => 3],
        ]);
    }

    private function open(Test $test): void
    {
        $test->questions()->create([
            'type' => QuestionType::Open,
            'prompt' => 'PIRLS dasturi nimani baholaydi? Qisqacha yozing.',
            'explanation' => "PIRLS 4-sinf o'quvchilarining o'qish savodxonligini xalqaro miqyosda baholaydi.",
            'points' => 2,
            'sort_order' => 5,
        ]);
    }
}
