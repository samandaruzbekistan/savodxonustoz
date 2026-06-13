<?php

namespace App\Enums;

enum QuestionType: string
{
    case MultipleChoice = 'mcq';
    case MultipleAnswers = 'multiple';
    case TrueFalse = 'true_false';
    case Matching = 'matching';
    case Ordering = 'ordering';
    case Open = 'open';

    public function label(): string
    {
        return match ($this) {
            self::MultipleChoice => 'Multiple Choice',
            self::MultipleAnswers => 'Multiple Answers',
            self::TrueFalse => 'True / False',
            self::Matching => 'Matching',
            self::Ordering => 'Ordering',
            self::Open => 'Open Question',
        };
    }

    /**
     * Whether answers for this type can be graded automatically.
     */
    public function isAutoGradable(): bool
    {
        return $this !== self::Open;
    }
}
