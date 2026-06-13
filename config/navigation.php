<?php

/**
 * Central navigation map consumed by both the public top bar
 * (partials/public-nav) and the admin sidebar (partials/admin-sidebar).
 *
 * Each item is rendered only when its route exists (Route::has),
 * so future modules appear automatically as their routes land.
 */
return [

    // Static module links in the public top bar (after the dynamic
    // content-category links such as Nazariya / Metodika).
    'public_modules' => [
        ['label' => 'Resurslar', 'route' => 'resources.index', 'match' => 'resources.*'],
        ['label' => 'Videolar', 'route' => 'videos.index', 'match' => 'videos.*'],
        ['label' => 'Testlar', 'route' => 'tests.index', 'match' => 'tests.*'],
        ['label' => 'AI yordamchi', 'route' => 'ai.index', 'match' => 'ai.*', 'accent' => true],
        ['label' => 'Blog', 'route' => 'blog.index', 'match' => 'blog.*'],
    ],

    // Collapsed under a "Ko'proq" overflow menu.
    'public_more' => [
        ['label' => 'Savol-javob', 'route' => 'faq', 'match' => 'faq'],
        ['label' => 'Aloqa', 'route' => 'contact', 'match' => 'contact'],
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
