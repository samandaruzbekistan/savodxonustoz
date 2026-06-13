<?php

/**
 * Editable site settings schema.
 *
 * Drives the admin settings form, validation, seeding and defaults in
 * one place. Each field declares its group, input type, label, default
 * value and validation rules. Stored as rows in the `settings` table.
 */
return [

    'groups' => [

        'general' => [
            'label' => 'Umumiy',
            'fields' => [
                'site_name' => [
                    'label' => 'Sayt nomi',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => 'Savodxon Ustoz',
                    'rules' => ['required', 'string', 'max:120'],
                ],
                'site_tagline' => [
                    'label' => 'Shior (tagline)',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => "O'qish savodxonligi metodik platformasi",
                    'rules' => ['nullable', 'string', 'max:200'],
                ],
                'contact_email' => [
                    'label' => 'Aloqa e-pochtasi',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => 'info@savodxonustoz.uz',
                    'rules' => ['nullable', 'email', 'max:160'],
                ],
                'contact_phone' => [
                    'label' => 'Telefon raqami',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => '',
                    'rules' => ['nullable', 'string', 'max:40'],
                ],
            ],
        ],

        'social' => [
            'label' => 'Ijtimoiy tarmoqlar',
            'fields' => [
                'social_telegram' => [
                    'label' => 'Telegram havolasi',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => '',
                    'rules' => ['nullable', 'url', 'max:200'],
                ],
                'social_instagram' => [
                    'label' => 'Instagram havolasi',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => '',
                    'rules' => ['nullable', 'url', 'max:200'],
                ],
                'social_facebook' => [
                    'label' => 'Facebook havolasi',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => '',
                    'rules' => ['nullable', 'url', 'max:200'],
                ],
                'social_youtube' => [
                    'label' => 'YouTube havolasi',
                    'input' => 'text',
                    'type' => 'string',
                    'default' => '',
                    'rules' => ['nullable', 'url', 'max:200'],
                ],
            ],
        ],

        'footer' => [
            'label' => 'Pastki qism (footer)',
            'fields' => [
                'footer_text' => [
                    'label' => 'Footer matni',
                    'input' => 'textarea',
                    'type' => 'string',
                    'default' => "Bo'lajak boshlang'ich sinf o'qituvchilari uchun o'qish savodxonligini rivojlantirish metodik platformasi.",
                    'rules' => ['nullable', 'string', 'max:500'],
                ],
            ],
        ],

    ],
];
