<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Teacher = 'teacher';
    case Student = 'student';
    case Researcher = 'researcher';

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Administrator',
            self::Teacher => 'Teacher',
            self::Student => 'Student',
            self::Researcher => 'Researcher',
        };
    }
}
