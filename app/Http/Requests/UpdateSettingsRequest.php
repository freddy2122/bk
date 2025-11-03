<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Routes are protected by auth+admin middleware
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'ALLOW_WEBPAGE_LOADER' => $this->boolean('ALLOW_WEBPAGE_LOADER'),
        ]);
    }

    public function rules(): array
    {
        $locales = implode(',', config('app.supported_locales', ['fr','en']));
        return [
            'DEFAULT_SITE_LANGUAGE' => ['nullable', 'string', 'max:10', "in:$locales"],
            'ALLOW_WEBPAGE_LOADER' => ['nullable', 'boolean'],
            'SITE_NAME' => ['required', 'string', 'max:255'],
            'WEBSITE_CREATED_DATE' => ['nullable', 'string', 'max:10'],
            'SITE_ADDRESS' => ['nullable', 'string', 'max:255'],
            'SITE_EMAIL' => ['nullable', 'email', 'max:255'],
            'SITE_PHONE' => ['nullable', 'string', 'max:50'],
            'SITE_WHATSAPP' => ['nullable', 'string', 'max:50'],
            'SITE_PHONE_2' => ['nullable', 'string', 'max:50'],
            'WEBMASTER_NAME' => ['nullable', 'string', 'max:255'],
            'AUTHOR_NAME' => ['nullable', 'string', 'max:255'],
            'TEAG' => ['nullable', 'string', 'max:20'],
            'INTEREST_RATE' => ['nullable', 'numeric', 'min:0', 'max:1'],
            'SITE_LOGO' => ['nullable', 'mimes:jpg,jpeg,png,webp,svg', 'max:2048'],
        ];
    }
}
