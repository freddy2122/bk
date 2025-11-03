<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

if (!function_exists('settings_cache_key')) {
    function settings_cache_key(): string
    {
        return 'settings.map';
    }
}

if (!function_exists('settings_clear_cache')) {
    function settings_clear_cache(): void
    {
        Cache::forget(settings_cache_key());
    }
}

if (!function_exists('settings_map')) {
    function settings_map(): array
    {
        return Cache::rememberForever(settings_cache_key(), function () {
            if (!class_exists(Setting::class)) {
                return [];
            }
            try {
                if (!Schema::hasTable('settings')) {
                    return [];
                }
                return Setting::query()->pluck('value', 'key')->toArray();
            } catch (\Throwable $e) {
                return [];
            }
        });
    }
}

if (!function_exists('setting')) {
    /**
     * Get a setting by key with fallback to constant or default.
     */
    function setting(string $key, $default = null)
    {
        $map = settings_map();
        if (array_key_exists($key, $map)) {
            return $map[$key];
        }
        if (defined($key)) {
            return constant($key);
        }
        return $default;
    }
}

if (!function_exists('setting_bool')) {
    /**
     * Get a boolean setting value.
     */
    function setting_bool(string $key, bool $default = false): bool
    {
        $value = setting($key, $default);
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }
}
