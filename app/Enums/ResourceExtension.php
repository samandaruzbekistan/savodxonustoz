<?php

namespace App\Enums;

enum ResourceExtension: string
{
    case Pdf = 'pdf';
    case Docx = 'docx';
    case Pptx = 'pptx';
    case Xlsx = 'xlsx';
    case Zip = 'zip';

    public function label(): string
    {
        return match ($this) {
            self::Pdf => 'PDF Document',
            self::Docx => 'Word Document',
            self::Pptx => 'PowerPoint Presentation',
            self::Xlsx => 'Excel Spreadsheet',
            self::Zip => 'ZIP Archive',
        };
    }
}
