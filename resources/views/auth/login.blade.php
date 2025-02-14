@extends('layouts.auth')

@section('form')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <div class="form-label-group">
            <label class="form-label" for="default-01">Email or Username</label>

        </div>

        <input type="text" class="form-control form-control-lg" id="default-01" name="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><!-- .foem-group -->
    <div class="form-group">
        <div class="form-label-group">
            <label class="form-label" for="password">Passcode</label>

        </div>
        <div class="form-control-wrap">
            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
            </a>
            <input type="password" class="form-control form-control-lg" id="password" name="password">
        </div>
    </div><!-- .foem-group -->
    <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </div>
</form><!-- form -->
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection