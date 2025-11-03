<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $locale = null;
        if (function_exists('setting')) {
            $locale = setting('DEFAULT_SITE_LANGUAGE', defined('DEFAULT_SITE_LANGUAGE') ? DEFAULT_SITE_LANGUAGE : app()->getLocale());
        } elseif (defined('DEFAULT_SITE_LANGUAGE')) {
            $locale = DEFAULT_SITE_LANGUAGE;
        } else {
            $locale = app()->getLocale();
        }
        if (!empty($locale)) {
            app()->setLocale($locale);
        }
    }
}
