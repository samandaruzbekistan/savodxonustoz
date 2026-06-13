<?php

namespace App\Enums;

enum AiGenerationType: string
{
    case PirlsTask = 'pirls_task';
    case Rubric = 'rubric';
    case MethodologyRecommendation = 'methodology_recommendation';

    public function label(): string
    {
        return match ($this) {
            self::PirlsTask => 'PIRLS Task',
            self::Rubric => 'Rubric',
            self::MethodologyRecommendation => 'Methodology Recommendation',
        };
    }
}
