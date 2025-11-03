@extends('layouts.index')
@section('content')
<section class="bg-dark position-relative py-5" style="margin-top: 80px;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background:  #448c74"></div>
  <div class="container position-relative z-2 py-5" data-bs-theme="dark">
    <h1 class="display-5 mb-1 text-center" >@lang('TRD100')</h1>
    <p class="text-center mb-4" style="color: white; opacity: .8;">@lang('TRD101')</p>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-4 p-md-5">
          <form method="post" action="{{ route('apply.step1.post', ['locale' => app()->getLocale()]) }}">
            @csrf

            <div class="row g-3">
              <div class="col-md-6">
                <label for="loan_type" class="form-label">@lang('TRD102')</label>
                <select id="loan_type" name="loan_type" class="form-select" required>
                  <option value="" disabled {{ old('loan_type') ? '' : 'selected' }}>@lang('TRD103')</option>
                  <option value="conso" {{ old('loan_type')=='conso'?'selected':'' }}>@lang('TRD104')</option>
                  <option value="travaux" {{ old('loan_type')=='travaux'?'selected':'' }}>@lang('TRD105')</option>
                  <option value="immobilier" {{ old('loan_type')=='immobilier'?'selected':'' }}>@lang('TRD106')</option>
                  <option value="rachat" {{ old('loan_type')=='rachat'?'selected':'' }}>@lang('TRD107')</option>
                  <option value="credit-bail" {{ old('loan_type')=='credit-bail'?'selected':'' }}>@lang('TRD108')</option>
                  <option value="etudiant" {{ old('loan_type')=='etudiant'?'selected':'' }}>@lang('TRD109')</option>
                </select>
                @error('loan_type')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label for="amount" class="form-label">@lang('TRD110')</label>
                <input type="number" step="0.01" min="500" class="form-control" id="amount" name="amount" value="{{ old('amount') }}" required>
                @error('amount')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label for="duration" class="form-label">@lang('TRD111')</label>
                <input type="number" min="6" max="120" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" required>
                @error('duration')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label for="purpose" class="form-label">@lang('TRD112')</label>
                <input type="text" maxlength="255" class="form-control" id="purpose" name="purpose" value="{{ old('purpose') }}" placeholder="@lang('TRD113')">
                @error('purpose')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
              </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
              <a class="btn btn-outline-secondary" href="{{ url()->previous() }}">@lang('TRD114')</a>
              <button type="submit" class="btn btn-primary">@lang('TRD115')</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
