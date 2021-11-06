@extends('layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="https://avatars.githubusercontent.com/u/93493489?s=200&v=4" alt="sing up image"></figure>
                    <br>
                    <a class="signup-image-link" href="{{ route('register') }}">Create an account</a>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username or Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input id="password" type="password" @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input class="agree-term" type="checkbox" name="remember-me" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                            <label class="label-agree-term" for="remember-me"><span><span></span></span>
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="https://facebook.com/"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="{{ url('auth/google') }}"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
@endsection
