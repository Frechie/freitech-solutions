@extends('layouts.app')

@section('content')
<section class="auth text-center">
    <div class="form-signin">
        <div class="">
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="Feitech Solution Logo" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal text-white">{{ __('Register') }}</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-floating">
                    <input id="name" type="text" placeholder="Enter your Username" class=" form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name" class="">{{ __('Name') }}:</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-floating">
                    <input id="email" type="email" placeholder="Enter your E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email" class="">{{ __('E-Mail Address') }}:</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-floating">
                    <input id="password" type="password" placeholder="Enter your preffered Password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-floating">
                    <input id="password-confirm" type="password" placeholder="Confirm your Password" class=" form-control" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <button type="submit" class="w-100 btn btn-lg btn-primary"> {{ __('Register') }} </button>

                    <div>
                        <a class="btn btn-link" href="{{ route('login') }}">{{ __('Registered? Click here!!!') }} </a>
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection