<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Models\Category;
use App\Models\Content;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Seeds the document-driven content sections that complement the theory
 * pages: methodology module, international experience, support for all
 * learners, books & authors, and home literacy.
 */
class ContentSectionsSeeder extends Seeder
{
    public function run(): void
    {
        $authorId = User::where('email', 'admin@savodxon.uz')->value('id');

        $categories = [
            'metodik-modul' => $this->category('metodik-modul', 'Metodik modul', "Matn bilan ishlash, savol tuzish, PIRLS topshiriqlari, baholash, ravon o'qish va lug'at metodikasi.", 2),
            'xalqaro-tajriba' => $this->category('xalqaro-tajriba', 'Xalqaro tajriba', "O'qish savodxonligini rivojlantirishda jahon mamlakatlari tajribasi.", 3),
            'barcha-oquvchilarga-yordam' => $this->category('barcha-oquvchilarga-yordam', "Barcha o'quvchilarga yordam", "Inklyuziv va differensial yondashuv: har bir o'quvchiga mos metodik yordam.", 4),
            'kitoblar-mualliflar' => $this->category('kitoblar-mualliflar', 'Kitoblar va mualliflar', "1–4-sinflar uchun kitob tavsiyalari, o'zbek va jahon bolalar adabiyoti.", 5),
            'uyda-savodxonlik' => $this->category('uyda-savodxonlik', 'Uyda savodxonlik', "Ota-onalar uchun: bolaning o'qishini uy sharoitida qo'llab-quvvatlash.", 6),
        ];

        $sections = [
            ['category' => 'metodik-modul', 'type' => ContentType::Methodology, 'pages' => $this->methodologyPages()],
            ['category' => 'xalqaro-tajriba', 'type' => ContentType::Example, 'pages' => $this->internationalPages()],
            ['category' => 'barcha-oquvchilarga-yordam', 'type' => ContentType::Recommendation, 'pages' => $this->supportPages()],
            ['category' => 'kitoblar-mualliflar', 'type' => ContentType::Recommendation, 'pages' => $this->bookPages()],
            ['category' => 'uyda-savodxonlik', 'type' => ContentType::Recommendation, 'pages' => $this->homePages()],
        ];

        foreach ($sections as $section) {
            $categoryId = $categories[$section['category']]->id;

            foreach ($section['pages'] as $index => $page) {
                Content::updateOrCreate(
                    ['slug' => $page['slug']],
                    [
                        'category_id' => $categoryId,
                        'author_id' => $authorId,
                        'type' => $section['type'],
                        'title' => $page['title'],
                        'excerpt' => $page['excerpt'],
                        'body' => $page['body'],
                        'meta' => [
                            'goal' => $page['goal'] ?? null,
                            'examples' => $page['examples'] ?? null,
                            'tasks' => $page['tasks'] ?? null,
                            'expected_result' => $page['expected_result'] ?? null,
                        ],
                        'status' => ContentStatus::Published,
                        'sort_order' => $index + 1,
                        'published_at' => now(),
                    ],
                );
            }
        }
    }

