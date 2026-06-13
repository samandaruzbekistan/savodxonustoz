<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        foreach (config('settings.groups') as $groupKey => $group) {
            foreach ($group['fields'] as $key => $field) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    [
                        'group' => $groupKey,
                        'type' => $field['type'] ?? 'string',
                        'value' => $field['default'] ?? '',
                    ],
                );
            }
        }
    }
}
