<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Models\Category;
use App\Models\Content;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContentStructureSeeder extends Seeder
{
    public function run(): void
    {
        $authorId = User::where('email', 'admin@savodxon.uz')->value('id');

        // Root content sections (categories tree).
        $nazariya = Category::updateOrCreate(
            ['type' => CategoryType::Content, 'slug' => 'nazariya'],
            [
                'name' => "O'qish savodxonligi nazariyasi",
                'description' => "Saytning nazariy-metodik poydevori: o'qish savodxonligi mazmuni, PIRLS va PISA talqini, matnni tushunish, ravon va tanqidiy o'qish, metakognitiv strategiyalar.",
                'depth' => 0,
                'path' => 'nazariya',
                'sort_order' => 1,
            ],
        );

        Category::updateOrCreate(
            ['type' => CategoryType::Content, 'slug' => 'metodik-modul'],
            [
                'name' => 'Metodik modul',
                'description' => "Bo'lajak o'qituvchilar uchun amaliy-metodik yadro: matn bilan ishlash, savol tuzish, PIRLS topshiriqlari, baholash.",
                'depth' => 0,
                'path' => 'metodik-modul',
                'sort_order' => 2,
            ],
        );

        Category::updateOrCreate(
            ['type' => CategoryType::Content, 'slug' => 'xalqaro-tajriba'],
            [
                'name' => 'Xalqaro tajriba',
                'description' => "O'qish savodxonligini rivojlantirishda jahon mamlakatlari tajribasi.",
                'depth' => 0,
                'path' => 'xalqaro-tajriba',
                'sort_order' => 3,
            ],
        );

        // Resource categories (separate "resource" tree).
        Category::updateOrCreate(
            ['type' => CategoryType::Resource, 'slug' => 'metodik-qollanmalar'],
            ['name' => 'Metodik qo\'llanmalar', 'description' => 'Darslar uchun metodik materiallar.', 'depth' => 0, 'path' => 'metodik-qollanmalar', 'sort_order' => 1],
        );
        Category::updateOrCreate(
            ['type' => CategoryType::Resource, 'slug' => 'dars-ishlanmalari'],
            ['name' => 'Dars ishlanmalari', 'description' => 'Tayyor dars ishlanmalari va namunalar.', 'depth' => 0, 'path' => 'dars-ishlanmalari', 'sort_order' => 2],
        );

        // Video categories.
        Category::updateOrCreate(
            ['type' => CategoryType::Video, 'slug' => 'video-darslar'],
            ['name' => 'Video darslar', 'description' => 'O\'qish savodxonligi bo\'yicha video darslar.', 'depth' => 0, 'path' => 'video-darslar', 'sort_order' => 1],
        );

        foreach ($this->theoryPages() as $index => $page) {
            Content::updateOrCreate(
                ['slug' => $page['slug']],
                [
                    'category_id' => $nazariya->id,
                    'author_id' => $authorId,
                    'type' => ContentType::Theory,
                    'title' => $page['title'],
                    'excerpt' => $page['excerpt'],
                    'body' => $page['body'],
                    'meta' => [
                        'goal' => $page['goal'],
                        'examples' => $page['examples'] ?? null,
                        'tasks' => $page['tasks'] ?? null,
                        'expected_result' => $page['expected_result'] ?? null,
                    ],
                    'status' => ContentStatus::Published,
                    'is_featured' => $index < 2,
                    'sort_order' => $index + 1,
                    'published_at' => now(),
                ],
            );
        }

        foreach ($this->blogPosts() as $index => $post) {
            Content::updateOrCreate(
                ['slug' => $post['slug']],
                [
                    'author_id' => $authorId,
                    'type' => $post['type'],
                    'title' => $post['title'],
                    'excerpt' => $post['excerpt'],
                    'body' => $post['body'],
                    'status' => ContentStatus::Published,
                    'is_featured' => $index === 0,
                    'sort_order' => $index + 1,
                    'published_at' => now()->subDays($index),
                ],
            );
        }

        foreach ($this->faqEntries() as $index => $faq) {
            Content::updateOrCreate(
                ['slug' => $faq['slug']],
                [
                    'author_id' => $authorId,
                    'type' => ContentType::Faq,
                    'title' => $faq['title'],
                    'body' => $faq['body'],
                    'status' => ContentStatus::Published,
                    'sort_order' => $index + 1,
                    'published_at' => now(),
                ],
            );
        }
    }

    /**
     * Sample FAQ entries (title = question, body = answer).
     *
     * @return array<int, array{slug: string, title: string, body: string}>
     */
    private function faqEntries(): array
    {
        return [
            [
                'slug' => 'oqish-savodxonligi-nima',
                'title' => "O'qish savodxonligi nima?",
                'body' => "<p>O'qish savodxonligi — matnni o'qib, mazmunini anglash, tahlil qilish, xulosa chiqarish va undan hayotda foydalana olish qobiliyatidir. Bu oddiy o'qish malakasidan kengroq tushuncha.</p>",
            ],
            [
                'slug' => 'platformadan-kim-foydalanishi-mumkin',
                'title' => 'Platformadan kim foydalanishi mumkin?',
                'body' => "<p>Platforma birinchi navbatda bo'lajak boshlang'ich sinf o'qituvchilari, amaldagi pedagoglar va metodistlar uchun mo'ljallangan. Materiallar ochiq va bepul.</p>",
            ],
            [
                'slug' => 'materiallardan-bepul-foydalanish',
                'title' => 'Resurslar va videolar bepulmi?',
                'body' => "<p>Ha. Resurs markazidagi metodik qo'llanmalar, dars ishlanmalari va video darslarning barchasi bepul foydalanish uchun ochiq.</p>",
            ],
        ];
    }

    /**
     * Sample blog and news entries for the public feed.
     *
     * @return array<int, array{type: ContentType, slug: string, title: string, excerpt: string, body: string}>
     */
    private function blogPosts(): array
    {
        return [
            [
                'type' => ContentType::News,
                'slug' => 'platforma-ishga-tushdi',
                'title' => 'Savodxon Ustoz platformasi ishga tushdi',
                'excerpt' => "Bo'lajak boshlang'ich sinf o'qituvchilari uchun o'qish savodxonligi metodik platformasi foydalanuvchilarga ochildi.",
                'body' => "<p>Platforma nazariya, metodik modul, resurs markazi va video kutubxonani bir joyga jamladi. Maqsad — talabalarni PIRLS va PISA yondashuvlari asosida matn bilan ishlashga tayyorlash.</p><p>Yaqin kelajakda testlar tizimi va AI yordamchi qo'shiladi.</p>",
            ],
            [
                'type' => ContentType::Blog,
                'slug' => 'pirls-savollari-qanday-tuziladi',
                'title' => 'PIRLS uslubidagi savollarni qanday tuzish kerak?',
                'excerpt' => "Aniq axborotni topishdan baholashgacha — to'rt darajadagi savollarni tuzishning amaliy bosqichlari.",
                'body' => "<p>PIRLS topshiriqlari o'quvchining to'rt xil fikrlash darajasini baholaydi: aniq axborotni topish, bevosita xulosa chiqarish, g'oyani talqin qilish va matnni baholash.</p><p>Har bir matn uchun ushbu to'rt darajaga mos savollar tuzish o'quvchini chuqurroq fikrlashga undaydi.</p>",
            ],
            [
                'type' => ContentType::Blog,
                'slug' => 'ravon-oqishni-rivojlantirish-mashqlari',
                'title' => "Ravon o'qishni rivojlantiruvchi 5 ta samarali mashq",
                'excerpt' => "Takroriy o'qish, juftlikda o'qish va audio bilan o'qish kabi mashqlar boshlang'ich sinfda qanday qo'llaniladi.",
                'body' => "<p>Ravon o'qish — aniqlik, tezlik va ifodalilikning birligi. Quyidagi mashqlar o'quvchining o'qish sur'ati va tushunishini bir vaqtda oshiradi.</p><p>Eng muhimi — tezlikni emas, mazmunni tushunishni kuzatish.</p>",
            ],
        ];
    }

    /**
     * The 7 theory pages transcribed from the methodology document.
     *
     * @return array<int, array<string, string>>
     */
    private function theoryPages(): array
    {
        return [
            [
                'slug' => 'oqish-savodxonligi-tushunchasi',
                'title' => "O'qish savodxonligi tushunchasi",
                'excerpt' => "O'qish savodxonligi nima va u oddiy o'qish malakasidan qanday farq qiladi.",
                'goal' => "Foydalanuvchiga o'qish savodxonligi tushunchasining mazmunini tushuntirish, uni oddiy o'qish malakasidan farqlash hamda boshlang'ich sinf o'quvchilarida o'qish savodxonligini rivojlantirish zaruratini asoslash.",
                'body' => <<<'HTML'
<p>O'qish savodxonligi — bu o'quvchining matnni faqat tovushlab yoki ichida o'qishi emas, balki o'qilgan matn mazmunini anglash, undagi asosiy fikrni ajratish, ma'lumotlarni tahlil qilish, xulosa chiqarish, o'z munosabatini bildirish va matndan hayotiy vaziyatlarda foydalana olish qobiliyatidir.</p>
<p>Boshlang'ich sinfda o'qish savodxonligi bolaning keyingi ta'lim bosqichlaridagi muvaffaqiyatini belgilovchi asosiy omillardan biridir.</p>
<p>O'qish savodxonligi quyidagi tarkibiy ko'nikmalarni o'z ichiga oladi:</p>
<ul>
<li>matnni to'g'ri va ravon o'qish;</li>
<li>matndan aniq axborotni topish;</li>
<li>asosiy fikrni ajratish;</li>
<li>sabab-oqibat bog'lanishlarini tushunish;</li>
<li>yashirin ma'noni anglash;</li>
<li>xulosa chiqarish;</li>
<li>matnga nisbatan shaxsiy munosabat bildirish;</li>
<li>javobni matndan dalil bilan asoslash.</li>
</ul>
HTML,
                'examples' => "1-misol. Oddiy o'qish va o'qish savodxonligi farqi.\nMatn: \"Aziza daraxt tagida yotgan qushchani ko'rib qoldi. U qushchani ehtiyotlab olib, uyasiga qo'ydi.\"\nOddiy savol: Aziza nimani ko'rib qoldi?\nO'qish savodxonligiga yo'naltirilgan savol: Azizaning harakatidan uning qanday fazilatga ega ekanini bilish mumkin?",
                'tasks' => "• O'qish savodxonligi oddiy o'qishdan nimasi bilan farq qiladi?\n• Boshlang'ich sinf o'quvchisi matnni tushunganini qanday aniqlash mumkin?\n• Kichik matn tanlang va unga uch xil savol tuzing: aniq javobli, xulosa chiqarishga oid, baholashga oid.",
                'expected_result' => "Foydalanuvchi o'qish savodxonligi tushunchasini to'g'ri anglaydi, uni oddiy o'qish malakasidan farqlaydi va o'quvchini fikrlashga undovchi savollar tuzishga tayyorlanadi.",
            ],
            [
                'slug' => 'pirls-dasturida-oqish-savodxonligi',
                'title' => "PIRLS dasturida o'qish savodxonligi",
                'excerpt' => "PIRLS xalqaro baholash dasturida o'qish savodxonligi qanday talqin qilinadi.",
                'goal' => "PIRLS xalqaro baholash dasturida o'qish savodxonligining qanday talqin qilinishini tushuntirish, PIRLS topshiriqlarining mazmuni va o'qituvchi tayyorgarligidagi ahamiyatini ochib berish.",
                'body' => <<<'HTML'
<p>PIRLS — boshlang'ich sinf o'quvchilarining o'qish savodxonligini xalqaro miqyosda baholashga qaratilgan tadqiqotdir. Unda asosan 4-sinf o'quvchilarining matnni o'qish, tushunish, talqin qilish va baholash ko'nikmalari o'rganiladi.</p>
<p>PIRLSda matnlar ikki asosiy maqsadga xizmat qiladi:</p>
<ul>
<li>Adabiy tajriba orttirish — badiiy matnlar orqali obraz, voqea, qahramon va g'oyani anglash;</li>
<li>Axborot olish va undan foydalanish — ilmiy-ommabop matnlar orqali faktlarni topish, solishtirish va umumlashtirish.</li>
</ul>
<p>PIRLS topshiriqlari quyidagi fikrlash darajalarini baholaydi:</p>
<ul>
<li>matndan aniq axborotni topish;</li>
<li>bevosita xulosa chiqarish;</li>
<li>g'oya va axborotni talqin qilish;</li>
<li>matn mazmuni, tili va tuzilishini baholash.</li>
</ul>
HTML,
                'examples' => "Matn: \"Bahor keldi. Bolalar maktab hovlisiga gul ko'chatlari ekishdi. Dilorom eng kichik ko'chatni ehtiyotlab sug'ordi.\"\n• Aniq axborot: Bolalar qayerga gul ko'chatlari ekishdi?\n• Xulosa: Diloromning ko'chatni sug'orishi uning qanday bola ekanini ko'rsatadi?\n• Baholash: Bolalarning ishini foydali deb hisoblaysizmi? Matndan dalil bilan asoslang.",
                'tasks' => "• PIRLS dasturida o'qish savodxonligi qanday ko'nikmalar orqali baholanadi?\n• Kichik matn tanlang va unga PIRLSga mos 4 xil savol tuzing.\n• 0–2 ballik baholash mezoni ishlab chiqing.",
                'expected_result' => "Foydalanuvchi PIRLS dasturida o'qish savodxonligi qanday baholanishini tushunadi va matn asosida turli darajadagi savollar tuzishni o'rganadi.",
            ],
            [
                'slug' => 'pisa-va-funksional-oqish-savodxonligi',
                'title' => "PISA va funksional o'qish savodxonligi",
                'excerpt' => "PISA dasturida o'qish savodxonligining funksional, hayotiy mazmuni.",
                'goal' => "PISA dasturida o'qish savodxonligining funksional mazmunini tushuntirish, boshlang'ich ta'limda keyingi bosqich savodxonligi uchun poydevor yaratish zarurligini asoslash.",
                'body' => <<<'HTML'
<p>PISA xalqaro baholash dasturi asosan 15 yoshli o'quvchilarning hayotiy vaziyatlarda bilimdan foydalanish qobiliyatini baholaydi. Unda o'qish savodxonligi o'quvchining matnni tushunishi, undan foydalanishi, baholashi va o'z maqsadlariga erishishda yozma axborotdan foydalana olishi sifatida talqin qilinadi.</p>
<p>Funksional o'qish savodxonligi — bu o'quvchining matnni faqat dars uchun emas, balki kundalik hayotda ham tushunib ishlata olishidir: e'lonni o'qish, yo'riqnomani tushunish, jadvaldan ma'lumot olish kabi.</p>
<p>Boshlang'ich sinf o'qituvchisi o'quvchilarni turli hayotiy matnlar bilan ishlashga o'rgatishi lozim:</p>
<ul>
<li>e'lon, jadval, xarita;</li>
<li>yo'riqnoma, taklifnoma, xat;</li>
<li>retsept, ro'yxat, afisha, qisqa ma'lumotnoma.</li>
</ul>
HTML,
                'examples' => "E'lon: \"Shanba kuni soat 10:00 da maktab kutubxonasida 'Kitobxon bolalar' tanlovi bo'lib o'tadi.\"\nSavollar: Tanlov qayerda bo'lib o'tadi? Qaysi kuni boshlanadi? Ishtirokchi nima haqida gapirishi kerak?",
                'tasks' => "• Funksional o'qish savodxonligi deganda nimani tushunasiz?\n• E'lon, jadval yoki yo'riqnoma asosida 5 ta savol tuzing.\n• \"Matnni hayotda qo'llash\" mavzusida kichik topshiriq ishlab chiqing.",
                'expected_result' => "Foydalanuvchi PISA yondashuvi orqali o'qish savodxonligining hayotiy mazmunini anglaydi va turli matn turlari bilan ishlash zarurligini tushunadi.",
            ],
            [
                'slug' => 'matnni-tushunish-nazariyasi',
                'title' => 'Matnni tushunish nazariyasi',
                'excerpt' => 'Matnni tushunish jarayonining bosqichlari va metodik asoslari.',
                'goal' => "Matnni tushunish jarayonining bosqichlarini izohlash, mazmunni anglash, tahlil qilish va xulosa chiqarish ko'nikmalarini rivojlantirishning metodik asoslarini ko'rsatish.",
                'body' => <<<'HTML'
<p>Matnni tushunish — bu o'quvchining yozilgan so'zlarni o'qishi bilangina yakunlanmaydigan, balki matndagi ma'no, bog'lanish, g'oya, obraz va axborotni anglashga qaratilgan murakkab aqliy jarayondir.</p>
<p>Matnni tushunish quyidagi bosqichlarda shakllanadi:</p>
<ul>
<li>So'z darajasida tushunish — so'zlarning ma'nosini anglash;</li>
<li>Gap darajasida tushunish — gapdagi fikrni tushunish;</li>
<li>Matn darajasida tushunish — qismlar o'rtasidagi bog'lanishni anglash;</li>
<li>Xulosa darajasida tushunish — bevosita aytilmagan ma'noni topish;</li>
<li>Baholash darajasida tushunish — matnga munosabat bildirish.</li>
</ul>
<p>Boshlang'ich sinfda matnni tushunishga o'rgatish o'qishdan oldingi, o'qish jarayonidagi va o'qishdan keyingi faoliyatlar orqali amalga oshiriladi.</p>
HTML,
                'examples' => "Matn sarlavhasi: \"Kichik bog'bon\".\nO'qishdan oldin: Matn nima haqida bo'lishi mumkin?\nO'qish jarayonida: Qahramon nima ish qildi? Qaysi gap asosiy fikrni bildiradi?\nO'qishdan keyin: Matndan qanday xulosa chiqardingiz?",
                'tasks' => "• Matnni tushunish qanday bosqichlardan iborat?\n• Bitta kichik matn tanlang va unga o'qishdan oldin, davomida va keyingi savollar tuzing.\n• \"Matnni tushunmadim\" degan o'quvchiga qanday yordam berasiz?",
                'expected_result' => "Foydalanuvchi matnni tushunish bosqichlarini biladi va o'quvchini xulosa chiqarish hamda javobini asoslashga yo'naltira oladi.",
            ],
            [
                'slug' => 'ravon-oqish',
                'title' => "Ravon o'qish",
                'excerpt' => "Ravon o'qish tushunchasi va uni rivojlantirish usullari.",
                'goal' => "Ravon o'qish tushunchasini izohlash, uning o'qish savodxonligi bilan bog'liqligini ko'rsatish va uni rivojlantirish usullarini yoritish.",
                'body' => <<<'HTML'
<p>Ravon o'qish — bu matnni to'g'ri, me'yorida, ifodali va tushungan holda o'qish qobiliyatidir. Ravon o'qish faqat tez o'qish degani emas.</p>
<p>Ravon o'qish uch asosiy tarkibiy qismdan iborat:</p>
<ul>
<li>Aniqlik — so'zlarni xatosiz o'qish;</li>
<li>Tezlik — yoshiga mos sur'atda o'qish;</li>
<li>Ifodalilik — tinish belgilari, ohang va mazmunga mos o'qish.</li>
</ul>
<p>Ravon o'qishni rivojlantirishda samarali usullar: takroriy o'qish, juftlikda o'qish, o'qituvchi ortidan o'qish, audio bilan birga o'qish, rollarga bo'lib o'qish.</p>
HTML,
                'examples' => "Mashq 1. Takroriy o'qish: o'quvchi matnni bir necha marta o'qiydi, har safar aniqlik va ifodalilik yaxshilanadi.\nMashq 2. Audio bilan o'qish: avval tinglaydi, so'ng birga o'qiydi, keyin mustaqil o'qib o'z ovozini solishtiradi.",
                'tasks' => "• Ravon o'qishning uch asosiy tarkibiy qismini ayting.\n• Tez o'qish va ravon o'qish o'rtasida qanday farq bor?\n• 2-sinf o'quvchilari uchun ravon o'qishni rivojlantiruvchi 3 ta mashq tuzing.",
                'expected_result' => "Foydalanuvchi ravon o'qish mazmunini to'g'ri tushunadi va to'g'ri, ifodali, mazmunli o'qishni rivojlantirish usullarini qo'llay oladi.",
            ],
            [
                'slug' => 'tanqidiy-oqish',
                'title' => "Tanqidiy o'qish",
                'excerpt' => "Matnga ongli munosabat, fakt va fikrni farqlash ko'nikmalari.",
                'goal' => "Tanqidiy o'qish tushunchasini yoritish, matnga ongli munosabat bildirish, fakt va fikrni farqlash, dalil asosida javob berish ko'nikmalarini rivojlantirish yo'llarini ko'rsatish.",
                'body' => <<<'HTML'
<p>Tanqidiy o'qish — bu o'quvchining matnni shunchaki qabul qilishi emas, balki uning mazmuni ustida o'ylashi, savol berishi, dalil izlashi, ma'lumotni baholashi va o'z munosabatini asoslay olishidir.</p>
<p>Tanqidiy o'qish quyidagi ko'nikmalarni o'z ichiga oladi:</p>
<ul>
<li>fakt va fikrni farqlash;</li>
<li>muallifning asosiy g'oyasini aniqlash;</li>
<li>dalil topish;</li>
<li>qahramon harakatiga baho berish;</li>
<li>o'z fikrini asoslash va boshqa fikrni hurmat qilish.</li>
</ul>
<p>Boshlang'ich sinfda tanqidiy o'qish sodda savollar, hayotiy misollar va matnga munosabat bildirish orqali shakllantiriladi.</p>
HTML,
                'examples' => "Matn: \"Ali maktabga ketayotib yo'lda pul topib oldi. U pulni o'qituvchisiga olib borib berdi.\"\nFakt: Ali yo'lda pul topib oldi. Fikr: Ali juda halol bola.\nTanqidiy savol: Matndagi qaysi gap Alining halol bola ekanini ko'rsatadi?",
                'tasks' => "• Tanqidiy o'qish nima?\n• Fakt va fikrga 2 tadan misol keltiring.\n• Kichik matn tanlang va unga tanqidiy o'qishga oid 5 ta savol tuzing.",
                'expected_result' => "Foydalanuvchi tanqidiy o'qishning boshlang'ich sinf uchun mos shakllarini biladi va o'quvchilarga matnni baholash, dalil topish va fikrini asoslashni o'rgatadi.",
            ],
            [
                'slug' => 'metakognitiv-strategiyalar',
                'title' => 'Metakognitiv strategiyalar',
                'excerpt' => "O'quvchini o'z o'qish jarayonini anglash va boshqarishga o'rgatish.",
                'goal' => "Metakognitiv strategiyalarni o'qish savodxonligini rivojlantirish vositasi sifatida izohlash, o'quvchini o'z o'qish jarayonini anglash, nazorat qilish va baholashga o'rgatish yo'llarini ko'rsatish.",
                'body' => <<<'HTML'
<p>Metakognitsiya — bu o'quvchining o'z fikrlash jarayonini anglay olishi, qanday o'qiyotganini, nimani tushunganini va nimada qiynalayotganini bilishidir.</p>
<p>Metakognitiv strategiyalar uch bosqichda qo'llanadi:</p>
<ul>
<li>O'qishdan oldin — sarlavha va kalit so'zlar asosida taxmin qilish;</li>
<li>O'qish jarayonida — o'z tushunishini kuzatish, notanish so'zlarni aniqlash;</li>
<li>O'qishdan keyin — o'qilganini umumlashtirish va baholash.</li>
</ul>
<p>Metakognitiv strategiyalar o'quvchini mustaqil o'quvchiga aylantiradi: u tushunmagan joyini sezadi, savol beradi, qayta o'qiydi va o'z xulosasini shakllantiradi.</p>
HTML,
                'examples' => "\"Bashorat qilaman\" strategiyasi: o'quvchi sarlavha asosida voqeani taxmin qiladi, o'qigach taxminini tekshiradi.\n\"To'xtab o'yla\" strategiyasi: har bir qismdan keyin \"Men tushundim / tushunmadim / savolim bor\" jadvalini to'ldiradi.",
                'tasks' => "• Metakognitsiya nima?\n• \"Men nimani tushundim?\" savoli nima uchun muhim?\n• Bitta matn tanlang va unga uch bosqichli (oldin, davomida, keyin) topshiriq tuzing.",
                'expected_result' => "Foydalanuvchi metakognitiv strategiyalar mazmunini tushunadi va o'quvchida mustaqil o'qish, ongli tushunish va xulosa chiqarish ko'nikmalarini rivojlantiradi.",
            ],
        ];
    }
}
