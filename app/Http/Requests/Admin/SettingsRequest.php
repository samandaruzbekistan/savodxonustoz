<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Build validation rules from the settings schema.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $rules = [];

        foreach (config('settings.groups') as $group) {
            foreach ($group['fields'] as $key => $field) {
                $rules[$key] = $field['rules'] ?? ['nullable', 'string'];
            }
        }

        return $rules;
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        $attributes = [];

        foreach (config('settings.groups') as $group) {
            foreach ($group['fields'] as $key => $field) {
                $attributes[$key] = mb_strtolower($field['label']);
            }
        }

        return $attributes;
    }
}
