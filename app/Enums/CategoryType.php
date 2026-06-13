<?php

namespace App\Enums;

/**
 * Scopes the universal nested `categories` tree per domain so a single
 * implementation serves content, resources and videos.
 */
enum CategoryType: string
{
    case Content = 'content';
    case Resource = 'resource';
    case Video = 'video';
    case Test = 'test';

    public function label(): string
    {
        return match ($this) {
            self::Content => 'Content',
            self::Resource => 'Resource',
            self::Video => 'Video',
            self::Test => 'Test',
        };
    }
}
