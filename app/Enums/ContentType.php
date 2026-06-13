<?php

namespace App\Enums;

/**
 * Universal content discriminator. Every text-based knowledge unit
 * (theory, methodology, blog, news, faq, etc.) is a row in `contents`
 * distinguished by this type rather than a dedicated table.
 */
enum ContentType: string
{
    case Page = 'page';
    case Theory = 'theory';
    case Methodology = 'methodology';
    case Exercise = 'exercise';
    case Example = 'example';
    case Recommendation = 'recommendation';
    case Rubric = 'rubric';
    case Assessment = 'assessment';
    case Blog = 'blog';
    case News = 'news';
    case Faq = 'faq';

    public function label(): string
    {
        return match ($this) {
            self::Page => 'Static Page',
            self::Theory => 'Theory',
            self::Methodology => 'Methodology',
            self::Exercise => 'Exercise',
            self::Example => 'Example',
            self::Recommendation => 'Recommendation',
            self::Rubric => 'Rubric',
            self::Assessment => 'Assessment Method',
            self::Blog => 'Blog Article',
            self::News => 'News',
            self::Faq => 'FAQ',
        };
    }

    /**
     * Name of the x-icon glyph used to represent this content type.
     */
    public function icon(): string
    {
        return match ($this) {
            self::Page => 'doc',
            self::Theory => 'book',
            self::Methodology => 'cap',
            self::Exercise => 'clipboard',
            self::Example => 'bulb',
            self::Recommendation => 'sparkle',
            self::Rubric => 'chart',
            self::Assessment => 'clipboard',
            self::Blog => 'news',
            self::News => 'news',
            self::Faq => 'help',
        };
    }
}
