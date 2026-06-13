<?php

use App\Models\Setting;
use App\Support\Settings;

it('returns the config default when a setting is missing', function () {
    expect(app(Settings::class)->get('site_name'))->toBe('Savodxon Ustoz');
});

it('returns a stored value over the default', function () {
    Setting::create(['key' => 'site_name', 'value' => 'Boshqa Nom', 'group' => 'general', 'type' => 'string']);

    expect(app(Settings::class)->get('site_name'))->toBe('Boshqa Nom');
});

it('falls back to the provided default for unknown keys', function () {
    expect(app(Settings::class)->get('missing_key', 'zaxira'))->toBe('zaxira');
});

it('casts values by their declared type', function () {
    Setting::create(['key' => 'flag', 'value' => '1', 'group' => 'general', 'type' => 'bool']);
    Setting::create(['key' => 'count', 'value' => '42', 'group' => 'general', 'type' => 'int']);

    $settings = app(Settings::class);

    expect($settings->get('flag'))->toBeTrue()
        ->and($settings->get('count'))->toBe(42);
});
