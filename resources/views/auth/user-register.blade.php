@extends('layouts.frontend')
 <!--Sing-in & sing-up page  Font Icon -->
 <link rel="stylesheet" href="{{asset('frontend/fonts/sign-in-up-material-icon/css/material-design-iconic-font.min.css')}}">
 <!-- sign in and up css -->
 <link rel="stylesheet" href="{{asset('/frontend/css/sign-in-up-style.css')}}">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="main">
              <!-- Sign up form -->
                <section class="signup">
                    <div class="container">
                        @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger text-center mt-2">{{ $error }}</div>
                        @endforeach
                        @endif
                        <div class="signup-content">
                            <div class="signup-form">

                                <h2 class="form-title">Sign up</h2>
                                <form method="POST" class="register-form" id="register-form" action="{{ route('user.register') }}">
                                    <div class="form-group">
                                        @csrf
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="name" id="name" placeholder="user name e.g xyz786" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="pass" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password"  required autocomplete="new-password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                        {{-- <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label> --}}
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                        {{-- <a href="{{ route('user.register')}}" class="btn btn-lg btn-primary">Register</a> --}}

                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <figure><img src="{{asset('frontend/images/signup-image.jpg')}}" alt="sing up image"></figure>
                                <a href="{{route('user.login')}}" class="signup-image-link text-danger">I am already member?</a>
                            </div>
                        </div>
                    </div>
                </section>

        </div>
    </div>
</div>
@endsection



