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
 * Imports the scientific article PDFs shipped under Sayt/14. Ilmiy maqolalar
 * into the resource library, grouped into international conference,
 * republic conference and journal-article categories.
 */
class ScientificArticleSeeder extends Seeder
{
    private const SOURCE_DIR = 'Sayt/14. Ilmiy maqolalar';

    private const STORAGE_DIR = 'resources/ilmiy-maqolalar';

    public function run(): void
    {
        $authorId = User::where('email', 'admin@savodxon.uz')->value('id');

        $parent = Category::updateOrCreate(
            ['type' => CategoryType::Resource->value, 'slug' => 'ilmiy-maqolalar'],
            [
                'name' => 'Ilmiy maqolalar',
                'description' => 'Xalqaro va respublika ilmiy-amaliy konferensiya materiallari hamda jurnal maqolalari.',
                'depth' => 0,
                'path' => 'ilmiy-maqolalar',
                'sort_order' => 90,
            ],
        );

        $childDefinitions = [
            'xalqaro-ilmiy-maqolalar' => 'Xalqaro konferensiyalar',
            'respublika-ilmiy-maqolalar' => 'Respublika konferensiyalari',
            'jurnal-ilmiy-maqolalar' => 'Ilmiy jurnal maqolalari',
        ];

        $categories = ['ilmiy-maqolalar' => $parent];

        foreach (array_values($childDefinitions) as $order => $name) {
            $slug = array_keys($childDefinitions)[$order];

            $categories[$slug] = Category::updateOrCreate(
                ['type' => CategoryType::Resource->value, 'slug' => $slug],
                [
                    'parent_id' => $parent->id,
                    'name' => $name,
                    'depth' => 1,
                    'path' => "ilmiy-maqolalar/{$slug}",
                    'sort_order' => $order + 1,
                ],
            );
        }

        $sourcePath = base_path(self::SOURCE_DIR);

        foreach ($this->articles() as $index => $article) {
            $sourceFile = $sourcePath.'/'.$article['file'];

            if (! File::exists($sourceFile)) {
                continue;
            }

            $slug = Str::slug(pathinfo($article['file'], PATHINFO_FILENAME));
            $relativePath = self::STORAGE_DIR.'/'.$slug.'.pdf';
            $absoluteTarget = storage_path('app/public/'.$relativePath);

            File::ensureDirectoryExists(dirname($absoluteTarget));

            if (! File::exists($absoluteTarget)) {
                File::copy($sourceFile, $absoluteTarget);
            }

            Resource::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id' => $categories[$article['category']]->id,
                    'author_id' => $authorId,
                    'title' => $article['title'],
                    'description' => $article['venue'],
                    'disk' => 'public',
                    'file_path' => $relativePath,
                    'file_name' => $article['file'],
                    'mime_type' => 'application/pdf',
                    'extension' => 'pdf',
                    'file_size' => File::size($sourceFile),
                    'status' => ContentStatus::Published->value,
                    'published_at' => now()->subDays(count($this->articles()) - $index),
                ],
            );
        }
    }

    /**
     * @return array<int, array{file: string, category: string, title: string, venue: string}>
     */
    private function articles(): array
    {
        return [
            ['file' => '1. GulDPI xalqaro konf. 2026_22-23 may.pdf', 'category' => 'xalqaro-ilmiy-maqolalar', 'title' => 'GulDPI xalqaro ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2026-yil 22-23-may"],
            ['file' => '10. Research and education, vol-4, issue-6_2025_june.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'Research and Education jurnali', 'venue' => 'Vol. 4, Issue 6 — 2025-yil iyun'],
            ['file' => '11. GulDU Xalqaro konf_2025_20-21-may.pdf', 'category' => 'xalqaro-ilmiy-maqolalar', 'title' => 'GulDU xalqaro ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2025-yil 20-21-may"],
            ['file' => "12. Mug'allim jurnali_3-2-2025.pdf", 'category' => 'jurnal-ilmiy-maqolalar', 'title' => "\"Mug'allim\" jurnali", 'venue' => '3-son — 2025-yil'],
            ['file' => '13. NamDPI konf.15-16 may, 2025 yil.pdf', 'category' => 'respublika-ilmiy-maqolalar', 'title' => 'NamDPI ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2025-yil 15-16-may"],
            ['file' => '14. IMTI konferensiya_11.09.2025.pdf', 'category' => 'respublika-ilmiy-maqolalar', 'title' => 'IMTI ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2025-yil 11-sentabr"],
            ['file' => '15. Qori Niyoziy xalqaro konf_2025_31-31-oktabr.pdf', 'category' => 'xalqaro-ilmiy-maqolalar', 'title' => 'Qori Niyoziy nomidagi xalqaro ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2025-yil 30-31-oktabr"],
            ['file' => '16. GulDPI konf_2024_22-23 noyabr.pdf', 'category' => 'respublika-ilmiy-maqolalar', 'title' => 'GulDPI ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2024-yil 22-23-noyabr"],
            ['file' => '17. Intenational conf_uniconflix_2025_29-noyabr.pdf', 'category' => 'xalqaro-ilmiy-maqolalar', 'title' => 'International Conference "Uniconflix"', 'venue' => 'Xalqaro konferensiya materiallari — 2025-yil 29-noyabr'],
            ['file' => "18. Mug'allim jurnali_4-2024..pdf", 'category' => 'jurnal-ilmiy-maqolalar', 'title' => "\"Mug'allim\" jurnali", 'venue' => '4-son — 2024-yil'],
            ['file' => '19. Science and innovations 2024_13-mart.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'Science and Innovations jurnali', 'venue' => '2024-yil 13-mart soni'],
            ['file' => '2. TDPU Ilmiy axborotlar 4-son 2026.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'TDPU "Ilmiy axborotlar" jurnali', 'venue' => '4-son — 2026-yil'],
            ['file' => '20. ICMS VOLUME-2, ISSUE-4_2024_23-aprel.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'ICMS jurnali', 'venue' => 'Volume 2, Issue 4 — 2024-yil 23-aprel'],
            ['file' => '21. ICMS VOLUME-2, ISSUE-5_2024_18-may.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'ICMS jurnali', 'venue' => 'Volume 2, Issue 5 — 2024-yil 18-may'],
            ['file' => '22. Qori Niyoziy xalqaro konf_2024_30-31 oktabr.pdf', 'category' => 'xalqaro-ilmiy-maqolalar', 'title' => 'Qori Niyoziy nomidagi xalqaro ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2024-yil 30-31-oktabr"],
            ['file' => '23. GulDU Axborotnoma 2023-3.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'GulDU "Axborotnoma" jurnali', 'venue' => '2023-yil 3-son'],
            ['file' => '24. GulDU Axborotnoma_2023-4.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'GulDU "Axborotnoma" jurnali', 'venue' => '2023-yil 4-son'],
            ['file' => "3. O'zMU Xabarlari, 2026, 8-son.pdf", 'category' => 'jurnal-ilmiy-maqolalar', 'title' => "O'zMU xabarlari jurnali", 'venue' => '8-son — 2026-yil'],
            ['file' => '4. Sirdaryo PMM_xalqaro konf_2026_21-aprel.pdf', 'category' => 'xalqaro-ilmiy-maqolalar', 'title' => 'Sirdaryo PMI xalqaro ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2026-yil 21-aprel"],
            ['file' => "5. Maktabgacha va maktab ta'limi_2026_1-may_5(3)-son.pdf", 'category' => 'jurnal-ilmiy-maqolalar', 'title' => "\"Maktabgacha va maktab ta'limi\" jurnali", 'venue' => '5(3)-son — 2026-yil 1-may'],
            ['file' => '6. Qori Niyoziy_Resp.konf_2025_30-yanvar.pdf', 'category' => 'respublika-ilmiy-maqolalar', 'title' => 'Qori Niyoziy nomidagi respublika ilmiy-amaliy konferensiyasi', 'venue' => "Konferensiya materiallari to'plami — 2025-yil 30-yanvar"],
            ['file' => '7. Pedagogika jurnal_1.2025.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => '"Pedagogika" jurnali', 'venue' => '1-son — 2025-yil'],
            ['file' => '8. TDPU Ilmiy axborotlar 4-son 2025.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'TDPU "Ilmiy axborotlar" jurnali', 'venue' => '4-son — 2025-yil'],
            ['file' => '9. American journal_vol-3, Iss-11_2025.pdf', 'category' => 'jurnal-ilmiy-maqolalar', 'title' => 'American Journal', 'venue' => 'Vol. 3, Issue 11 — 2025-yil'],
        ];
    }
}
