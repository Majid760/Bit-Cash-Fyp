@extends('layouts.user-dashboard')

@section('style')
@endsection

    <!--  main content  -->
    @section('use-dashboard')
            <!-- form card change password -->
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger text-center">{{ $error }}</div>
                @endforeach
            @endif
            @if(session('message'))
                <div class="alert alert-danger text-center">{{ session('message') }}</div>
            @endif
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h3 class="mb-0">Change Password</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" action="{{ route('user.password-update') }}" method="post">
                        <div class="form-group">
                            @csrf
                            <label for="inputPasswordOld">Current Password</label>
                            <input type="password" name="old_password" class="form-control" id="inputPasswordOld" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordNew">New Password</label>
                            <input type="password" name="password" class="form-control" id="inputPasswordNew" required="">
                            <span class="form-text small text-muted">
                                    The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordNewVerify">Verify Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputPasswordNewVerify" required="">
                            <span class="form-text small text-muted">
                                    To confirm, type the new password again.
                                </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form card change password -->
    @endsection

<!-- end of  main content  -->


@section('script')

@endsection