    private function category(string $slug, string $name, string $description, int $sort): Category
    {
        return Category::updateOrCreate(
            ['type' => CategoryType::Content, 'slug' => $slug],
            ['name' => $name, 'description' => $description, 'depth' => 0, 'path' => $slug, 'sort_order' => $sort],
        );
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function methodologyPages(): array
    {
        return [
            [
                'slug' => 'matn-bilan-ishlash-metodikasi',
                'title' => 'Matn bilan ishlash metodikasi',
                'excerpt' => "Matnni tanlash, metodik tahlil qilish va dars jarayonida samarali qo'llash.",
                'goal' => "Bo'lajak o'qituvchilarga matnni to'g'ri tanlash, metodik tahlil qilish, o'quvchining yoshiga moslashtirish va dars jarayonida samarali qo'llash yo'llarini o'rgatish.",
                'body' => <<<'HTML'
<p>Matn bilan ishlash — o'qish savodxonligini rivojlantirishning markaziy yo'nalishidir. O'quvchi matn orqali yangi bilim oladi, so'z boyligi ortadi, fikrlash va xulosa chiqarish ko'nikmalari shakllanadi. Zamonaviy yondashuvda matn o'quvchini fikrlashga, savol berishga, dalil topishga undaydigan didaktik vosita sifatida qaraladi.</p>
<p>Matn bilan ishlash uch bosqichda tashkil etiladi:</p>
<ul>
<li><strong>O'qishdan oldin</strong> — mavzuga qiziqish uyg'otish, sarlavha asosida taxmin qilish, yangi so'zlarni tushuntirish;</li>
<li><strong>O'qish jarayonida</strong> — tushunib o'qish, muhim joylarni belgilash, savollarga javob izlash;</li>
<li><strong>O'qishdan keyin</strong> — xulosa chiqarish, munosabat bildirish, ijodiy topshiriq bajarish.</li>
</ul>
<p>Amaliy metodlar: "Sarlavhadan taxmin qil", "Matn xaritasi" (qahramon, voqea, joy, muammo, yechim), "Dalil top", "To'xtab o'qi" va "Besh barmoq xulosasi" (qahramon, voqea, muammo, xulosa, mening fikrim).</p>
HTML,
                'examples' => "Matn: \"Anvar har kuni maktabga ketayotib yo'l chetidagi kichik daraxtni ko'rardi. Bir kuni daraxtning shoxi sinib qolganini payqadi. U darsdan keyin shoxini bog'lab qo'ydi va atrofiga suv quydi.\"\nSavollar: Anvar nimani payqadi? U daraxtga qanday yordam berdi? Bu uning qanday bola ekanini ko'rsatadi? Matndan tabiatga mehr g'oyasini bildiruvchi gapni toping.",
                'tasks' => "• 2–4-sinf uchun mos kichik matn tanlang va matn turini aniqlang.\n• Matndan 5 ta yangi so'z ajrating.\n• O'qishdan oldin, jarayonida va keyin beriladigan 3 tadan savol tuzing.\n• Matn asosida bitta ijodiy topshiriq ishlab chiqing.",
                'expected_result' => "Talaba matnni o'qish savodxonligini rivojlantirish vositasi sifatida tanlay oladi, matn bilan ishlash bosqichlarini rejalashtiradi va o'quvchilarni tushunish, xulosa chiqarish hamda munosabat bildirishga yo'naltira oladi.",
            ],
            [
                'slug' => 'savol-tuzish-metodikasi',
                'title' => 'Savol tuzish metodikasi',
                'excerpt' => "Matn asosida turli darajadagi savollar tuzish va o'quvchini fikrlashga yo'naltirish.",
                'goal' => "Bo'lajak o'qituvchilarga matn asosida turli darajadagi savollar tuzishni, savol orqali o'quvchini fikrlashga yo'naltirishni va o'qish savodxonligini baholaydigan topshiriqlar yaratishni o'rgatish.",
                'body' => <<<'HTML'
<p>Savol — dars jarayonining oddiy yordamchi vositasi emas, balki o'quvchining fikrlashini harakatga keltiruvchi metodik mexanizmdir. To'g'ri tuzilgan savol o'quvchini matnga qaytaradi, dalil izlashga undaydi va mustaqil xulosa chiqarishga yo'naltiradi.</p>
<p>Boshlang'ich sinfda savollar quyidagi darajalarda tuziladi:</p>
<ul>
<li>aniq javobli savollar — javob matnda ochiq berilgan;</li>
<li>tushunishga oid savollar — o'quvchi mazmunni izohlaydi;</li>
<li>xulosa chiqarishga oid savollar — javob mazmundan kelib chiqadi;</li>
<li>talqin qilish savollari — muallif fikri yoki qahramon xarakteri izohlanadi;</li>
<li>baholash savollari — o'quvchi munosabat bildiradi va asoslaydi.</li>
</ul>
<p>Amaliy metodlar: "Kim? Nima? Qachon? Qayerda?", "Nega? Qanday qilib?", "Qanday bildingiz?", "Siz nima deb o'ylaysiz?" va "Savolni o'zing tuz". Har bir matnda kamida bitta "Nega?", bitta "Qanday bildingiz?" va bitta "Siz qanday fikrdasiz?" savoli bo'lishi tavsiya etiladi.</p>
HTML,
                'examples' => "Matn: \"Malika buvisining eski sandig'idan kichik kitob topib oldi. Varaqlari sarg'aygan, lekin ertaklari qiziqarli edi. Malika har kuni buvisidan ertak o'qib berishni so'radi.\"\nSavollar: Malika kitobni qayerdan topdi? Nima uchun u har kuni ertak so'radi? Eski kitoblar nega qadrli bo'lishi mumkin?",
                'tasks' => "• 3-sinf uchun badiiy matn tanlang.\n• 2 ta aniq javobli, 2 ta xulosaga oid va 2 ta baholash savoli tuzing.\n• Har bir savolga namunaviy javob yozing.\n• Savollarning qaysi ko'nikmani rivojlantirishini izohlang.",
                'expected_result' => "Talaba matn asosida turli darajadagi savollar tuzishni o'rganadi va savol orqali o'quvchining tushunish, tahlil, xulosa va baholash ko'nikmalarini rivojlantira oladi.",
            ],
            [
                'slug' => 'pirls-topshiriqlarini-yaratish',
                'title' => 'PIRLS topshiriqlarini yaratish',
                'excerpt' => 'PIRLS tipidagi topshiriqlar, javob kaliti va baholash mezonlarini ishlab chiqish.',
                'goal' => "Bo'lajak o'qituvchilarga PIRLS tipidagi topshiriqlarni yaratish, savollarni o'qish maqsadlariga moslashtirish, javob kaliti va baholash mezonlarini ishlab chiqishni o'rgatish.",
                'body' => <<<'HTML'
<p>PIRLS topshiriqlari o'quvchining matnni qanchalik chuqur tushunayotganini aniqlaydi. Bu oddiy test emas — ular o'quvchining matndan axborot topishi, xulosa chiqarishi, g'oyani talqin qilishi va matnga baho berishini o'lchaydi.</p>
<p>Topshiriq quyidagi elementlardan iborat bo'ladi: matn, savollar, javob variantlari yoki ochiq javob maydoni, javob kaliti, baholash mezoni, ko'nikma turi va ball.</p>
<p><strong>4 darajali savol modeli</strong> — har bir matnga kamida 4 xil savol tuziladi:</p>
<ul>
<li>matndan aniq axborotni topish;</li>
<li>bevosita xulosa chiqarish;</li>
<li>g'oya va axborotni talqin qilish;</li>
<li>matn mazmuni yoki qahramon harakatini baholash.</li>
</ul>
<p>Ochiq javoblar 0–3 ballik rubrika asosida baholanadi: <strong>3 ball</strong> — fikr to'liq, dalil bor, xulosa aniq; <strong>2 ball</strong> — javob to'g'ri, lekin dalil yetarli emas; <strong>1 ball</strong> — javob qisman to'g'ri, fikr yuzaki; <strong>0 ball</strong> — javob matnga aloqador emas.</p>
HTML,
                'examples' => "Matn: \"Bahrom kutubxonadan qushlar haqida kitob oldi. U laylaklar uzoq uchishini va bahorda uyalariga qaytishini bildi. Ertasi kuni daraxtga qushlar uchun uya yasashni o'yladi.\"\nSavollar: Bahrom qanday kitob oldi? (axborot) Nima uchun u uya yasashni o'yladi? (xulosa) Bu harakat uning tabiatga munosabatini qanday ko'rsatadi? (talqin) Siz uning ishini foydali deb hisoblaysizmi? (baholash)",
                'tasks' => "• 4-sinf uchun 250–300 so'zli matn tanlang.\n• 8 ta savol tuzing: 2 ta axborot topish, 2 ta xulosa, 2 ta talqin, 2 ta baholash.\n• Har bir savolga javob kaliti yozing.\n• 2 ta savol uchun 0–3 ballik rubrika yarating.",
                'expected_result' => "Talaba PIRLS tipidagi topshiriqlarni mustaqil ishlab chiqadi, savollarni fikrlash darajalari bo'yicha tuzadi, javob kaliti va baholash mezonlarini yaratadi.",
            ],
            [
                'slug' => 'oquvchi-javobini-baholash',
                'title' => "O'quvchi javobini baholash",
                'excerpt' => "Mezon asosida baholash, to'liq va qisman javoblarni farqlash, rivojlantiruvchi fikr-mulohaza.",
                'goal' => "Bo'lajak o'qituvchilarga o'quvchi javobini mezon asosida baholash, to'liq, qisman va noto'g'ri javoblarni farqlash hamda rivojlantiruvchi fikr-mulohaza berish ko'nikmalarini shakllantirish.",
                'body' => <<<'HTML'
<p>Baholash faqat ball qo'yish emas. Baholash — o'quvchining nimani tushungani, qayerda qiynalgani va keyingi bosqichda qanday yordamga muhtojligini aniqlash vositasidir.</p>
<p>O'quvchi javobini baholashda quyidagilarga e'tibor beriladi: savol mazmunini tushunganmi, javob matnga mosmi, dalil bormi, xulosa aniqmi, fikr mustaqilmi va javob tili tushunarlimi.</p>
<p>Amaliy metodlar: "0–3 ballik rubrika", "Dalil bor — dalil yo'q", "Ikki yulduz, bir tavsiya", "O'zini baholash" va "Juftlikda baholash". Baholashda avval o'quvchining to'g'ri fikrini aniqlang, keyin nimani yaxshilash kerakligini ayting: "Sen qahramon yordam berganini to'g'ri aytding, endi javobingga matndan dalil qo'shsang, fikring yanada kuchli bo'ladi."</p>
HTML,
                'examples' => "Savol: Nima uchun qahramon do'stiga yordam berdi?\n1-javob (1 ball): \"Chunki u yaxshi bola edi.\"\n2-javob (2 ball): \"U do'stining qiynalayotganini ko'rdi va yordam berdi.\"\n3-javob (3 ball): \"Qahramon do'stining og'ir sumkasini ko'tarolmayotganini ko'rib yordam berdi. Bu uning mehribon va e'tiborli bola ekanini ko'rsatadi.\"",
                'tasks' => "• 3 ta o'quvchi javobini 0–3 ballik mezon asosida baholang.\n• Har bir javobga rivojlantiruvchi izoh yozing.\n• To'liq, qisman va noto'g'ri javoblarni farqlang.\n• \"Ikki yulduz, bir tavsiya\" usulida fikr-mulohaza bering.",
                'expected_result' => "Talaba o'quvchi javobini mezon asosida baholaydi, ochiq javoblarni tahlil qiladi, dalil va xulosani farqlaydi hamda rivojlantiruvchi fikr-mulohaza berishni o'rganadi.",
            ],
            [
                'slug' => 'ravon-oqishni-rivojlantirish',
                'title' => "Ravon o'qishni rivojlantirish",
                'excerpt' => "To'g'ri, me'yorida, ifodali va tushungan holda o'qish ko'nikmasini rivojlantirish.",
                'goal' => "Bo'lajak o'qituvchilarga o'quvchilarda to'g'ri, me'yorida, ifodali va tushungan holda o'qish ko'nikmasini rivojlantirish metodikasini o'rgatish.",
                'body' => <<<'HTML'
<p>Ravon o'qish aniqlik, tezlik, ifodalilik va tushunishni birlashtiradi. Uni faqat tezlik bilan baholash noto'g'ri. Asosiy ko'rsatkichlar: so'zlarni xatosiz o'qish, tinish belgilariga rioya qilish, mazmunga mos ohang tanlash, yoshiga mos sur'at va o'qilganni tushunish.</p>
<p>Samarali metodlar:</p>
<ul>
<li><strong>Takroriy o'qish</strong> — matn bir necha marta o'qiladi, har safar aniqlik yaxshilanadi;</li>
<li><strong>Juftlikda o'qish</strong> — kuchliroq o'quvchi sustroq bilan birga o'qiydi;</li>
<li><strong>Echo reading</strong> — o'qituvchi ifodali o'qiydi, o'quvchilar takrorlaydi;</li>
<li><strong>Audio bilan o'qish</strong> — tinglaydi, so'ng qo'shilib o'qiydi;</li>
<li><strong>Rollarga bo'lib o'qish</strong> va o'z ovozini yozib tahlil qilish.</li>
</ul>
<p>O'quvchini boshqalar oldida keskin tanqid qilmang. Har bir kichik yutuqni ko'rsating: "Bugun kechagidan ancha ravon o'qiding", "Tinish belgilariga yaxshi e'tibor berding".</p>
HTML,
                'examples' => "Mashq \"Uch marta o'qi\":\nBirinchi o'qish — so'zlarni to'g'ri o'qishga e'tibor;\nIkkinchi o'qish — tinish belgilariga rioya;\nUchinchi o'qish — ifodali va mazmunli o'qish.\nBaholash: so'zlarni to'g'ri o'qidi; tinish belgilariga rioya qildi; ohang matnga mos bo'ldi; o'qiganini tushuntirib berdi.",
                'tasks' => "• 2-sinf uchun 80–100 so'zli matn tanlang.\n• Ravon o'qish mashg'uloti rejasini tuzing.\n• Talaffuzi qiyin so'zlarni ajrating.\n• Ravon o'qishni baholash uchun 4 mezon belgilang.",
                'expected_result' => "Talaba ravon o'qishni rivojlantirish metodlarini biladi, o'quvchilarning o'qish aniqligi, ifodaliligi va tushunishini kuzata oladi hamda mashg'ulotlarni rejalashtiradi.",
            ],
            [
                'slug' => 'lugat-ustida-ishlash',
                'title' => "Lug'at ustida ishlash",
                'excerpt' => "So'z boyligini kengaytirish va yangi so'zlarni kontekstda tushuntirish.",
                'goal' => "Bo'lajak o'qituvchilarga o'quvchilarning so'z boyligini kengaytirish, yangi so'zlarni kontekstda tushuntirish va lug'at orqali matnni tushunishni chuqurlashtirish metodikasini o'rgatish.",
                'body' => <<<'HTML'
<p>Lug'at boyligi o'qish savodxonligining muhim omilidir. O'quvchi so'z ma'nosini tushunmasa, matn mazmunini ham to'liq anglay olmaydi. Shu sababli lug'at ustida ishlash o'qish darsining alohida emas, balki har bir matn bilan bog'liq zaruriy qismi bo'lishi kerak.</p>
<p>Yo'nalishlar: yangi so'zlarni tushuntirish, so'z ma'nosini kontekstdan aniqlash, sinonim va antonim topish, so'zdan gap tuzish, so'z xaritasi yaratish va kalit so'zlarni ajratish.</p>
<p>Amaliy metodlar: "So'z xaritasi" (ma'no, sinonim, antonim, rasm, gapda qo'llash), "Kontekstdan top", "Rasm va so'z", "Sinonimlar zanjiri" va "Yangi so'z bilan gap tuz". Bir darsda 5–7 ta asosiy so'z bilan chuqur ishlash ko'proq samara beradi. So'zni rasm, harakat, misol va o'quvchining shaxsiy tajribasi bilan bog'lab tushuntiring.</p>
HTML,
                'examples' => "Matn: \"Mehnatsevar chumoli\". Yangi so'zlar: mehnatsevar, g'amxo'r, zaxira, mashaqqat, sabr.\nSo'z xaritasi namunasi — So'z: mehnatsevar; Ma'nosi: ishni yaxshi ko'radigan; Sinonimi: tirishqoq; Gapda: \"Mehnatsevar bola har kuni kitob o'qiydi.\"",
                'tasks' => "• 3-sinf uchun matn tanlang va 8 ta muhim so'z ajrating.\n• Har bir so'z uchun izoh yozing; 3 tasiga sinonim, 3 tasiga antonim toping.\n• 5 ta so'z bilan gap tuzing.\n• Bitta so'z xaritasi ishlab chiqing.",
                'expected_result' => "Talaba yangi so'zlarni matn mazmuni bilan bog'lab o'rgatadi va o'quvchilarning so'z boyligini oshirish orqali matnni tushunish darajasini kuchaytiradi.",
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function internationalPages(): array
    {
        $country = fn (string $slug, string $title, string $excerpt, string $focus, string $body) => [
            'slug' => $slug,
            'title' => $title,
            'excerpt' => $excerpt,
            'body' => "<p class=\"lead\"><strong>Asosiy yo'nalish:</strong> {$focus}</p>".$body,
        ];

        return [
            $country('finlandiya-tajribasi', 'Finlandiya tajribasi', 'Tenglik, kitobxonlik madaniyati va maktab-kutubxona hamkorligi.', "tenglik, kitobxonlik madaniyati, maktab-kutubxona hamkorligi, mustaqil o'qish, media savodxonlik.", <<<'HTML'
<p>Finlandiyada o'qish savodxonligi faqat ona tili darsining vazifasi emas, butun ta'lim jarayonining asosiy kompetensiyalaridan biri sifatida ko'riladi. Milliy savodxonlik strategiyasi savodxonlikni tizimli tashkil etish va o'qituvchilarni qo'llab-quvvatlashga qaratilgan.</p>
<p>O'qituvchi yuqori kasbiy mustaqillikka ega mutaxassis sifatida qaraladi. Asosiy metodik strategiyalar: mustaqil o'qish va kitob tanlash erkinligi, maktab-kutubxona hamkorligi, fanlararo o'qish, o'quvchini qo'llab-quvvatlash hamda media va raqamli savodxonlik.</p>
<p><strong>O'zbekiston uchun:</strong> har bir sinfda kichik kutubxona yaratish, "Haftaning kitobi" loyihasi, o'qish kundaligini yuritish, o'qish darslarini boshqa fanlar bilan bog'lash va o'qishni tushunish hamda dalil bilan baholash.</p>
HTML),
            $country('singapur-tajribasi', 'Singapur tajribasi', "Tizimli til ta'limi va integrativ savodxonlik.", "tizimli til ta'limi, integrativ savodxonlik, mustaqil o'qish, savol-javob va metakognitiv strategiyalar.", <<<'HTML'
<p>Singapurda o'qish savodxonligi til ta'limining markazida turadi. O'quvchilar tinglash, gapirish, o'qish, yozish, ko'rish va namoyon qilish ko'nikmalarini integratsiyada o'zlashtiradilar.</p>
<p>Metodik strategiyalar: <strong>think-aloud</strong> (ovoz chiqarib fikrlash), <strong>questioning</strong> (literal, inferensial, talqin va baholash darajalarida savol), <strong>reading-to-learn</strong>, <strong>extensive reading</strong> (keng o'qish) va metakognitiv monitoring ("Nimani tushundim? Qaysi joyda qiynaldim?").</p>
<p><strong>O'zbekiston uchun:</strong> o'qish darsida tinglash-gapirish-o'qish-yozishni birga tashkil etish, "o'qi — o'yla — javob ber — asosla" algoritmi, think-aloud metodi va keng o'qish ro'yxatini sinflar kesimida shakllantirish.</p>
HTML),
            $country('buyuk-britaniya-tajribasi', 'Buyuk Britaniya tajribasi', "Phonics, reading for pleasure va dalillarga asoslangan o'qitish.", "phonics, reading for pleasure, reading framework, maktab kutubxonasi, dalillarga asoslangan o'qitish.", <<<'HTML'
<p>Angliya tajribasida fonika, ravon o'qish, lug'at boyligi, matnni tushunish va o'qishdan zavqlanish muhim o'rin egallaydi. "The Reading Framework" hujjati maktablarda o'qish asoslarini o'rgatish bo'yicha amaliy yo'riqnoma sifatida qo'llanadi.</p>
<p>Metodik strategiyalar: <strong>systematic synthetic phonics</strong>, <strong>shared reading</strong>, <strong>guided reading</strong> (kichik guruhlar bilan), <strong>reading for pleasure</strong> va <strong>vocabulary in context</strong>.</p>
<p><strong>O'zbekiston uchun:</strong> 1-sinfda tovush-harf asosidagi tizimli o'qish mashqlari, decodable matnlar yaratish, sinf kutubxonalarini rivojlantirish va "haftalik mustaqil o'qish" tizimini joriy qilish.</p>
HTML),
            $country('aqsh-tajribasi', 'AQSH tajribasi', 'Science of Reading va dalillarga asoslangan metodlar.', 'Science of Reading, evidence-based instruction, phonemic awareness, phonics, fluency, vocabulary, comprehension.', <<<'HTML'
<p>AQSHda "Science of Reading" yondashuvi o'qishni o'rgatishda ilmiy dalillarga asoslangan metodlarni qo'llashni nazarda tutadi. O'qish savodxonligi besh komponent orqali tushuntiriladi: fonemik anglash, phonics, ravon o'qish, lug'at boyligi va matnni tushunish.</p>
<p>Metodik strategiyalar: <strong>explicit instruction</strong>, <strong>phonics-based reading</strong>, <strong>repeated reading</strong>, <strong>vocabulary mapping</strong> va <strong>comprehension strategies</strong> (bashorat, savol, aniqlashtirish, umumlashtirish, xulosa).</p>
<p><strong>O'zbekiston uchun:</strong> o'qishning ilmiy asoslari bo'yicha modul kiritish, 1–2-sinflarda tovush-harf va ravon o'qish mashqlarini tizimlashtirish hamda o'qishda qiynalayotgan o'quvchilarni erta aniqlash.</p>
HTML),
            $country('avstraliya-tajribasi', 'Avstraliya tajribasi', 'Explicit teaching va assessment literacy.', 'evidence-based teaching, explicit instruction, assessment literacy, teacher standards, amaliy resurslar.', <<<'HTML'
<p>Avstraliyada dalillarga asoslangan o'qitish, explicit teaching va o'qituvchi kasbiy standartlari muhim ahamiyatga ega. AERO o'qituvchilar uchun savodxonlik bo'yicha amaliy resurslar ishlab chiqadi.</p>
<p>Metodik strategiyalar: <strong>I do — We do — You do</strong> modeli, <strong>explicit vocabulary teaching</strong>, <strong>comprehension monitoring</strong>, <strong>formative assessment</strong> va <strong>differentiated reading tasks</strong> (bir matn asosida oson, o'rta, murakkab topshiriqlar).</p>
<p><strong>O'zbekiston uchun:</strong> dars ishlanmalarida "namuna — birgalikda — mustaqil" modeli, har bir matn uchun uch darajali topshiriq va formative assessmentga o'rgatish.</p>
HTML),
            $country('janubiy-koreya-tajribasi', 'Janubiy Koreya tajribasi', 'Raqamli transformatsiya va ehtiyotkor texnologiya integratsiyasi.', "raqamli transformatsiya, AI darsliklar, individual o'qish yo'li, monitoring, ehtiyotkor texnologiya integratsiyasi.", <<<'HTML'
<p>Janubiy Koreyada raqamli texnologiyalar va sun'iy intellekt vositalarini o'quv jarayoniga kiritishga katta e'tibor qaratilgan. Biroq bu tajriba shuni ham ko'rsatadiki, texnologiya o'qituvchi metodikasini almashtirmasligi kerak — raqamli vosita o'quvchining chuqur tushunishi va muloqotini susaytirmasligi lozim.</p>
<p>Metodik strategiyalar: individual o'qish yo'li, raqamli monitoring, AI yordamida savol yaratish (o'qituvchi tahriri bilan), blended reading va o'qituvchi nazorati.</p>
<p><strong>O'zbekiston uchun:</strong> AI vositalarini o'qituvchiga yordamchi sifatida ishlatish, savollarni metodik ekspertizadan o'tkazish va raqamli resurslarni bosma kitob hamda og'zaki muhokama bilan birlashtirish.</p>
HTML),
            $country('yaponiya-tajribasi', 'Yaponiya tajribasi', 'Matnni chuqur tahlil qilish va guruhli muhokama.', "matnni chuqur tahlil qilish, til faoliyati, guruhli muhokama, o'quvchi fikrini izohlash.", <<<'HTML'
<p>Yaponiyada o'quvchi matn bilan shoshilinch ishlamaydi: matnni diqqat bilan o'qish, fikrni izohlash, guruhda muhokama qilish va o'z taassurotini ifodalashga alohida e'tibor beriladi. O'quvchi matnni yakka, juftlik, guruh va sinf muhokamasida anglaydi.</p>
<p>Metodik strategiyalar: chuqur o'qish (ko'p bosqichli savollar), guruhli muhokama, matnni bo'laklab tahlil qilish, fikrni yozma izohlash va refleksiv yakun ("Men bugun nimani tushundim?").</p>
<p><strong>O'zbekiston uchun:</strong> matnni qismlarga bo'lib tahlil qilish, juftlik va kichik guruh muhokamasini kuchaytirish, har bir javobni izohlashni so'rash va dars oxirida qisqa yozma refleksiya o'tkazish.</p>
HTML),
            [
                'slug' => 'xalqaro-tajribadan-xulosalar',
                'title' => "Xalqaro tajribadan O'zbekiston uchun xulosalar",
                'excerpt' => "Ilg'or mamlakatlar tajribasidan amaliy xulosalar va moslashtirish imkoniyatlari.",
                'body' => <<<'HTML'
<p>Xalqaro tajribalar tahlili shuni ko'rsatadiki, o'qish savodxonligini rivojlantirish faqat matn o'qitish bilan cheklanmaydi. U matn tanlash, savol tuzish, ravon o'qish, lug'at, mustaqil kitobxonlik, baholash, raqamli resurslar va o'qituvchi tayyorgarligi bilan uzviy bog'langan.</p>
<ul>
<li><strong>Finlandiyadan</strong> — sinf kutubxonalari, mustaqil o'qish kundaligi, fanlararo yondashuv;</li>
<li><strong>Singapurdan</strong> — savollarni darajalar bo'yicha tuzish, think-aloud, metakognitiv strategiyalar;</li>
<li><strong>Buyuk Britaniyadan</strong> — erta o'qish, fonika, reading for pleasure, decodable books;</li>
<li><strong>AQSHdan</strong> — Science of Reading asoslari, qiyinchiliklarni erta diagnostika qilish;</li>
<li><strong>Avstraliyadan</strong> — explicit teaching, formative assessment, differensial topshiriqlar;</li>
<li><strong>Janubiy Koreyadan</strong> — raqamli portfel, AI'ni yordamchi sifatida ehtiyotkor qo'llash;</li>
<li><strong>Yaponiyadan</strong> — matnni chuqur tahlil qilish, guruhli muhokama va yozma refleksiya.</li>
</ul>
HTML,
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function supportPages(): array
    {
        return [
            [
                'slug' => 'oqishda-qiynalayotgan-oquvchilar',
                'title' => "O'qishda qiynalayotgan o'quvchilar",
                'excerpt' => "Matnni o'qish yoki tushunishda qiynalayotgan o'quvchilarga metodik yordam.",
                'goal' => "O'qishda qiynalayotgan o'quvchilarni aniqlash va ularga mos metodik yordam, ko'proq vaqt va rag'bat berish.",
                'body' => <<<'HTML'
<p>Ayrim o'quvchilar tovush-harf munosabatini yaxshi o'zlashtirmaganligi, lug'at boyligining kamligi, diqqatning tez chalg'ishi yoki o'qishga qiziqish pastligi sababli matnni o'qish va tushunishda qiynaladi. Eng muhim jihat: o'qishda qiynalayotgan bola dangasa yoki qobiliyatsiz emas — unga mos yordam kerak.</p>
<p>Samarali yondashuvlar: matnni qismlarga bo'lib berish, audio bilan qo'llab-quvvatlash, rasm va kalit so'zlardan foydalanish, qayta o'qish mashqlari, juftlikda o'qish va sodda savollardan boshlash.</p>
<p>O'qituvchi o'quvchini sinf oldida uyaltirmaydi, xatosini keskin tanqid qilmaydi, kichik yutuqlarini rag'batlantiradi va individual rivojlanish jadvalini yuritadi.</p>
HTML,
                'examples' => "Mashq \"Bir gapdan boshlaymiz\": o'quvchiga butun matn emas, bitta gap beriladi.\nNamuna: \"Ali kichik mushukchaga suv berdi.\" Savollar: Kim suv berdi? Ali kimga yordam berdi? Ali qanday bola?\nMashq \"Bo'g'inlab o'qi\": g'am-xo'r-lik, meh-nat-se-var, ku-tub-xo-na.",
                'tasks' => "• O'qishda qiynalayotgan o'quvchini aniqlash uchun kuzatuv mezonlarini belgilang.\n• Bitta matnni audio bilan o'qish mashg'ulotini rejalashtiring.\n• Matndan 5 ta kalit so'z ajrating.\n• Ota-onaga beriladigan 5 ta tavsiya yozing.",
                'expected_result' => "O'quvchining o'qishga ishonchi ortadi, ravon o'qish va matnni tushunish darajasi asta-sekin yaxshilanadi; o'qituvchi qiyinchilikni aniqlab, mos yordam bera oladi.",
            ],
            [
                'slug' => 'differensial-topshiriqlar',
                'title' => 'Differensial topshiriqlar',
                'excerpt' => 'Bir matn asosida turli darajadagi topshiriqlar berish.',
                'goal' => "Bir xil matn asosida o'quvchilarga imkoniyatiga mos turli darajadagi topshiriqlar berishni o'rgatish.",
                'body' => <<<'HTML'
<p>Bir sinfda o'quvchilarning o'qish darajasi bir xil emas. Barchaga bir xil topshiriq berilsa, kuchli o'quvchilar zerikadi, qiynalayotganlar esa muvaffaqiyatsizlik hissini boshdan kechiradi. Differensial yondashuv — bir matn asosida turli darajadagi topshiriqlar berishdir:</p>
<ul>
<li><strong>Oson daraja</strong> — matndan aniq javob topish;</li>
<li><strong>O'rta daraja</strong> — sababni tushuntirish, qahramon harakatini izohlash;</li>
<li><strong>Murakkab daraja</strong> — xulosa chiqarish, baholash, dalil bilan asoslash, ijodiy javob.</li>
</ul>
<p>O'qituvchi o'quvchilarni "kuchli/sust" deb ajratmaydi. Topshiriqlar "1/2/3-daraja" yoki "Yulduzcha/Oycha/Quyoshcha" kabi neytral nomlar bilan beriladi.</p>
HTML,
                'examples' => "Matn: \"Kichik bog'bon\".\nOson: Qahramon kim? U nima ekdi?\nO'rta: Qahramon ko'chatga qanday g'amxo'rlik qildi? Bu uning qanday bola ekanini ko'rsatadi?\nMurakkab: Matnning asosiy g'oyasi nima? Javobingizni matndan dalil bilan asoslang.",
                'tasks' => "• Bitta matn tanlang va uch darajali topshiriq tayyorlang.\n• Har bir darajaga 3 tadan savol yozing.\n• Topshiriqlarga neytral nom bering.\n• Har bir darajani individual baholash mezonini belgilang.",
                'expected_result' => "Barcha o'quvchilar bir matn bilan ishlaydi, lekin har biri o'z imkoniyatiga mos topshiriq bajaradi va muvaffaqiyat hissini oladi.",
            ],
            [
                'slug' => 'ikkinchi-til-sifatida-ozbek-tili',
                'title' => "Ikkinchi til sifatida o'zbek tilini o'rganayotgan o'quvchilar",
                'excerpt' => "O'zbek tilini ikkinchi til sifatida o'rganayotgan o'quvchilarga o'qishni o'rgatish.",
                'goal' => "O'zbek tilini ikkinchi til sifatida o'rganayotgan o'quvchilarning o'qish savodxonligini sodda, ko'rgazmali va bosqichma-bosqich rivojlantirish.",
                'body' => <<<'HTML'
<p>O'zbek tilini ikkinchi til sifatida o'rganayotgan o'quvchi avval so'z ma'nosini, keyin gap va matn mazmunini tushunishga ehtiyoj sezadi. Ularga matnni rasm, harakat, ko'rgazma va sodda izoh bilan qo'llab-quvvatlash zarur.</p>
<p>Samarali yondashuvlar: yangi so'zlarni rasm va harakat bilan tushuntirish, qisqa va tushunarli matnlar tanlash, takroriy tinglash va o'qish, so'z-rasm kartochkalari, sodda gaplardan murakkabga o'tish va o'quvchini gapirishga undash.</p>
<p>O'qituvchi o'quvchining xatosiga sabr bilan yondashadi, og'zaki nutqni rag'batlantiradi va so'z boyligini bosqichma-bosqich oshiradi.</p>
HTML,
                'examples' => "So'z-rasm kartochkasi: \"daraxt\" so'zi rasm bilan ko'rsatiladi, o'quvchi takrorlaydi va gap tuzadi.\nTakroriy tinglash: matn avval tinglanadi, keyin birga o'qiladi, so'ng o'quvchi mustaqil o'qiydi.",
                'tasks' => "• Ikkinchi til o'quvchisi uchun 5 ta so'z-rasm kartochkasi tayyorlang.\n• Qisqa matnni tinglash-o'qish mashg'ulotini rejalashtiring.\n• Sodda 5 ta savol tuzing.\n• Og'zaki nutqni rag'batlantiruvchi topshiriq bering.",
                'expected_result' => "O'quvchining so'z boyligi ortadi, sodda matnlarni tushunadi va o'zbek tilida fikrini ifodalashga asta-sekin o'rganadi.",
            ],
            [
                'slug' => 'iqtidorli-oquvchilar-bilan-ishlash',
                'title' => "Iqtidorli o'quvchilar bilan ishlash",
                'excerpt' => "Murakkab matn va ijodiy topshiriqlarga ehtiyoj sezadigan o'quvchilar.",
                'goal' => "Iqtidorli o'quvchilarni murakkabroq matnlar, ijodiy va tadqiqiy topshiriqlar bilan rivojlantirish.",
                'body' => <<<'HTML'
<p>Ayrim o'quvchilar matnni tez va chuqur tushunadi, murakkabroq matn va ijodiy topshiriqlarga ehtiyoj sezadi. Ularga oddiy topshiriq bersangiz, zerikadi va rivojlanmaydi.</p>
<p>Samarali yondashuvlar: murakkabroq va hajmliroq matnlar berish, ikki matnni solishtirish, muallif pozitsiyasini tahlil qilish, tadqiqiy va ijodiy topshiriqlar (o'z hikoyasini yozish, matnga muqobil yakun), munozara va loyiha ishlari.</p>
<p>Iqtidorli o'quvchini boshqalarga yordamchi sifatida ham jalb qilish mumkin, lekin uning o'z rivojlanishi ham doimiy qo'llab-quvvatlanishi kerak.</p>
HTML,
                'examples' => "Topshiriq: ikki hikoyani solishtirib, qahramonlar qarorlarining sabab va oqibatlarini jadvalda ko'rsating.\nIjodiy topshiriq: matnga muqobil yakun yozing va nima uchun shunday yakun tanlaganingizni asoslang.",
                'tasks' => "• Iqtidorli o'quvchi uchun murakkab matn tanlang.\n• Ikki matnni solishtirish topshirig'ini tuzing.\n• Bitta ijodiy va bitta tadqiqiy topshiriq bering.\n• Munozara uchun ochiq savol tayyorlang.",
                'expected_result' => "Iqtidorli o'quvchining tanqidiy va ijodiy fikrlashi rivojlanadi, u matnni chuqur tahlil qiladi va o'z g'oyalarini dalil bilan asoslaydi.",
            ],
            [
                'slug' => 'individual-oqish-xaritasi',
                'title' => "Individual o'qish xaritasi",
                'excerpt' => "Har bir o'quvchining o'qish darajasi va maqsadlarini kuzatish xaritasi.",
                'goal' => "Har bir o'quvchining o'qish darajasi, kuchli va sust tomonlarini hamda keyingi maqsadlarini ko'rsatuvchi individual o'qish xaritasini yuritishni o'rgatish.",
                'body' => <<<'HTML'
<p>Individual o'qish xaritasi — o'quvchining hozirgi o'qish darajasi, kuchli tomonlari, qiyinchiliklari va keyingi maqsadlarini ko'rsatuvchi hujjatdir. U o'qituvchiga har bir o'quvchining rivojlanishini izchil kuzatish imkonini beradi.</p>
<p>Xaritada quyidagilar qayd etiladi: so'zlarni o'qish darajasi, ravonlik, matnni tushunish, dalil topish ko'nikmasi va keyingi maqsad. Darajalar "boshlang'ich — rivojlanayotgan — barqaror" tarzida belgilanadi.</p>
<p>Xarita baho qo'yish uchun emas, balki o'quvchiga mos topshiriq va yordamni rejalashtirish uchun yuritiladi.</p>
HTML,
                'examples' => "Xarita namunasi — Ko'rsatkich / Boshlang'ich / Rivojlanayotgan / Barqaror:\nSo'zlarni o'qish: ko'p yordam bilan → ayrim so'zlarda qiynaladi → mustaqil o'qiydi.\nMatnni tushunish: qisqa javob → asosiy mazmunni qisman → sodda savollarga javob beradi.",
                'tasks' => "• Bitta o'quvchi uchun individual o'qish xaritasini tuzing.\n• 4 ta ko'rsatkichni 3 darajada tavsiflang.\n• O'quvchi uchun keyingi maqsadni belgilang.\n• Xaritaga mos bitta topshiriq tanlang.",
                'expected_result' => "O'qituvchi har bir o'quvchining rivojlanishini izchil kuzatadi va unga mos individual topshiriq hamda yordamni rejalashtiradi.",
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function bookPages(): array
    {
        $grade = fn (string $slug, string $title, string $excerpt, string $body) => compact('slug', 'title', 'excerpt', 'body');

        return [
            $grade('1-sinf-uchun-kitoblar', '1-sinf uchun tavsiya etiladigan kitoblar', 'Qisqa, rasmli va sodda kitoblar.', <<<'HTML'
<p>1-sinf o'quvchisi o'qishni endi o'rganayotgan bo'ladi. Kitoblar qisqa, rasmli, sodda gaplardan tashkil topgan va takroriy so'zlarga ega bo'lishi kerak.</p>
<p>Tavsiya etiladigan turlar: rasmli ertaklar, qisqa hikoyalar, harf va tovushga oid kitobchalar, hayvonlar haqidagi kichik matnlar, topishmoqlar, bolalar she'rlari va decodable books (o'rganilgan harflar asosida o'qiladigan kitobchalar).</p>
<p>Matn bilan ishlash: rasmga qarab taxmin qilish, tinglab tushunish, so'z va rasmni moslashtirish, qahramonni topish, bitta gap bilan javob berish. Savollar sodda bo'ladi: "Hikoyada kim bor?", "Qahramon nima qildi?", "Senga qaysi rasm yoqdi?".</p>
HTML),
            $grade('2-sinf-uchun-kitoblar', '2-sinf uchun tavsiya etiladigan kitoblar', 'Qisqa, qiziqarli voqeali va tarbiyaviy kitoblar.', <<<'HTML'
<p>2-sinf o'quvchisi oddiy matnlarni mustaqil o'qiy boshlaydi. Kitoblar qisqa, voqeasi aniq, qahramonlari tushunarli va tarbiyaviy mazmunga ega bo'lishi kerak.</p>
<p>Tavsiya etiladigan turlar: xalq ertaklari, qisqa hikoyalar, hayvonlar haqidagi hikoyalar, do'stlik va oila haqidagi matnlar, bolalar she'rlari va sodda axborot matnlari.</p>
<p>Matn bilan ishlash: voqealar zanjiri, qahramon harakatini aniqlash, oddiy xulosa chiqarish ("Bu hikoyadan nimani o'rganding?"), matn detektivi (javobni matndan topish) va rasmli reja.</p>
HTML),
            $grade('3-sinf-uchun-kitoblar', '3-sinf uchun tavsiya etiladigan kitoblar', 'Mazmunan boy, tahlilga imkon beradigan kitoblar.', <<<'HTML'
<p>3-sinfda o'quvchi matnni chuqurroq tushunishga, qahramon xarakterini izohlashga va sabab-oqibat bog'lanishini aniqlashga o'rganadi. Kitoblar mazmunan boyroq, voqealari izchil va tahlilga imkon beradigan bo'lishi kerak.</p>
<p>Tavsiya etiladigan turlar: sarguzasht hikoyalar, bolalar qissalari, tarixiy shaxslar haqidagi sodda matnlar, tabiat haqidagi ilmiy-ommabop kitoblar, axloqiy-tarbiyaviy hikoyalar va bolalar ensiklopediyalari.</p>
<p>Matn bilan ishlash: sabab va natija jadvali, qahramon xaritasi, "Dalil top", asosiy g'oyani aniqlash ("Muallif nima demoqchi?") va qahramon kundaligi. Bu PIRLS tipidagi savollarga tayyorgarlikning muhim bosqichidir.</p>
HTML),
            $grade('4-sinf-uchun-kitoblar', '4-sinf uchun tavsiya etiladigan kitoblar', 'Chuqur mazmunli, PIRLS tipidagi matnlar.', <<<'HTML'
<p>4-sinfda o'quvchi matnni o'qish, tushunish, talqin qilish, baholash, dalil topish va mustaqil fikr bildirishga tayyorlanadi. Badiiy va axborot matnlari muvozanatli berilishi kerak.</p>
<p>Tavsiya etiladigan turlar: bolalar qissalari, sarguzasht asarlar, ilmiy-ommabop kitoblar, tarixiy shaxslar haqidagi matnlar, ensiklopedik ma'lumotlar va jahon bolalar adabiyotining moslashtirilgan variantlari.</p>
<p>Matn bilan ishlash: PIRLS savoli konstruktori (4 darajadagi savollar), ikki matnni solishtirish, muallif fikrini aniqlash, "Baholayman va asoslayman" va dalil bilan javob. Bu xalqaro baholash dasturlariga tayyorgarlik uchun muhim.</p>
HTML),
            $grade('ozbek-bolalar-adabiyoti-mualliflari', "O'zbek bolalar adabiyoti mualliflari", 'Milliy qadriyat va ona tiliga hurmatni shakllantiruvchi asarlar.', <<<'HTML'
<p>O'zbek bolalar adabiyoti milliy qadriyat, ona tiliga hurmat, axloqiy tarbiya, mehr-oqibat, mehnatsevarlik, do'stlik va vatanparvarlik tuyg'ularini shakllantirishda muhim o'rin tutadi.</p>
<p>Tavsiya etiladigan mualliflar: Quddus Muhammadiy, Po'lat Mo'min, Xudoyberdi To'xtaboyev, Anvar Obidjon, Tursunboy Adashboyev, Hakim Nazir, G'afur G'ulom, Zafar Diyor, Hamid Olimjon, Erkin Vohidov, Abdulla Oripov va Kavsar Turdiyeva.</p>
<p>Har bir muallif sahifasida qisqa tarjimai hol, bolalar uchun yozgan asarlari, qaysi sinfga mosligi, asar asosida savollar va tarbiyaviy ahamiyati beriladi. 1–2-sinflarda qisqa she'r va ertaklar, 3–4-sinflarda esa mazmunan chuqurroq hikoyalar tanlanadi.</p>
HTML),
            $grade('jahon-bolalar-adabiyoti', 'Jahon bolalar adabiyoti', "O'quvchining dunyoqarashini kengaytiruvchi tarjima asarlar.", <<<'HTML'
<p>Jahon bolalar adabiyoti o'quvchining dunyoqarashini kengaytiradi, boshqa xalqlar hayoti va qadriyatlari bilan tanishtiradi. Asarlar qisqartirilgan yoki moslashtirilgan, tili sodda tarjimada va bolaga tushunarli bo'lishi muhim.</p>
<p>Tavsiya etiladigan mualliflar va asarlar: Hans Kristian Andersen ertaklari, Aka-uka Grimm ertaklari, Sharl Perro ertaklari, Astrid Lindgren asarlari, Mark Tven (moslashtirilgan), Lyuis Kerroll — "Alisa mo'jizalar mamlakatida", Antoine de Saint-Exupéry — "Kichik shahzoda", Rudyard Kipling hikoyalari, Aesop masallari va Gianni Rodari hikoyalari.</p>
<p>Matn bilan ishlash: madaniyatlararo suhbat, qahramonlarni o'zbek ertaklari qahramonlari bilan solishtirish, asar g'oyasini topish, masaldan axloqiy xulosa va ijodiy yakun yozish.</p>
HTML),
            $grade('haftaning-muallifi', 'Haftaning muallifi', 'Har hafta bitta yozuvchi yoki shoir bilan tanishtiruvchi rubrika.', <<<'HTML'
<p>"Haftaning muallifi" — o'quvchilarni har hafta bitta yozuvchi yoki shoir bilan tanishtirishga qaratilgan interaktiv rubrika. Sahifada muallif rasmi, qisqa tarjimai hol, bolalar uchun asarlari, haftaning asari yoki parchasi, audio o'qish, savollar, ijodiy topshiriq va ota-onaga tavsiya beriladi.</p>
<p>Tanlanadigan asar qisqa, o'quvchi yoshiga mos, tarbiyaviy qiymatga ega va audio yoki ifodali o'qishga mos bo'lishi kerak.</p>
<p>Matn bilan ishlash: muallifni 3–5 gapda tanishtirish, parcha o'qish, savol-javob, ijodiy topshiriq (rasm, xat, fikr) va "Men bu muallifdan nimani o'rgandim?" refleksiyasi.</p>
HTML),
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function homePages(): array
    {
        return [
            [
                'slug' => 'ota-onalar-uchun-tavsiyalar',
                'title' => 'Ota-onalar uchun tavsiyalar',
                'excerpt' => "Bolaning o'qishini uy sharoitida qo'llab-quvvatlashning oddiy yo'llari.",
                'goal' => "Ota-onalarga bolaning o'qish savodxonligini uy sharoitida har kuni qo'llab-quvvatlash usullarini ko'rsatish.",
                'body' => <<<'HTML'
<p>Farzandingizning yaxshi o'qishi faqat maktabga bog'liq emas. Uyda kitobga ajratilgan qisqa vaqt ham bolaning nutqi, fikrlashi, xotirasi va o'qishga qiziqishini rivojlantiradi. Bola kitobni sevishi uchun uni majburlash emas, qiziqtirish kerak.</p>
<p>Oddiy qoidalar:</p>
<ul>
<li>har kuni 10–15 daqiqa birga o'qing;</li>
<li>bola xato o'qisa, darhol urishmang — avval tinglang, keyin muloyim tuzating;</li>
<li>matn tugagach, "Nimani tushunding?" deb so'rang;</li>
<li>bola javob berayotganda gapini bo'lmang;</li>
<li>kitob tanlashda bolaning qiziqishini hisobga oling;</li>
<li>kichik yutuqni ham maqtang.</li>
</ul>
<p>15 daqiqalik mashg'ulot namunasi: kitob tanlash (2 daq.) → rasm va sarlavha bo'yicha suhbat (3 daq.) → o'qish yoki tinglash (5 daq.) → savol-javob (3 daq.) → "Men nimani o'rgandim?" xulosasi (2 daq.).</p>
HTML,
                'examples' => "Ota-ona savollari: Matn nima haqida edi? Hikoyada kim bor edi? Senga qaysi joyi yoqdi? Sen uning o'rnida nima qilarding? Bu hikoyadan qanday xulosa olding?",
                'tasks' => "• Bola o'qigan matniga rasm chizadi.\n• Matndan 3 ta yangi so'z topadi.\n• Qahramon haqida 2 ta gap aytadi.\n• Hikoyaga boshqa sarlavha qo'yadi.",
                'expected_result' => "Bola uyda kitob o'qishga odatlanadi, matn mazmunini tushunishga harakat qiladi va o'z fikrini aytishga o'rganadi; ota-ona rivojlanishni kuzatib boradi.",
            ],
            [
                'slug' => 'uyda-oqish-kundaligi',
                'title' => "Uyda o'qish kundaligi",
                'excerpt' => "Bolaning o'qigan kitoblari va xulosalarini yozib boradigan kundalik.",
                'goal' => "Bolaning o'qigan matnlari, yangi so'zlari va xulosalarini qayd etib boruvchi kundalik yuritishni o'rgatish.",
                'body' => <<<'HTML'
<p>Uyda o'qish kundaligi — bolaning o'qigan kitoblari, yangi so'zlari va xulosalarini yozib boradigan kichik daftar yoki jadvaldir. U baho qo'yish uchun emas, balki qiziqishni oshirish, o'qiganini eslab qolish va fikrini ifodalashga o'rgatish uchun yuritiladi.</p>
<p>Kundalikni to'ldirayotganda bola o'ziga savol beradi: "Men nima o'qidim? Menga nima yoqdi? Qaysi so'z yangi bo'ldi? Qanday xulosa oldim?"</p>
<p>Har bir o'qilgan matndan keyin bola quyidagi maydonlarni to'ldiradi: bugun nima o'qidim, matnda kim bor edi, eng qiziq joyi, yangi so'zlar va men olgan xulosa. Ota-ona har hafta kundalikni ko'rib chiqib, bola nechta matn o'qiganini va xulosa yozishi yaxshilanganini kuzatadi.</p>
HTML,
                'examples' => "Kundalik maydonlari: Bugun nima o'qidim? / Matnda kim bor edi? / Eng qiziq joyi qaysi? / Yangi so'zlar / Men olgan xulosa.\nHaftalik kuzatuv: o'qilgan matnlar soni, yangi so'zlar, bola xulosasi, keyingi maqsad.",
                'tasks' => "• O'qigan matnga 1 ta rasm chiz.\n• Qahramonga 1 ta savol yoz.\n• Matndan eng muhim 1 ta gapni ko'chir.\n• Yangi so'z bilan gap tuz.",
                'expected_result' => "Bola muntazam o'qishga odatlanadi, yangi so'zlarni qayd etadi va o'z fikrini yozma shaklda ifodalashga o'rganadi.",
            ],
            [
                'slug' => 'ota-ona-va-bola-uchun-savollar',
                'title' => 'Ota-ona va bola uchun savollar',
                'excerpt' => "Bolaning o'qiganini tushunishga yordam beradigan savollar.",
                'goal' => "Ota-onalarga bolaning o'qiganini tushunishini chuqurlashtiruvchi savollar berishni o'rgatish.",
                'body' => <<<'HTML'
<p>Matndan keyingi savollar bolaning o'qiganini tushungan-tushunmaganini aniqlashga yordam beradi. Ammo savollar faqat "Kim?", "Nima qildi?" bilan tugamasligi kerak — bola asta-sekin "Nega?", "Qanday bilding?", "Sen nima deb o'ylaysan?" savollariga ham javob berishga o'rganishi zarur.</p>
<p>Ota-ona savol berayotganda bolaning javobini sabr bilan tinglashi kerak. Bola noto'g'ri javob bersa, "Yo'q, bunday emas!" o'rniga "Keling, matndan yana bir marta topib ko'ramiz" deyish foydaliroq.</p>
<p>Savollar uch toifaga bo'linadi: aniq javobli (matndan topiladi), tushunish va xulosa (sabab-oqibat) hamda baholash (shaxsiy munosabat va dalil).</p>
HTML,
                'examples' => "Aniq: Hikoyada kim bor edi? Voqea qayerda bo'ldi?\nXulosa: Qahramon nima uchun shunday qildi? Buni qaysi gapdan bilding?\nBaholash: Qahramonning ishi to'g'rimi? Sen nima deb o'ylaysan?",
                'tasks' => "• Bitta matn uchun 2 ta aniq, 2 ta xulosa va 2 ta baholash savoli tuzing.\n• Bolaning javobini sabr bilan tinglash qoidalarini yozing.\n• Noto'g'ri javobga muloyim javob namunasini tayyorlang.",
                'expected_result' => "Bola savollar orqali matnni chuqurroq tushunadi, fikrini dalil bilan asoslashga va mustaqil mulohaza yuritishga o'rganadi.",
            ],
            [
                'slug' => 'oilaviy-kitobxonlik-loyihalari',
                'title' => 'Oilaviy kitobxonlik loyihalari',
                'excerpt' => 'Butun oila ishtirok etadigan kitobxonlik faoliyatlari.',
                'goal' => 'Oilani birgalikda kitobxonlikka jalb qiluvchi sodda loyihalarni taklif etish.',
                'body' => <<<'HTML'
<p>Oilaviy kitobxonlik bola uchun o'qishni quvonchli faoliyatga aylantiradi. Bola ota-ona va aka-ukalari bilan birga o'qiganda, kitob majburiyat emas, balki birgalikdagi yoqimli vaqt sifatida qabul qilinadi.</p>
<p>Oddiy loyihalar:</p>
<ul>
<li><strong>"Haftaning kitobi"</strong> — oila har hafta bitta kitobni birga o'qiydi va muhokama qiladi;</li>
<li><strong>Uy kutubxonasi burchagi</strong> — bola o'z kitoblarini saqlaydigan joy;</li>
<li><strong>"Kitob kechasi"</strong> — haftada bir marta televizor o'rniga birga o'qish;</li>
<li><strong>Oilaviy ertak aytish</strong> — har bir a'zo navbat bilan hikoya davom ettiradi;</li>
<li><strong>Kitob haqida suhbat</strong> — bola o'qigan kitobini oilaga gapirib beradi.</li>
</ul>
<p>Bu loyihalar bolaning nutqini boyitadi, oilaviy muloqotni kuchaytiradi va o'qishga muhabbat uyg'otadi.</p>
HTML,
                'examples' => "\"Haftaning kitobi\": juma kuni oila birga kitob tanlaydi, hafta davomida o'qiydi, yakshanba kuni 10 daqiqa muhokama qiladi.\nOilaviy ertak: ota-ona hikoyani boshlaydi, har bir bola bir gap qo'shib davom ettiradi.",
                'tasks' => "• Bir oylik oilaviy kitobxonlik rejasini tuzing.\n• \"Haftaning kitobi\" uchun 4 ta kitob tanlang.\n• Kitob muhokamasi uchun 5 ta savol tayyorlang.\n• Uy kutubxonasi burchagini tashkil qilish rejasini yozing.",
                'expected_result' => "Oila birgalikda o'qishga odatlanadi, bolaning nutqi va kitobxonlik qiziqishi rivojlanadi, oilaviy muloqot kuchayadi.",
            ],
            [
                'slug' => 'uyda-audio-matndan-foydalanish',
                'title' => 'Uyda audio matndan foydalanish',
                'excerpt' => "Audio matnlar orqali tinglab tushunish va ravon o'qishni rivojlantirish.",
                'goal' => "Ota-onalarga audio matnlardan bolaning tinglab tushunish va ravon o'qish ko'nikmalarini rivojlantirishda foydalanishni o'rgatish.",
                'body' => <<<'HTML'
<p>Audio matnlar bolaning tinglab tushunish, talaffuz va ravon o'qish ko'nikmalarini rivojlantiradi. Ayniqsa o'qishni endi o'rganayotgan yoki o'qishda qiynalayotgan bolalar uchun audio kuchli yordamchidir.</p>
<p>Foydalanish bosqichlari: bola avval audioni tinglaydi, keyin matnni audio bilan birga o'qiydi (kuzatib boradi), so'ng mustaqil o'qishga harakat qiladi. Bu usul "audio bilan o'qish" deb ataladi va ravonlikni sezilarli oshiradi.</p>
<p>Audio tinglagandan keyin ota-ona bolaga sodda savollar beradi: "Matn nima haqida edi? Qaysi qahramon esingda qoldi? Senga yoqdimi?" Audio matn bosma kitob o'rnini bosmaydi, balki uni to'ldiradi.</p>
HTML,
                'examples' => "Bosqichlar: 1) audioni tinglash; 2) audio bilan birga matnni kuzatib o'qish; 3) mustaqil o'qish; 4) sodda savol-javob.\nMaslahat: avval qisqa, bolaga qiziqarli matnlardan boshlang.",
                'tasks' => "• Bolaga mos qisqa audio matn tanlang.\n• \"Audio bilan o'qish\" mashg'ulotini 3 bosqichda rejalashtiring.\n• Audiodan keyin 3 ta sodda savol tuzing.\n• Bolaning tinglab tushunishini kuzatish mezonini belgilang.",
                'expected_result' => "Bolaning tinglab tushunish va ravon o'qish ko'nikmalari rivojlanadi, talaffuzi yaxshilanadi va o'qishga qiziqishi ortadi.",
            ],
        ];
    }
}
