@extends('layouts.index')
@section('content')
<section class="bg-dark position-relative py-5" style="margin-top: 80px;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background:  #448c74"></div>
  <div class="container position-relative z-2 py-5" data-bs-theme="dark">
    <h1 class="display-5 mb-1 text-center" style="color: black;">@lang('TRD014')</h1>
    <p class="text-center mb-4" style="color: black; opacity: .8;">@lang('TRD015')</p>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-4 p-md-5 text-center">
          <div class="display-3 text-success mb-3">✔</div>
          <p class="fs-lg">@lang('TRD018')</p>
          <div class="d-flex gap-3 justify-content-center mt-4">
            <a class="btn btn-primary" href="{{ route('index', ['locale' => app()->getLocale()]) }}">@lang('TRD016')</a>
            <a class="btn btn-outline-secondary" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">@lang('TRD038')</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@isset($summary)
<section class="container pb-2">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
          <h2 class="h5 mb-3">@lang('TRD008')</h2>
          <div class="row g-3">
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD001')</div><div class="fw-semibold">€{{ number_format($summary['amount'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD002')</div><div class="fw-semibold">{{ $summary['months'] }} @lang('TRD003')</div></div>
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD004')</div><div class="fw-semibold">{{ $summary['annual_rate'] }}%</div></div>
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD009')</div><div class="fw-semibold">€{{ number_format($summary['monthly_payment'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD019')</div><div class="fw-semibold">€{{ number_format($summary['total_interest'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD020')</div><div class="fw-semibold">€{{ number_format($summary['total_payment'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD400')</div><div class="fw-semibold">€{{ number_format($summary['processing_fee'], 2, ',', ' ') }}</div></div>
            <div class="col-6 col-md-3"><div class="text-body-secondary">@lang('TRD401')</div><div class="fw-semibold">€{{ number_format($summary['total_cost'], 2, ',', ' ') }}</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endisset

@isset($schedule)
<section class="container pb-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
              <thead class="table-light">
                <tr>
                  <th>@lang('TRD013')</th>
                  <th class="text-end">@lang('TRD009') (€)</th>
                  <th class="text-end">@lang('TRD010') (€)</th>
                  <th class="text-end">@lang('TRD011') (€)</th>
                  <th class="text-end">@lang('TRD012') (€)</th>
                </tr>
              </thead>
              <tbody>
              @foreach($schedule as $row)
                <tr>
                  <td>{{ $row['month'] }}</td>
                  <td class="text-end">{{ number_format($row['payment'], 2, ',', ' ') }}</td>
                  <td class="text-end">{{ number_format($row['interest'], 2, ',', ' ') }}</td>
                  <td class="text-end">{{ number_format($row['principal'], 2, ',', ' ') }}</td>
                  <td class="text-end">{{ number_format($row['balance'], 2, ',', ' ') }}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endisset
@endsection
