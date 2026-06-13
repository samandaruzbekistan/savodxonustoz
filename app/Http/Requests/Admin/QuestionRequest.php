<?php

namespace App\Http\Requests\Admin;

use App\Enums\QuestionType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuestionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', Rule::enum(QuestionType::class)],
            'prompt' => ['required', 'string', 'max:2000'],
            'explanation' => ['nullable', 'string', 'max:2000'],
            'points' => ['required', 'integer', 'min:1', 'max:100'],
            'options' => ['nullable', 'array'],
            'options.*.label' => ['nullable', 'string', 'max:500'],
            'options.*.match_left' => ['nullable', 'string', 'max:255'],
            'options.*.match_right' => ['nullable', 'string', 'max:255'],
            'options.*.correct_position' => ['nullable', 'integer', 'min:1'],
            'correct_index' => ['nullable'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'prompt' => 'savol matni',
            'points' => 'ball',
        ];
    }
}
