<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Models\Category;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Imports the "101 o'qish kursi" textbook PDFs shipped under
 * Sayt/9. 101 o'qish kursi/Darsliklar into the resource library,
 * grouped by subject (Ona tili va o'qish savodxonligi / O'qish kitobi).
 */
class ReadingCourseSeeder extends Seeder
{
    private const SOURCE_DIR = "Sayt/9. 101 o'qish kursi/Darsliklar";

    private const STORAGE_DIR = 'resources/101-oqish-kursi';

    public function run(): void
    {
        $authorId = User::where('email', 'admin@savodxon.uz')->value('id');

        $parent = Category::updateOrCreate(
            ['type' => CategoryType::Resource->value, 'slug' => '101-oqish-kursi'],
            [
                'name' => "101 o'qish kursi",
                'description' => "1-4-sinflar uchun ona tili va o'qish savodxonligi darsliklari.",
                'depth' => 0,
                'path' => '101-oqish-kursi',
                'sort_order' => 91,
            ],
        );

        $childDefinitions = [
            'ona-tili-va-oqish-savodxonligi' => "Ona tili va o'qish savodxonligi",
            'oqish-kitobi' => "O'qish kitobi",
        ];

        $categories = ['101-oqish-kursi' => $parent];

        foreach (array_values($childDefinitions) as $order => $name) {
            $slug = array_keys($childDefinitions)[$order];

            $categories[$slug] = Category::updateOrCreate(
                ['type' => CategoryType::Resource->value, 'slug' => $slug],
                [
                    'parent_id' => $parent->id,
                    'name' => $name,
                    'depth' => 1,
                    'path' => "101-oqish-kursi/{$slug}",
                    'sort_order' => $order + 1,
                ],
            );
        }

        $sourcePath = base_path(self::SOURCE_DIR);

        foreach ($this->textbooks() as $index => $textbook) {
            $sourceFile = $sourcePath.'/'.$textbook['file'];

            if (! File::exists($sourceFile)) {
                continue;
            }

            $slug = Str::slug(pathinfo($textbook['file'], PATHINFO_FILENAME));
            $relativePath = self::STORAGE_DIR.'/'.$slug.'.pdf';
            $absoluteTarget = storage_path('app/public/'.$relativePath);

            File::ensureDirectoryExists(dirname($absoluteTarget));

            if (! File::exists($absoluteTarget)) {
                File::copy($sourceFile, $absoluteTarget);
            }

            Resource::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id' => $categories[$textbook['category']]->id,
                    'author_id' => $authorId,
                    'title' => $textbook['title'],
                    'description' => $textbook['description'],
                    'disk' => 'public',
                    'file_path' => $relativePath,
                    'file_name' => $textbook['file'],
                    'mime_type' => 'application/pdf',
                    'extension' => 'pdf',
                    'file_size' => File::size($sourceFile),
                    'status' => ContentStatus::Published->value,
                    'published_at' => now()->subDays(count($this->textbooks()) - $index),
                ],
            );
        }
    }

    /**
     * @return array<int, array{file: string, category: string, title: string, description: string}>
     */
    private function textbooks(): array
    {
        return [
            ['file' => "O'qish kitobi. 1-sinf (2017, T.G'afforova, E.Shodmonov).pdf", 'category' => 'oqish-kitobi', 'title' => "O'qish kitobi. 1-sinf", 'description' => "2017-yil nashri — T.G'afforova, E.Shodmonov"],
            ['file' => 'Ona tili va o\'qish savodxonligi. 1-sinf. 1-qism (2021, I.Azimova, K.Mavlonova).pdf', 'category' => 'ona-tili-va-oqish-savodxonligi', 'title' => "Ona tili va o'qish savodxonligi. 1-sinf. 1-qism", 'description' => '2021-yil nashri — I.Azimova, K.Mavlonova'],
            ['file' => 'Ona tili va o\'qish savodxonligi. 1-sinf. 2-qism (2021, I.Azimova, K.Mavlonova).pdf', 'category' => 'ona-tili-va-oqish-savodxonligi', 'title' => "Ona tili va o'qish savodxonligi. 1-sinf. 2-qism", 'description' => '2021-yil nashri — I.Azimova, K.Mavlonova'],
            ['file' => "O'qish kitobi. 2-sinf (2016, T.G'afforova, Sh.Nurullayeva).pdf", 'category' => 'oqish-kitobi', 'title' => "O'qish kitobi. 2-sinf", 'description' => "2016-yil nashri — T.G'afforova, Sh.Nurullayeva"],
            ['file' => "O'qish kitobi. 2-sinf (2018, T.G'afforova, Sh.Nurullayeva).pdf", 'category' => 'oqish-kitobi', 'title' => "O'qish kitobi. 2-sinf", 'description' => "2018-yil nashri — T.G'afforova, Sh.Nurullayeva"],
            ['file' => 'Ona tili va o\'qish savodxonligi. 2-sinf. 1-qism (2021, I.Azimova, K.Mavlonova).pdf', 'category' => 'ona-tili-va-oqish-savodxonligi', 'title' => "Ona tili va o'qish savodxonligi. 2-sinf. 1-qism", 'description' => '2021-yil nashri — I.Azimova, K.Mavlonova'],
            ['file' => 'Ona tili va o\'qish savodxonligi. 2-sinf. 2-qism (2021, I.Azimova, K.Mavlonova).pdf', 'category' => 'ona-tili-va-oqish-savodxonligi', 'title' => "Ona tili va o'qish savodxonligi. 2-sinf. 2-qism", 'description' => '2021-yil nashri — I.Azimova, K.Mavlonova'],
            ['file' => "O'qish kitobi. 3-sinf (2016, M.Umarova, X.Hamroqulova).pdf", 'category' => 'oqish-kitobi', 'title' => "O'qish kitobi. 3-sinf", 'description' => '2016-yil nashri — M.Umarova, X.Hamroqulova'],
            ['file' => 'Ona tili va o\'qish savodxonligi. 3-sinf. 1-qism (2022, I.Azimova, K.Mavlonova) (1).pdf', 'category' => 'ona-tili-va-oqish-savodxonligi', 'title' => "Ona tili va o'qish savodxonligi. 3-sinf. 1-qism", 'description' => '2022-yil nashri — I.Azimova, K.Mavlonova'],
            ['file' => 'Ona tili va o\'qish savodxonligi. 3-sinf. 2-qism (2022, I.Azimova, K.Mavlonova) (1).pdf', 'category' => 'ona-tili-va-oqish-savodxonligi', 'title' => "Ona tili va o'qish savodxonligi. 3-sinf. 2-qism", 'description' => '2022-yil nashri — I.Azimova, K.Mavlonova'],
            ['file' => "O'qish kitobi. 4-sinf (2017, S.Matchonov, A.Shojalilov).pdf", 'category' => 'oqish-kitobi', 'title' => "O'qish kitobi. 4-sinf", 'description' => '2017-yil nashri — S.Matchonov, A.Shojalilov'],
        ];
    }
}
