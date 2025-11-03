@extends('layouts.auth')

@section('content')
<div class="d-lg-flex position-relative h-100">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="{{ route('home') }}" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home" aria-label="Back to home">
          <i class="ai-home"></i>
        </a>

        <!-- Sign in form -->
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
          <div class="w-100 mt-auto" style="max-width: 526px;">
            <h1>Sign in to Around</h1>
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
              @csrf
              @if ($errors->any())
                <div class="alert alert-danger d-flex mb-4">
                  <i class="ai-octagon-alert fs-xl me-2"></i>
                  <div>
                    @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                    @endforeach
                  </div>
                </div>
              @endif
              <div class="pb-3 mb-3">
                <div class="position-relative">
                  <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input class="form-control form-control-lg ps-5" type="email" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                  @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="mb-4">
                <div class="position-relative">
                  <i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <div class="password-toggle">
                    <input class="form-control form-control-lg ps-5" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                  @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                <div class="form-check my-2">
                  <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">Remember me</label>
                </div>
              </div>
              <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">Sign in</button>

              
            </form>
          </div>

          <!-- Copyright -->
          <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;"><span class="text-body-secondary">&copy; All rights reserved. Made by</span><a class="nav-link d-inline-block p-0 ms-1" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
        </div>
  
          
          <!-- Cover image -->
        @php $cover = asset('assets/img/account/cover.jpg'); @endphp
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url('{{ $cover }}');"></div>
      </div>
@endsection
