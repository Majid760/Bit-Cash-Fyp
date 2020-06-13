@extends('layouts.admin-sign')

@section('style')

@endsection

@section('content')

<div class="container  admin-register">
    <div class="card o-hidden border-0 shadow-lg my-5">
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center mt-1 ">{{ $error }}</div>
            @endforeach
        @endif


        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->

        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="POST" action="{{ route('admin.register-signup')}}">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            @csrf
                            <input type="text" name="f_name" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" value="{{ old('f_name') }}">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="l_name" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" value="{{ old('l_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" value="{{ old('password') }}">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" name="password_confirmation" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value=" Register Account">

                    {{-- <a href="{{ route('admin.register-signup')}}" class="btn btn-primary btn-user btn-block">
                    Register Account
                    </a> --}}
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
                </form>
                <hr>
                <div class="text-center">
                <a class="small" href="{{ route('admin.forgot') }}">Forgot Password?</a>
                </div>
                <div class="text-center">
                <a class="small" href="{{ route('admin.login') }}">Already have an account? Login!</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
