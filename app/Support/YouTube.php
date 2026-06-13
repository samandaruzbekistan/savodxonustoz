<?php

namespace App\Support;

class YouTube
{
    /**
     * Extract the 11-character YouTube video id from a URL or bare id.
     * Supports watch?v=, youtu.be/, /embed/, /shorts/, /v/ and raw ids.
     */
    public static function id(string $url): ?string
    {
        $url = trim($url);

        $patterns = [
            '~youtu\.be/([A-Za-z0-9_-]{11})~',
            '~youtube\.com/(?:watch\?(?:.*&)?v=|embed/|shorts/|v/)([A-Za-z0-9_-]{11})~',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];
            }
        }

        if (preg_match('~^[A-Za-z0-9_-]{11}$~', $url)) {
            return $url;
        }

        return null;
    }

    /**
     * Build the standard thumbnail URL for a video id.
     */
    public static function thumbnail(string $id): string
    {
        return "https://img.youtube.com/vi/{$id}/hqdefault.jpg";
    }
}
