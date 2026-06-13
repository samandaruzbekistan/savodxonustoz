<?php

namespace App\Enums;

enum MediaCollection: string
{
    case Image = 'image';
    case Attachment = 'attachment';

    public function label(): string
    {
        return match ($this) {
            self::Image => 'Image',
            self::Attachment => 'Attachment',
        };
    }
}
