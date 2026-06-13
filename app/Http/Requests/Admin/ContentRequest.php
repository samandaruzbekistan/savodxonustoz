<?php

namespace App\Http\Requests\Admin;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class ContentRequest extends FormRequest
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
        $contentId = $this->route('content')?->id;

        return [
            'type' => ['required', new Enum(ContentType::class)],
            'category_id' => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'parent_id' => ['nullable', 'integer', Rule::exists('contents', 'id')],
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable', 'string', 'max:255', 'alpha_dash',
                Rule::unique('contents', 'slug')->ignore($contentId),
            ],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'body' => ['nullable', 'string'],
            'cover_image' => ['nullable', 'image', 'max:4096'],
            'status' => ['required', new Enum(ContentStatus::class)],
            'is_featured' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'tags' => ['nullable', 'string'],
            'meta' => ['nullable', 'array'],
            'meta.goal' => ['nullable', 'string'],
            'meta.examples' => ['nullable', 'string'],
            'meta.tasks' => ['nullable', 'string'],
            'meta.expected_result' => ['nullable', 'string'],
        ];
    }
}
