<?php

namespace App\Http\Requests\Admin;

use App\Enums\ContentStatus;
use App\Support\YouTube;
use Closure;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class VideoRequest extends FormRequest
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
        $videoId = $this->route('video')?->id;

        return [
            'category_id' => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable', 'string', 'max:255', 'alpha_dash',
                Rule::unique('videos', 'slug')->ignore($videoId),
            ],
            'youtube_url' => [
                'required', 'string', 'max:255',
                function (string $attribute, mixed $value, Closure $fail): void {
                    if (! YouTube::id((string) $value)) {
                        $fail('YouTube havolasi noto\'g\'ri.');
                    }
                },
            ],
            'description' => ['nullable', 'string'],
            'duration' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', new Enum(ContentStatus::class)],
            'published_at' => ['nullable', 'date'],
            'tags' => ['nullable', 'string'],
        ];
    }
}
