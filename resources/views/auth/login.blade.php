@extends('layouts.app')

@section('content')
<section class="auth text-center">
    <div class="form-signin">
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="Feitech Solution Logo" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal text-white">Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-floating">                
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
                <label for="email" class="text-dark">E-mail Address:</label>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-floating">                
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <label for="password" class="text-dark"> Password: </label>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror <div class="checkbox mb-3">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label text-white" for="remember">
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