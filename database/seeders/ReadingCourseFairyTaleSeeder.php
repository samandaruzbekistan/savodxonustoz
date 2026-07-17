<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Models\Category;
use App\Models\Content;
use App\Models\User;
use DOMDocument;
use DOMXPath;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use ZipArchive;

/**
 * Imports the "101 o'qish kursi" fairy tales shipped under
 * Sayt/9. 101 o'qish kursi/ertaklar va audiolar/extracted, one rar
 * per grade already extracted to a sibling folder. Each tale's docx
 * is converted to plain HTML for an in-browser preview and paired
 * with its narrated mp3.
 */
class ReadingCourseFairyTaleSeeder extends Seeder
{
    private const SOURCE_DIR = "Sayt/9. 101 o'qish kursi/ertaklar va audiolar/extracted";

    private const STORAGE_DIR = 'ertaklar';

    public function run(): void
    {
        $authorId = User::where('email', 'admin@savodxon.uz')->value('id');

        $parent = Category::updateOrCreate(
            ['type' => CategoryType::Content->value, 'slug' => 'ertaklar-va-audiolar'],
            [
                'name' => 'Ertaklar va audiolar',
                'description' => "1-4-sinflar uchun audio ertaklar, yangi so'zlar va topshiriqlar.",
                'depth' => 0,
                'path' => 'ertaklar-va-audiolar',
                'sort_order' => 92,
            ],
        );

        $gradeCategories = [];

        foreach ([1, 2, 3, 4] as $grade) {
            $slug = "{$grade}-sinf-ertaklari";

            $gradeCategories[$grade] = Category::updateOrCreate(
                ['type' => CategoryType::Content->value, 'slug' => $slug],
                [
                    'parent_id' => $parent->id,
                    'name' => "{$grade}-sinf ertaklari",
                    'depth' => 1,
                    'path' => "ertaklar-va-audiolar/{$slug}",
                    'sort_order' => $grade,
                ],
            );
        }

        $sourcePath = base_path(self::SOURCE_DIR);

        foreach ($this->tales() as $index => $tale) {
            $folder = "{$tale['grade']}-sinflar uchun";
            $docxPath = "{$sourcePath}/{$folder}/{$tale['docx']}";
            $mp3Path = "{$sourcePath}/{$folder}/{$tale['mp3']}";

            if (! File::exists($docxPath) || ! File::exists($mp3Path)) {
                continue;
            }

            $slug = Str::slug($tale['title']).'-'.$tale['grade'].'-sinf';
            $audioRelativePath = self::STORAGE_DIR."/{$tale['grade']}-sinf/{$slug}.mp3";
            $audioAbsolutePath = storage_path('app/public/'.$audioRelativePath);

            File::ensureDirectoryExists(dirname($audioAbsolutePath));

            if (! File::exists($audioAbsolutePath)) {
                File::copy($mp3Path, $audioAbsolutePath);
            }

            Content::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id' => $gradeCategories[$tale['grade']]->id,
                    'author_id' => $authorId,
                    'type' => ContentType::Ertak->value,
                    'title' => $tale['title'],
                    'excerpt' => "{$tale['grade']}-sinf uchun audio ertak",
                    'body' => $this->convertDocxToHtml($docxPath, $tale['title']),
                    'meta' => [
                        'grade' => $tale['grade'],
                        'audio_path' => $audioRelativePath,
                        'audio_size' => File::size($audioAbsolutePath),
                    ],
                    'status' => ContentStatus::Published->value,
                    'published_at' => now()->subDays(count($this->tales()) - $index),
                ],
            );
        }
    }

    /**
     * Extracts the readable body text from a .docx file (paragraph by
     * paragraph, in document order) and renders it as simple, safe HTML.
     * Images and drawing markup are skipped; numbered section headers
     * (e.g. "1. Yangi so'zlar:") are rendered as subheadings.
     */
    private function convertDocxToHtml(string $docxPath, string $title): string
    {
        $zip = new ZipArchive;

        if ($zip->open($docxPath) !== true) {
            return '';
        }

        $xml = $zip->getFromName('word/document.xml');
        $zip->close();

        if ($xml === false) {
            return '';
        }

        $dom = new DOMDocument;
        $dom->loadXML($xml);

        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('w', 'http://schemas.openxmlformats.org/wordprocessingml/2006/main');

        $paragraphs = $xpath->query('//w:p');
        $lines = [];

        foreach ($paragraphs as $paragraph) {
            $text = '';

            foreach ($xpath->query('.//w:t', $paragraph) as $node) {
                $text .= $node->nodeValue;
            }

            $text = trim(preg_replace('/\s+/', ' ', $text));

            if ($text === '' || str_starts_with($text, '!')) {
                continue;
            }

            $lines[] = $text;
        }

        // The story title is stored separately, so drop it if it repeats as the first line.
        if ($lines !== [] && Str::slug($lines[0]) === Str::slug($title)) {
            array_shift($lines);
        }

        $html = '';

        foreach ($lines as $line) {
            $html .= '<p>'.e($line).'</p>';
        }

        return $html;
    }

    /**
     * @return array<int, array{grade: int, docx: string, mp3: string, title: string}>
     */
    private function tales(): array
    {
        return [
            // 1-sinf
            ['grade' => 1, 'docx' => 'Aqlli chumoli.docx', 'mp3' => 'Aqlli chumoli.mp3', 'title' => 'Aqlli chumoli'],
            ['grade' => 1, 'docx' => 'Dangasa ayiqcha.docx', 'mp3' => 'Dangasa ayiqcha.mp3', 'title' => 'Dangasa ayiqcha'],
            ['grade' => 1, 'docx' => 'Kamtar gul.docx', 'mp3' => 'Kamtar gul.mp3', 'title' => 'Kamtar gul'],
            ['grade' => 1, 'docx' => 'Kichkina baliqcha.docx', 'mp3' => 'Kichkina baliqcha.mp3', 'title' => 'Kichkina baliqcha'],
            ['grade' => 1, 'docx' => 'Kulcha bo‘lishgan bolalar.docx', 'mp3' => 'Kulcha boʻlishga bolalar.mp3', 'title' => "Kulcha bo'lishgan bolalar"],
            ['grade' => 1, 'docx' => 'Mehribon quyoncha..docx', 'mp3' => 'Mehribon quyoncha.mp3', 'title' => 'Mehribon quyoncha'],
            ['grade' => 1, 'docx' => 'Qaldirg‘och va daraxt.docx', 'mp3' => 'Qaldirgʻoch va daraxt.mp3', 'title' => "Qaldirg'och va daraxt"],
            ['grade' => 1, 'docx' => 'Rostgo‘y bola.docx', 'mp3' => 'Rostgoʻy bola.mp3', 'title' => "Rostgo'y bola"],
            ['grade' => 1, 'docx' => 'Sehrli urug‘.docx', 'mp3' => 'Sehrli urugʻ.mp3', 'title' => "Sehrli urug'"],
            ['grade' => 1, 'docx' => 'Yo‘qolgan qalam.docx', 'mp3' => 'Yoʻqolgan qalam.mp3', 'title' => "Yo'qolgan qalam"],

            // 2-sinf
            ['grade' => 2, 'docx' => 'Adashgan bulutcha.docx', 'mp3' => 'Adashgan bulutcha.mp3', 'title' => 'Adashgan bulutcha'],
            ['grade' => 2, 'docx' => 'Bilimdon qarg‘acha.docx', 'mp3' => 'Bilimdon qargʻacha.mp3', 'title' => "Bilimdon qarg'acha"],
            ['grade' => 2, 'docx' => 'Gapiradigan daftar.docx', 'mp3' => 'Gapiradigan daftar.mp3', 'title' => 'Gapiradigan daftar'],
            ['grade' => 2, 'docx' => 'Maqtanchoq qalam.docx', 'mp3' => 'Maqtanchoq qalam.mp3', 'title' => 'Maqtanchoq qalam'],
            ['grade' => 2, 'docx' => 'Mehnatkash ari.docx', 'mp3' => 'Mehnatkash ari.mp3', 'title' => 'Mehnatkash ari'],
            ['grade' => 2, 'docx' => 'Mehrli non.docx', 'mp3' => 'Mehrli non.mp3', 'title' => 'Mehrli non'],
            ['grade' => 2, 'docx' => 'Sabrsiz nihol.docx', 'mp3' => 'Sabrsiz nihol.mp3', 'title' => 'Sabrsiz nihol'],
            ['grade' => 2, 'docx' => 'Sehrli so‘z.docx', 'mp3' => 'Sehrli soʻz.mp3', 'title' => "Sehrli so'z"],
            ['grade' => 2, 'docx' => 'Sehrli supurgi.docx', 'mp3' => 'Sehrli supurgi.mp3', 'title' => 'Sehrli supurgi'],
            ['grade' => 2, 'docx' => 'Toza buloq.docx', 'mp3' => 'Toza buloq.mp3', 'title' => 'Toza buloq'],

            // 3-sinf
            ['grade' => 3, 'docx' => 'Aqlli chumoli.docx', 'mp3' => 'Aqlli chumoli.mp3', 'title' => 'Aqlli chumoli'],
            ['grade' => 3, 'docx' => 'Dangasa soat.docx', 'mp3' => 'Dangasa soat.mp3', 'title' => 'Dangasa soat'],
            ['grade' => 3, 'docx' => 'Halol daftar.docx', 'mp3' => 'Halol daftar.mp3', 'title' => 'Halol daftar'],
            ['grade' => 3, 'docx' => 'Kitobxon quyoncha.docx', 'mp3' => 'kitobxon quyoncha.mp3', 'title' => 'Kitobxon quyoncha'],
            ['grade' => 3, 'docx' => 'Mehribon daraxt.docx', 'mp3' => 'Mehribon daraxt.mp3', 'title' => 'Mehribon daraxt'],
            ['grade' => 3, 'docx' => 'Qushcha va bolakay.docx', 'mp3' => 'Qushcha va bolakay.mp3', 'title' => 'Qushcha va bolakay'],
            ['grade' => 3, 'docx' => 'Rostgo‘y Kamola.docx', 'mp3' => 'Rostgoy kamola.mp3', 'title' => "Rostgo'y Kamola"],
            ['grade' => 3, 'docx' => 'Sehrli fonarcha.docx', 'mp3' => 'Sehrli fonarcha.mp3', 'title' => 'Sehrli fonarcha'],
            ['grade' => 3, 'docx' => 'Sehrli qalam.docx', 'mp3' => 'Sehrli qalam.mp3', 'title' => 'Sehrli qalam'],
            ['grade' => 3, 'docx' => 'Yo‘qolgan kalit.docx', 'mp3' => 'Yo‘qolgan kalit.mp3', 'title' => "Yo'qolgan kalit"],

            // 4-sinf
            ['grade' => 4, 'docx' => 'Bir dona urug‘ning sayohati.docx', 'mp3' => 'Bir dona urug‘ning sayohati.mp3', 'title' => "Bir dona urug'ning sayohati"],
            ['grade' => 4, 'docx' => 'Ko‘rinmas ko‘prik.docx', 'mp3' => 'Ko‘rinmas ko‘prik.mp3', 'title' => "Ko'rinmas ko'prik"],
            ['grade' => 4, 'docx' => 'Muzeydagi jim soat.docx', 'mp3' => 'Muzeydagi jim soat.mp3', 'title' => 'Muzeydagi jim soat'],
            ['grade' => 4, 'docx' => 'Oy nuridagi xarita.docx', 'mp3' => 'Oy nuridagi xarita.mp3', 'title' => 'Oy nuridagi xarita'],
            ['grade' => 4, 'docx' => 'Qog‘oz kemaning maktubi.docx', 'mp3' => 'Qog‘oz kemaning maktubi.mp3', 'title' => "Qog'oz kemaning maktubi"],
            ['grade' => 4, 'docx' => 'Qumdagi izlar.docx', 'mp3' => 'Qumdagi izlar.mp3', 'title' => 'Qumdagi izlar'],
            ['grade' => 4, 'docx' => 'Robotga berilgan va’da.docx', 'mp3' => 'Robotga berilgan va’da.mp3', 'title' => "Robotga berilgan va'da"],
            ['grade' => 4, 'docx' => 'Shamol tegirmonining siri.docx', 'mp3' => 'Shamol tegirmonining siri.mp3', 'title' => 'Shamol tegirmonining siri'],
            ['grade' => 4, 'docx' => 'Sukunat darsidagi g‘alaba.docx', 'mp3' => 'Sukunat darsidagi g‘alaba.mp3', 'title' => "Sukunat darsidagi g'alaba"],
            ['grade' => 4, 'docx' => 'Tandir hidi kelgan xat.docx', 'mp3' => 'Tandir hidi kelgan xat.mp3', 'title' => 'Tandir hidi kelgan xat'],
        ];
    }
}
