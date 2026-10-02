@extends('layouts.app')

@section('content')
<div class="col-lg-9 pt-4 pb-2 pb-sm-4">

  @if (session('status'))
    <div class="alert alert-success d-flex mb-4">
      <i class="ai-check-circle fs-xl me-2"></i>
      <p class="mb-0">{{ session('status') }}</p>
    </div>
  @endif

  <h1 class="h2 mb-4">Website-Einstellungen</h1>

  <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="card border-0 p-3 p-sm-4">
    @csrf

    <div class="row g-4">
      <div class="col-12 col-md-6">
        <label class="form-label" for="SITE_NAME">Name der Website</label>
        <input class="form-control" id="SITE_NAME" name="SITE_NAME" type="text" required value="{{ old('SITE_NAME', setting('SITE_NAME', '')) }}">
        @error('SITE_NAME')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="DEFAULT_SITE_LANGUAGE">Standardsprache</label>
        <select class="form-select" id="DEFAULT_SITE_LANGUAGE" name="DEFAULT_SITE_LANGUAGE">
          @foreach(($locales ?? []) as $loc)
            <option value="{{ $loc }}" {{ old('DEFAULT_SITE_LANGUAGE', setting('DEFAULT_SITE_LANGUAGE', config('app.locale'))) === $loc ? 'selected' : '' }}>{{ $loc }}</option>
          @endforeach
        </select>
        @error('DEFAULT_SITE_LANGUAGE')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="SITE_LOGO">Logo der Website</label>
        <input class="form-control" id="SITE_LOGO" name="SITE_LOGO" type="file" accept="image/*">
        @error('SITE_LOGO')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        @php($currentLogo = setting('SITE_LOGO'))
        @if(!empty($currentLogo))
          <div class="mt-2">
            <img src="{{ asset($currentLogo) }}" alt="Aktuelles Logo" style="max-height:60px">
          </div>
        @endif
      </div>

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="ALLOW_WEBPAGE_LOADER" name="ALLOW_WEBPAGE_LOADER" value="1" {{ old('ALLOW_WEBPAGE_LOADER', setting_bool('ALLOW_WEBPAGE_LOADER', false)) ? 'checked' : '' }} />
          <label class="form-check-label" for="ALLOW_WEBPAGE_LOADER">Seitenlader aktivieren</label>
        </div>
        @error('ALLOW_WEBPAGE_LOADER')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="WEBSITE_CREATED_DATE">Gründungsjahr</label>
        <input class="form-control" id="WEBSITE_CREATED_DATE" name="WEBSITE_CREATED_DATE" type="text" value="{{ old('WEBSITE_CREATED_DATE', setting('WEBSITE_CREATED_DATE', '')) }}">
        @error('WEBSITE_CREATED_DATE')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="SITE_ADDRESS">Adresse</label>
        <input class="form-control" id="SITE_ADDRESS" name="SITE_ADDRESS" type="text" value="{{ old('SITE_ADDRESS', setting('SITE_ADDRESS', '')) }}">
        @error('SITE_ADDRESS')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="SITE_EMAIL">E-mail</label>
        <input class="form-control" id="SITE_EMAIL" name="SITE_EMAIL" type="email" value="{{ old('SITE_EMAIL', setting('SITE_EMAIL', '')) }}">
        @error('SITE_EMAIL')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="SITE_PHONE">Haupttelefon</label>
        <input class="form-control" id="SITE_PHONE" name="SITE_PHONE" type="text" value="{{ old('SITE_PHONE', setting('SITE_PHONE', '')) }}">
        @error('SITE_PHONE')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="SITE_WHATSAPP">WhatsApp</label>
        <input class="form-control" id="SITE_WHATSAPP" name="SITE_WHATSAPP" type="text" value="{{ old('SITE_WHATSAPP', setting('SITE_WHATSAPP', '')) }}">
        @error('SITE_WHATSAPP')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="SITE_PHONE_2">Zweittelefon</label>
        <input class="form-control" id="SITE_PHONE_2" name="SITE_PHONE_2" type="text" value="{{ old('SITE_PHONE_2', setting('SITE_PHONE_2', '')) }}">
        @error('SITE_PHONE_2')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="WEBMASTER_NAME">Webmaster</label>
        <input class="form-control" id="WEBMASTER_NAME" name="WEBMASTER_NAME" type="text" value="{{ old('WEBMASTER_NAME', setting('WEBMASTER_NAME', '')) }}">
        @error('WEBMASTER_NAME')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="AUTHOR_NAME">Autor</label>
        <input class="form-control" id="AUTHOR_NAME" name="AUTHOR_NAME" type="text" value="{{ old('AUTHOR_NAME', setting('AUTHOR_NAME', '')) }}">
        @error('AUTHOR_NAME')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label" for="TEAG">TEAG</label>
        <input class="form-control" id="TEAG" name="TEAG" type="text" value="{{ old('TEAG', setting('TEAG', '')) }}">
        @error('TEAG')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12 d-flex justify-content-end">
        <button class="btn btn-primary" type="submit">
          <i class="ai-save me-2"></i>Speichern
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
