<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingsRequest;
use App\Models\Setting;
use App\Support\Settings;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function __construct(private readonly Settings $settings) {}

    public function index(): View
    {
        return view('admin.settings.index', [
            'groups' => config('settings.groups'),
            'values' => $this->settings->all(),
        ]);
    }

    public function update(SettingsRequest $request): RedirectResponse
    {
        foreach (config('settings.groups') as $groupKey => $group) {
            foreach ($group['fields'] as $key => $field) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    [
                        'group' => $groupKey,
                        'type' => $field['type'] ?? 'string',
                        'value' => $request->input($key),
                    ],
                );
            }
        }

        $this->settings->flush();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Sozlamalar saqlandi.');
    }
}
