@extends($layout . '.layouts.base_guest')

@section('title', __('Login'))

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#">
      <b>{{ config('app.name', 'Laravel 7 Auth') }}</b>
    </a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{ __('Login') }}</p>

      <form method="post" action="{{ route('login') }}">
        @csrf

        <div class="input-group mb-3">
          <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email"
            autofocus />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input id="password" type="password" name="password"
            class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required
            autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
              <label for="remember">{{ __('Remember Me') }}</label>
            </div>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">
              {{ __('Login') }}
            </button>
          </div>
        </div>
      </form>

      <div class="social-auth-links text-center mb-3 mt-4">
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn btn-block btn-primary">
          <i class="fa-solid fa-address-card mr-2"></i>
          Register a new membership
        </a>
        @endif

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="btn btn-block btn-danger">
          <i class="fa-solid fa-key mr-2"></i>
          {{ __('Forgot Your Password?') }}
        </a>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
