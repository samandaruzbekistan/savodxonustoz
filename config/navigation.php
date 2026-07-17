<?php

/**
 * Central navigation map consumed by both the public top bar
 * (partials/public-nav) and the admin sidebar (partials/admin-sidebar).
 *
 * Each item is rendered only when its route exists (Route::has),
 * so future modules appear automatically as their routes land.
 */
return [

    // Grouped platform modules shown in the "Platforma" mega-menu.
    'public_platform' => [
        [
            'heading' => "O'quv materiallar",
            'items' => [
                ['label' => 'Nazariya',        'route' => 'nazariya.index',          'match' => 'nazariya.*',          'icon' => 'book',      'desc' => "PIRLS, PISA va o'qish asoslari",   'color' => 'bg-indigo-100 text-indigo-600'],
                ['label' => 'Metodik modul',   'route' => 'metodik.index',           'match' => 'metodik.*',           'icon' => 'cap',       'desc' => 'Amaliy metodika va dars rejalari', 'color' => 'bg-violet-100 text-violet-600'],
                ['label' => 'Xalqaro tajriba', 'route' => 'xalqaro.index',           'match' => 'xalqaro.*',           'icon' => 'globe',     'desc' => 'Jahon yetakchi davlatlari tajribasi', 'color' => 'bg-teal-100 text-teal-600'],
                ['label' => 'Dars ishlanmalar', 'route' => 'dars-ishlanmalar.index',  'match' => 'dars-ishlanmalar.*',  'icon' => 'clipboard', 'desc' => 'Tayyor dars ishlanmalari',         'color' => 'bg-amber-100 text-amber-600'],
                ['label' => 'Ilmiy maqolalar', 'route' => 'articles.index',          'match' => 'articles.*',          'icon' => 'library',   'desc' => 'Xalqaro va respublika konferensiya, jurnal maqolalari', 'color' => 'bg-rose-100 text-rose-600'],
                ['label' => "101 o'qish kursi", 'route' => 'reading-course.index',   'match' => 'reading-course.*',    'icon' => 'book',      'desc' => "1-4-sinflar uchun ona tili va o'qish darsliklari", 'color' => 'bg-emerald-100 text-emerald-600'],
                ['label' => 'Sinf strategiyalari', 'route' => 'sinf-strategiyalari.index', 'match' => 'sinf-strategiyalari.*', 'icon' => 'clipboard', 'desc' => "Sinfda matn bilan ishlash bo'yicha amaliy-metodik ko'rsatmalar", 'color' => 'bg-blue-100 text-blue-600'],
                ['label' => 'Barcha o\'quvchilarga yordam', 'route' => 'barcha-oquvchilarga-yordam.index', 'match' => 'barcha-oquvchilarga-yordam.*', 'icon' => 'star', 'desc' => "Differensial va inklyuziv yondashuv bo'yicha amaliy tavsiyalar", 'color' => 'bg-rose-100 text-rose-600'],
            ],
        ],
        [
            'heading' => 'Amaliyot va baholash',
            'items' => [
                ['label' => 'PIRLS konstruktori', 'route' => 'pirls-konstruktor.index', 'match' => 'pirls-konstruktor.*', 'icon' => 'target',   'desc' => 'Matndan PIRLS topshiriq yaratish',  'color' => 'bg-blue-100 text-blue-600'],
                ['label' => 'Diagnostika va baholash', 'route' => 'diagnostika.index', 'match' => 'diagnostika.*', 'icon' => 'check',    'desc' => "O'qish savodxonligini aniqlash va baholash", 'color' => 'bg-sky-100 text-sky-600'],
                ['label' => 'Testlar',          'route' => 'tests.index',          'match' => 'tests.*',          'icon' => 'star',     'desc' => 'PIRLS tipidagi baholash savollari', 'color' => 'bg-emerald-100 text-emerald-600'],
                ['label' => 'Amaliyot maydoni', 'route' => 'amaliyot-maydoni',    'match' => 'amaliyot-maydoni', 'icon' => 'layers',   'desc' => 'Talabalar uchun amaliy mashqlar',  'color' => 'bg-rose-100 text-rose-600'],
                ['label' => 'Video darslar',    'route' => 'video-darslar.index', 'match' => 'video-darslar.*',  'icon' => 'play',     'desc' => "Ko'rgazmali dars tahlillari",      'color' => 'bg-sky-100 text-sky-600'],
                ['label' => 'Resurslar',        'route' => 'resources.index',     'match' => 'resources.*',      'icon' => 'download', 'desc' => 'Yuklab olinadigan materiallar',    'color' => 'bg-orange-100 text-orange-600'],
            ],
        ],
    ],

    // Accent action shown as a highlighted pill on the right.
    'public_accent' => ['label' => 'AI yordamchi', 'route' => 'ai.index', 'match' => 'ai.*', 'icon' => 'sparkle'],

    // Collapsed under a "Ko'proq" overflow menu and shown in the footer.
    'public_more' => [
        ['label' => 'Blog',       'route' => 'blog.index', 'match' => 'blog.*', 'icon' => 'news'],
        ['label' => 'Savol-javob', 'route' => 'faq',        'match' => 'faq',    'icon' => 'help'],
        ['label' => 'Aloqa',      'route' => 'contact',    'match' => 'contact', 'icon' => 'mail'],
    ],

    // Admin sidebar groups.
    'admin' => [
        [
            'heading' => null,
            'items' => [
                ['label' => 'Boshqaruv paneli', 'route' => 'admin.dashboard', 'match' => 'admin.dashboard'],
            ],
        ],
        [
            'heading' => 'Kontent',
            'items' => [
                ['label' => 'Kontent', 'route' => 'admin.contents.index', 'match' => 'admin.contents.*'],
                ['label' => 'Kategoriyalar', 'route' => 'admin.categories.index', 'match' => 'admin.categories.*'],
            ],
        ],
        [
            'heading' => 'Media',
            'items' => [
                ['label' => 'Resurslar', 'route' => 'admin.resources.index', 'match' => 'admin.resources.*'],
                ['label' => 'Videolar', 'route' => 'admin.videos.index', 'match' => 'admin.videos.*'],
                ['label' => 'Pleylistlar', 'route' => 'admin.playlists.index', 'match' => 'admin.playlists.*'],
            ],
        ],
        [
            'heading' => 'Baholash',
            'items' => [
                ['label' => 'Testlar', 'route' => 'admin.tests.index', 'match' => 'admin.tests.*'],
            ],
        ],
        [
            'heading' => 'AI',
            'items' => [
                ['label' => 'AI generatsiyalar', 'route' => 'admin.ai.index', 'match' => 'admin.ai.*'],
            ],
        ],
        [
            'heading' => 'Tizim',
            'items' => [
                ['label' => 'Aloqa xabarlari', 'route' => 'admin.messages.index', 'match' => 'admin.messages.*'],
                ['label' => 'Foydalanuvchilar', 'route' => 'admin.users.index', 'match' => 'admin.users.*'],
                ['label' => 'Sozlamalar', 'route' => 'admin.settings.index', 'match' => 'admin.settings.*'],
            ],
        ],
    ],
];
