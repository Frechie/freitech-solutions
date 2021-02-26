@extends('layouts.app')

@section('content')
<section  class="auth text-center">
    <div class="form-signin">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="Feitech Solution Logo" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <label for="email" class="">E-mail Address:</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password" class=""> Password: </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror <div class="checkbox mb-3">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <button type="submit" class="w-100 btn btn-lg btn-primary">{{ __('Login') }}</button>
            <div>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }} </a>
                @endif
            </div>

        </form>
    </div>

</section>
@endsection