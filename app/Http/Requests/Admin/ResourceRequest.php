<?php

namespace App\Http\Requests\Admin;

use App\Enums\ContentStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class ResourceRequest extends FormRequest
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
        $resourceId = $this->route('resource')?->id;

        return [
            'category_id' => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable', 'string', 'max:255', 'alpha_dash',
                Rule::unique('resources', 'slug')->ignore($resourceId),
            ],
            'description' => ['nullable', 'string'],
            'file' => [
                $resourceId ? 'nullable' : 'required',
                'file', 'max:20480', 'mimes:pdf,docx,pptx,xlsx,zip',
            ],
            'status' => ['required', new Enum(ContentStatus::class)],
            'published_at' => ['nullable', 'date'],
            'tags' => ['nullable', 'string'],
        ];
    }
}
