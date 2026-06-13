<?php

namespace App\Http\Requests\Admin;

use App\Enums\ContentStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class PlaylistRequest extends FormRequest
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
        $playlistId = $this->route('playlist')?->id;

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable', 'string', 'max:255', 'alpha_dash',
                Rule::unique('playlists', 'slug')->ignore($playlistId),
            ],
            'description' => ['nullable', 'string'],
            'status' => ['required', new Enum(ContentStatus::class)],
            'videos' => ['nullable', 'array'],
            'videos.*' => ['integer', Rule::exists('videos', 'id')],
            'order' => ['nullable', 'array'],
        ];
    }
}
