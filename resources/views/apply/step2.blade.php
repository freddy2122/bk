@extends('layouts.index')
@section('content')
<section class="bg-dark position-relative py-5" style="margin-top: 80px;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background:  #448c74"></div>
  <div class="container position-relative z-2 py-5" data-bs-theme="dark">
    <h1 class="display-5 mb-1 text-center" style="color: black;">@lang('TRD120')</h1>
    <p class="text-center mb-4" style="color: black; opacity: .8;">@lang('TRD121')</p>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
      @isset($summary)
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
          <h2 class="h5 mb-3">@lang('TRD008')</h2>
          <div class="row g-3">
            <div class="col-6 col-md-4"><div class="text-body-secondary">@lang('TRD001')</div><div class="fw-semibold">€{{ number_format($summary['amount'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-4"><div class="text-body-secondary">@lang('TRD002')</div><div class="fw-semibold">{{ $summary['months'] }} @lang('TRD003')</div></div>
            <div class="col-6 col-md-4"><div class="text-body-secondary">@lang('TRD004')</div><div class="fw-semibold">{{ $summary['annual_rate'] }}%</div></div>
            <div class="col-6 col-md-4"><div class="text-body-secondary">@lang('TRD009')</div><div class="fw-semibold">€{{ number_format($summary['monthly_payment'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-4"><div class="text-body-secondary">@lang('TRD019')</div><div class="fw-semibold">€{{ number_format($summary['total_interest'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-4"><div class="text-body-secondary">@lang('TRD020')</div><div class="fw-semibold">€{{ number_format($summary['total_payment'], 2, ',', ' ') }}</div></div>
          </div>
        </div>
      </div>
      @endisset
      <div class="card border-0 shadow-sm">
        <div class="card-body p-4 p-md-5">
          <form method="post" action="{{ route('apply.step2.post', ['locale' => app()->getLocale()]) }}">
            @csrf

            <div class="row g-3">
              <div class="col-md-3">
                <label for="civility" class="form-label">@lang('TRD122')</label>
                <select id="civility" name="civility" class="form-select" required>
                  <option value="" disabled {{ old('civility') ? '' : 'selected' }}>@lang('TRD123')</option>
                  <option value="Mme" {{ old('civility')=='Mme'?'selected':'' }}>@lang('TRD124')</option>
                  <option value="M." {{ old('civility')=='M.'?'selected':'' }}>@lang('TRD125')</option>
                </select>
                @error('civility')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-5">
                <label for="first_name" class="form-label">@lang('TRD126')</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
                @error('first_name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-4">
                <label for="last_name" class="form-label">@lang('TRD127')</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
                @error('last_name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label for="email" class="form-label">@lang('TRD128')</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">@lang('TRD129')</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
                @error('phone')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label for="employment_status" class="form-label">@lang('TRD130')</label>
                <select id="employment_status" name="employment_status" class="form-select" required>
                  <option value="" disabled {{ old('employment_status') ? '' : 'selected' }}>@lang('TRD123')</option>
                  <option value="salarie" {{ old('employment_status')=='salarie'?'selected':'' }}>@lang('TRD131')</option>
                  <option value="independant" {{ old('employment_status')=='independant'?'selected':'' }}>@lang('TRD132')</option>
                  <option value="etudiant" {{ old('employment_status')=='etudiant'?'selected':'' }}>@lang('TRD133')</option>
                  <option value="retraite" {{ old('employment_status')=='retraite'?'selected':'' }}>@lang('TRD134')</option>
                  <option value="demandeur" {{ old('employment_status')=='demandeur'?'selected':'' }}>@lang('TRD135')</option>
                </select>
                @error('employment_status')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label for="monthly_income" class="form-label">@lang('TRD136')</label>
                <input type="number" step="0.01" min="0" id="monthly_income" name="monthly_income" class="form-control" value="{{ old('monthly_income') }}" required>
                @error('monthly_income')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>

              <div class="col-12">
                <label for="address" class="form-label">@lang('TRD137')</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" placeholder="@lang('TRD142')">
                @error('address')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="accept_terms" name="accept_terms" value="1" {{ old('accept_terms') ? 'checked' : '' }} required>
                  <label class="form-check-label" for="accept_terms">
                    @lang('TRD138') <a href="{{ route('about.cookies', ['locale' => app()->getLocale()]) }}">@lang('TRD139')</a>.
                  </label>
                </div>
                @error('accept_terms')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
              <a class="btn btn-outline-secondary" href="{{ route('apply.step1', ['locale' => app()->getLocale()]) }}">@lang('TRD140')</a>
              <button type="submit" class="btn btn-primary">@lang('TRD141')</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
