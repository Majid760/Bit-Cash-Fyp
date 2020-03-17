@extends('layouts.frontend')
 <!--Sing-in & sing-up page  Font Icon -->
 <link rel="stylesheet" href="{{asset('frontend/fonts/sign-in-up-material-icon/css/material-design-iconic-font.min.css')}}">
 <!-- Main css -->
 <link rel="stylesheet" href="{{asset('/frontend/css/sign-in-up-style.css')}}">
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="main">
            <!-- Sing in  Form -->
                <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="{{asset('frontend/images/signin-image.jpg')}}" alt="sing up image"></figure>
                            <a href="{{route('user.register')}}" class="signup-image-link">Create an account</a>
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Sign In</h2>
                            <form method="POST" class="register-form" id="login-form">
                                <div class="form-group">
                                    @csrf
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email" class=" @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password" class=" @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember" class="agree-term"  {{ old('remember') ? 'checked' : '' }}/>
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>
                                        Remember me
                                    </label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                </div>
                            </form>
                            <div class="social-login">
                                <span class="social-label">Or login with</span>
                                <ul class="socials">
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection


