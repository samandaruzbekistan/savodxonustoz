<?php

namespace App\Console\Commands;

use App\Enums\ContentType;
use App\Models\Content;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FetchErtakWordImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-ertak-word-images {slug? : Fairy tale slug. Omit to process every published ertak.} {--force : Refetch even if an image already exists for a word}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Fetch a Pixabay illustration for each 'yangi so'z' of one or all fairy tales and store it locally.";

    /**
     * Uzbek word (normalized: lowercase, straight apostrophe) to English
     * search term, so Pixabay — which does not index Uzbek — returns
     * relevant illustrations.
     *
     * @var array<string, string>
     */
    protected array $dictionary = [
        // Aqlli chumoli (1-sinf)
        'chumoli' => 'ant',
        'ziyrakcha' => 'ant cartoon',
        'dala' => 'field',
        'jajji' => 'small cute animal',
        'don' => 'wheat grain',
        'uya' => 'nest',
        'oziq' => 'food storage',
        'chigirtka' => 'grasshopper',
        'yoz' => 'summer',
        'qish' => 'winter',
        'qor' => 'snow',
        'och' => 'hungry child',
        'yordam' => 'helping hand',
        'mehnatkash' => 'hard worker',
        "va'da" => 'promise handshake',

        // Dangasa ayiqcha
        'dangasa' => 'lazy',
        'ayiqcha' => 'bear cub',
        'mehnat' => 'labor work',
        'oziq-ovqat' => 'food',
        'uyaldi' => 'embarrassed child',

        // Kamtar gul
        "bog'" => 'garden',
        'gul' => 'flower',
        'binafsha' => 'violet flower',
        'atirgul' => 'rose flower',
        'lola' => 'tulip flower',
        'chiroyli' => 'beautiful',
        "xushbo'y" => 'fragrant flower',
        'maqtanmoq' => 'boasting cartoon',
        'sokin' => 'calm quiet',
        'yoqimli' => 'pleasant',
        'kamtar' => 'modest humble',
        'odob' => 'politeness',
        'hurmat' => 'respect',

        // Kichkina baliqcha
        'baliqcha' => 'little fish',
        "ko'l" => 'lake',
        'kumushcha' => 'silver fish',
        'qiziquvchan' => 'curious child',
        'suzdi' => 'swimming fish',
        'uzoq' => 'far distance',
        "yolg'iz" => 'lonely alone',
        'ogohlantirdi' => 'warning sign',
        'tosh' => 'stone rock',
        "yo'l" => 'road path',
        "yig'ladi" => 'crying child',
        'toshbaqa' => 'turtle',
        'xursand' => 'happy child',
        'nasihat' => 'advice',

        // Kulcha bo'lishgan bolalar
        'kulcha' => 'bread bun',
        'oybek' => 'boy cartoon',
        'anvar' => 'boy student cartoon',
        'maktab' => 'school',
        'tanaffus' => 'school break',
        'nonushta' => 'breakfast',
        'xafa' => 'sad child',
        'shoshildi' => 'hurry',
        "bo'lishdi" => 'sharing food',
        'yarim' => 'half',
        "do'st" => 'friends',
        'mehribon' => 'kind caring',
        'saxiy' => 'generous',
        'quvonchli' => 'joyful',

        // Mehribon quyoncha
        'quyoncha' => 'bunny rabbit',
        'momiqvoy' => 'fluffy rabbit cartoon',
        "o'rmon" => 'forest',
        'chaqqon' => 'agile quick animal',
        'quvnoq' => 'cheerful',
        'sabzi' => 'carrot',
        'chumchuqcha' => 'little sparrow',
        'qanot' => 'wing',
        'barg' => 'leaf',
        'suv' => 'water',
        'tipratikan' => 'hedgehog',
        'tabib' => 'doctor healer',
        "sog'aydi" => 'recovery healed',

        // Qaldirg'och va daraxt
        "qaldirg'och" => 'swallow bird',
        'daraxt' => 'tree',
        'hovli' => 'yard courtyard',
        'bahor' => 'spring season',
        'shox' => 'tree branch',
        'in' => 'bird nest',
        'shamol' => 'wind',
        'qimirladi' => 'moving branch',
        'asrayman' => 'protecting',
        'buzilmadi' => 'intact unbroken',
        'hasharot' => 'insect',
        "do'stlik" => 'friendship',

        // Rostgo'y bola
        "rostgo'y" => 'honest boy',
        'bola' => 'child boy',
        'qishloq' => 'village',
        'aqlli' => 'smart child',
        'koptok' => 'ball toy',
        'kosa' => 'bowl',
        'sindi' => 'broken object',
        "qo'rqdi" => 'scared child',
        'kechiring' => 'sorry apology',
        'rost' => 'truth',
        'uy' => 'house',
        'fazilat' => 'virtue',

        // Sehrli urug'
        "urug'" => 'seed',
        'sehrli' => 'magic',
        'bobo' => 'grandfather',
        'ekdi' => 'planting seed',
        'suv quydi' => 'watering plant',
        'quyosh' => 'sun',
        'nihol' => 'sapling',
        "g'amxo'rlik" => 'caring',
        'hayron' => 'surprised child',
        'mehr' => 'love care',
        'natija' => 'result success',

        // Yo'qolgan qalam
        'sinf' => 'classroom',
        'nodira' => 'girl student cartoon',
        'tartibli' => 'organized tidy',
        'ozoda' => 'clean tidy',
        'qalam' => 'pencil',
        "yo'qoldi" => 'lost object',
        'parta' => 'school desk',
        'topdi' => 'found object',
        'jasur' => 'boy student cartoon',
        'egasi' => 'owner',
        'qaytardi' => 'returning object',
        'halol' => 'honest',
        'maqtadi' => 'praised child',

        // Adashgan bulutcha
        'oppoqoy' => 'white cloud cartoon',
        'bulutcha' => 'little cloud',
        "yomg'ir" => 'rain',
        "sug'ormoq" => 'irrigation watering',
        'ajralmoq' => 'separating clouds',
        "cho'l" => 'desert',
        'adashmoq' => 'getting lost',
        'kechirim' => 'forgiveness',
        'birlashmoq' => 'uniting together',
        'yashnamoq' => 'blooming flourishing',

        // Bilimdon qarg'acha
        "qarg'acha" => 'crow bird',
        'qoravoy' => 'black crow cartoon',
        'kitob' => 'book',
        'deraza' => 'window',
        "o'qituvchi" => 'teacher',
        'harf' => 'letter alphabet',
        'son' => 'number',
        'tabiat' => 'nature',
        'bilimdon' => 'knowledgeable child',

        // Gapiradigan daftar
        'daftar' => 'notebook',
        'tartibsiz' => 'messy notebook',
        'sahifa' => 'page',
        'bukilgan' => 'folded paper',
        'siyoh' => 'ink',
        'uy vazifasi' => 'homework',
        'bilim' => 'knowledge',
        'saqlamoq' => 'keeping storing',
        'xijolat' => 'embarrassment',
        'muqovalamoq' => 'book cover',
        'qator' => 'row line',
        "o'zgarish" => 'change transformation',
        'minnatdor' => 'grateful',

        // Maqtanchoq qalam
        'quti' => 'box',
        'rangli' => 'colorful pencils',
        'qizil' => 'red color',
        "ko'k" => 'blue color',
        'sariq' => 'yellow color',
        'yashil' => 'green color',
        'maqtanchoq' => 'boastful cartoon',
        'kerakli' => 'necessary useful',
        'olma' => 'apple',
        'bayroq' => 'flag',
        'osmon' => 'sky',
        'daryo' => 'river',
        'maysa' => 'grass lawn',

        // Mehnatkash ari
        'asaloy' => 'bee cartoon',
        'ari' => 'bee',
        'gulzor' => 'flower garden',
        'shira' => 'nectar flower',
        'kapalakoy' => 'butterfly cartoon',
        'kapalak' => 'butterfly',
        "o'yin-kulgi" => 'playing fun',
        'asal' => 'honey',
        'sovuq shamol' => 'cold wind',
        "so'lmoq" => 'wilting flower',
        'xato' => 'mistake',
        'qadr' => 'value worth',
        'kelajak' => 'future',

        // Mehrli non
        'sinfdosh' => 'classmate',
        'komil' => 'boy student cartoon',
        'issiq non' => 'warm bread',
        'sumka' => 'school bag',
        'qorni och' => 'hungry stomach',
        'rahmat' => 'thank you',
        "bo'lishmoq" => 'sharing food',

        // Sabrsiz nihol
        'soyali' => 'shady tree',
        "bog'bon" => 'gardener',
        'yumshatmoq' => 'loosening soil',
        'sabrsiz' => 'impatient',
        'keksa daraxt' => 'old tree',
        'vaqt' => 'time clock',
        'quyosh nuri' => 'sunlight',
        'parvarish' => 'plant care',
        'ildiz' => 'root',
        'qush' => 'bird',
        'maqsad' => 'goal target',
        'erishmoq' => 'achieving success',

        // Sehrli so'z
        'aziz' => 'boy cartoon',
        'shaharcha' => 'small town',
        'iltimos' => 'please request',
        'kechirasiz' => 'excuse me',
        "sehrli so'z" => 'magic word',
        "do'kon" => 'shop store',
        'sotuvchi' => 'shopkeeper seller',
        'jilmaymoq' => 'smiling child',
        "o'ylanmoq" => 'thinking child',
        'bexosdan' => 'accidentally bumping',
        'yelka' => 'shoulder',
        "hechqisi yo'q" => 'no problem friendly',
        'odobli' => 'polite child',
        'quvontirmoq' => 'making happy',

        // Sehrli supurgi
        'malika' => 'princess',
        'supurgi' => 'broom',
        'eski' => 'old object',
        'qimirlamoq' => 'moving broom',
        'chang' => 'dust',
        'tartib' => 'order tidiness',
        'barakalla' => 'well done cheering',

        // Toza buloq
        'buloq' => 'spring water source',
        'toza' => 'clean water',
        'tiniq' => 'clear water',
        "tog' etagi" => 'mountain foothill',
        'shirinlik' => 'sweets candy',
        "qog'oz" => 'paper',
        'iflos' => 'dirty water',
        'shildiramoq' => 'babbling stream',
        'dilshod' => 'boy cartoon',
        'asramoq' => 'preserving nature',
        'tozalamoq' => 'cleaning',
        'taxtacha' => 'small board',
        'axlat' => 'trash garbage',
        'burch' => 'duty responsibility',

        // Aqlli chumoli (3-sinf) / shared short words
        'kun' => 'sun day',
        'yer' => 'earth ground',
        'bor' => 'go arrow',
        'kel' => 'come arrow',

        // Dangasa soat
        'soat' => 'clock',
        'dars' => 'lesson classroom',
        'ish' => 'work',
        'kam' => 'less few',
        'tur' => 'wake up alarm',

        // Halol daftar
        'varaqa' => 'paper sheet',

        // Kitobxon quyoncha
        'ona' => 'mother',
        'tez' => 'fast speed',
        'bir' => 'number one',

        // Mehribon daraxt
        'tut' => 'mulberry tree',
        'kuz' => 'autumn',
        'dam' => 'rest relax',

        // Qushcha va bolakay
        'mato' => 'fabric cloth',
        'jon' => 'dear soul',

        // Rostgo'y Kamola
        'baho' => 'grade score',
        'qiz' => 'girl',

        // Sehrli fonarcha
        'nur' => 'light ray',
        "ko'z" => 'eye',
        'kech' => 'evening',
        'top' => 'find search',

        // Sehrli qalam
        'oy' => 'moon',
        'rasm' => 'picture drawing',

        // Yo'qolgan kalit
        'kalit' => 'key',
        'stol' => 'table',
        'joy' => 'place spot',
        'gilam' => 'carpet rug',
        'dada' => 'father',

        // Bir dona urug'ning sayohati
        'momiqcha' => 'fluffy seed fuzz',
        'terak daraxti' => 'poplar tree',
        'tuproq' => 'soil earth',
        'katta daraxt' => 'big tree',
        'qush uyasi' => 'bird nest',

        // Ko'rinmas ko'prik
        'qulay zinapoya' => 'staircase ramp',
        'ovozli kutubxona' => 'audio library',
        'sport zali' => 'gym sports hall',
        'loyiha' => 'project',
        'guruh' => 'group of children',

        // Muzeydagi jim soat
        'muzey' => 'museum',
        'qadimiy idish' => 'ancient pot',
        'eski kitob' => 'old book',
        'tanga' => 'coin',
        'devor soati' => 'wall clock',
        'soat millari' => 'clock hands',
        'yozuv' => 'writing text',
        'kundalik' => 'diary journal',
        'matematika daftari' => 'math notebook',
        "o'qish kitobi" => 'reading book',
        'rasm daftari' => 'sketchbook',

        // Oy nuridagi xarita
        'xarita' => 'map',
        'telefon' => 'phone',
        'eski tut daraxti' => 'old mulberry tree',
        'yaylov' => 'pasture meadow',
        'daraxtjavoblar kaliti' => 'tree',

        // Qog'oz kemaning maktubi
        "qog'oz kema" => 'paper boat',
        'maktab hovlisi' => 'school yard',
        "ko'lmak" => 'puddle',
        "daftar varag'i" => 'notebook page',
        'suv yoli' => 'water stream',
        'doska' => 'chalkboard',
        'rangli qalamlar' => 'colored pencils',
        'birinchi sinf oquvchisi' => 'first grade student',

        // Qumdagi izlar
        'dengiz' => 'sea',
        'qum' => 'sand',
        'izlar' => 'footprints sand',
        'butalar' => 'bushes shrubs',
        'shox-shabba' => 'tree branches',
        'murabbiy' => 'coach trainer',
        'bolalar' => 'children',
        'oromgoh' => 'beach resort',
        "qirg'oq" => 'shore coast',

        // Robotga berilgan va'da
        'robot' => 'robot',
        "g'ildirak" => 'wheel',
        'rangli belgi' => 'colorful sign',
        "qog'oz chiqindi" => 'paper waste',
        'maxsus quti' => 'special box',
        'ip' => 'thread rope',
        'sinfxona' => 'classroom',
        'hakam' => 'judge referee',
        "yo'ljavoblar kaliti" => 'road path',

        // Shamol tegirmonining siri
        'shamol tegirmoni' => 'windmill',
        'qanotlar' => 'windmill blades',
        'mexanizm' => 'gears mechanism',
        'un' => 'flour',
        'elektr energiyasi' => 'electricity energy',

        // Sukunat darsidagi g'alaba
        'chumchuq' => 'sparrow',
        'kutubxona' => 'library',
        'globus' => 'globe',
        'mamlakat nomlari' => 'world map countries',
        'shaxmat' => 'chess',
        "o'quvchilar" => 'students',

        // Tandir hidi kelgan xat
        'xat' => 'letter mail',
        'konvert' => 'envelope',
        'tandir non' => 'tandoor bread',
        'yupqa mato' => 'thin cloth',
        'tandir rasmi' => 'tandoor oven',
        'patir' => 'flatbread',
        "qo'shnilar" => 'neighbors',
    ];

    public function handle(): int
    {
        $key = config('services.pixabay.key');

        if (! $key) {
            $this->error('PIXABAY_API_KEY .env faylida topilmadi.');

            return self::FAILURE;
        }

        $tales = Content::query()
            ->ofType(ContentType::Ertak)
            ->when($this->argument('slug'), fn ($q, $slug) => $q->where('slug', $slug))
            ->get();

        if ($tales->isEmpty()) {
            $this->error('Ertak topilmadi.');

            return self::FAILURE;
        }

        foreach ($tales as $tale) {
            $this->fetchForTale($tale, $key);
        }

        return self::SUCCESS;
    }

    private function fetchForTale(Content $tale, string $key): void
    {
        $words = $tale->meta['tasks']['new_words'] ?? [];

        if (empty($words)) {
            return;
        }

        $this->info("— {$tale->title} ({$tale->slug})");

        $images = $tale->meta['tasks']['new_word_images'] ?? [];

        foreach ($words as $word) {
            if (! $this->option('force') && ! empty($images[$word])) {
                $this->line("  = {$word}: allaqachon mavjud, o'tkazib yuborildi");

                continue;
            }

            try {
                $path = $this->fetchImageForWord($tale->slug, $word, $key);
            } catch (\Throwable $e) {
                $path = null;
                $this->warn("  ! {$word}: {$e->getMessage()}");
            }

            if ($path) {
                $images[$word] = $path;
                $this->line("  ✓ {$word}");
            } else {
                $this->warn("  ✗ {$word}: rasm topilmadi");
            }

            $meta = $tale->meta;
            $meta['tasks']['new_word_images'] = $images;
            $tale->update(['meta' => $meta]);

            usleep(300_000);
        }
    }

    private function fetchImageForWord(string $taleSlug, string $word, string $key): ?string
    {
        $query = $this->dictionary[$this->normalize($word)] ?? $word;

        $response = Http::timeout(20)->retry(2, 500)->get('https://pixabay.com/api/', [
            'key' => $key,
            'q' => $query,
            'image_type' => 'illustration',
            'safesearch' => 'true',
            'per_page' => 3,
        ]);

        if (! $response->ok()) {
            return null;
        }

        $hit = $response->json('hits.0');

        if (! $hit) {
            return null;
        }

        $imageResponse = Http::timeout(20)->retry(2, 500)->get($hit['webformatURL']);

        if (! $imageResponse->ok()) {
            return null;
        }

        $filename = Str::slug($word).'.jpg';
        $path = "ertaklar-words/{$taleSlug}/{$filename}";

        Storage::disk('public')->put($path, $imageResponse->body());

        return $path;
    }

    private function normalize(string $word): string
    {
        $word = str_replace(['’', '‘', 'ʻ', 'ʼ', '`'], "'", $word);

        return mb_strtolower(trim($word));
    }
}
