<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingsRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    /**
     * Display the settings form.
     */
    public function index()
    {
        $settings = \settings_map();
        $locales = config('app.supported_locales', []);
        if (empty($locales)) {
            $dir = resource_path('lang');
            $locales = is_dir($dir) ? array_values(array_map('basename', File::directories($dir))) : [];
        }
        return view('admin.settings.index', compact('settings', 'locales'));
    }

    /**
     * Update settings in storage.
     */
    public function update(UpdateSettingsRequest $request)
    {
        $data = $request->validated();

        foreach ($this->allowedKeys() as $key) {
            if (array_key_exists($key, $data)) {
                Setting::updateOrCreate(['key' => $key], ['value' => $data[$key]]);
            }
        }

        if ($request->hasFile('SITE_LOGO')) {
            $path = $request->file('SITE_LOGO')->store('logos', 'public');
            Setting::updateOrCreate(['key' => 'SITE_LOGO'], ['value' => 'storage/'.$path]);
        }

        \settings_clear_cache();

        return redirect()->route('admin.settings.index')->with('status', 'Paramètres enregistrés.');
    }

    /**
     * Keys that are allowed to be managed via UI.
     */
    protected function allowedKeys(): array
    {
        return [
            'DEFAULT_SITE_LANGUAGE',
            'ALLOW_WEBPAGE_LOADER',
            'SITE_NAME',
            'WEBSITE_CREATED_DATE',
            'SITE_ADDRESS',
            'SITE_EMAIL',
            'SITE_PHONE',
            'SITE_WHATSAPP',
            'SITE_PHONE_2',
            'WEBMASTER_NAME',
            'AUTHOR_NAME',
            'TEAG',
            'INTEREST_RATE',
        ];
    }
}
