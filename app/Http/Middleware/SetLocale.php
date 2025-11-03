<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $supported = (array) config('app.supported_locales', ['fr', 'en','ar','es','de','it','pt','ru','vi','zh','he','ja','ko','th','tr','uk','zh-Hans','zh-Hant','zh-CN','zh-TW']);
        $configured = (string) config('app.locale', 'fr');
        $preferred = (string) (function_exists('setting') ? setting('DEFAULT_SITE_LANGUAGE', $configured) : $configured);
        $default = in_array($preferred, $supported, true)
            ? $preferred
            : (in_array($configured, $supported, true) ? $configured : 'fr');

        $route = $request->route();
        $locale = null;

        if ($route) {
            $locale = $route->parameter('locale');
        }

        if (!$locale) {
            $seg = $request->segment(1);
            if ($seg && in_array($seg, $supported, true)) {
                $locale = $seg;
            }
        }

        if (!$locale) {
            $locale = (string) session('app_locale', $default);
        }

        if (!in_array($locale, $supported, true)) {
            $locale = $default;
        }

        App::setLocale($locale);
        URL::defaults(['locale' => $locale]);
        session(['app_locale' => $locale]);

        return $next($request);
    }
}
