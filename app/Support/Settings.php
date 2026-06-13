<?php

namespace App\Support;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

/**
 * Read-through accessor for persisted site settings.
 *
 * Values are loaded once and cached forever; the cache is busted on
 * every write so the admin form changes take effect immediately.
 */
class Settings
{
    private const CACHE_KEY = 'settings.map';

    /**
     * @var array<string, mixed>|null
     */
    private ?array $map = null;

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->all()[$key] ?? $this->configDefault($key, $default);
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->all());
    }

    /**
     * @return array<string, mixed>
     */
    public function all(): array
    {
        return $this->map ??= Cache::rememberForever(self::CACHE_KEY, function () {
            return Setting::all()
                ->mapWithKeys(fn (Setting $s) => [$s->key => $s->casted_value])
                ->all();
        });
    }

    /**
     * Persist a single setting and refresh the cache.
     */
    public function set(string $key, mixed $value, string $group = 'general', string $type = 'string'): void
    {
        Setting::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'group' => $group, 'type' => $type],
        );

        $this->flush();
    }

    public function flush(): void
    {
        $this->map = null;
        Cache::forget(self::CACHE_KEY);
    }

    private function configDefault(string $key, mixed $fallback): mixed
    {
        foreach (config('settings.groups') as $group) {
            if (isset($group['fields'][$key])) {
                return $group['fields'][$key]['default'] ?? $fallback;
            }
        }

        return $fallback;
    }
}
