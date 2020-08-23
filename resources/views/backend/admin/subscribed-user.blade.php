@extends('layouts.admin-dashb')

@section('style')

@endsection

@section('content')

     <!-- Content Row -->
     <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Total Users</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($users) }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Users (Subscriber)</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($subUsers) }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-envelope fa-2x text-gray-300"></i>

                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Approved User</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                    </div>
                    {{-- <div class="col">
                      <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- email composing section -->
    <form method="POST" action="{{ route('admin.emailToSubscribedUser')}}" enctype="multipart/form">

    <div class="row">

            <div class="col-lg-8 col-md-7">
                    @csrf
                    <div class="form-group">
                    <label for="exampleInputEmail1">Compose Your Email Here</label>
                    <textarea id="summernote" name="msgbody"></textarea>
                    </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-5">
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible mt-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger text-center">{{ $error }}</li>
                        @endforeach
                        </ul>
                </div>
                @endif
                @if(session('message'))
                    <div class="alert alert-success alert-dismissible mt-3" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <ul>
                            <li>{{ session('message') }}</li>
                            </ul>
                    </div>
                @endif
                <h5 class="text-center mt-3">Choose Number of User </h5>
                <select class="custom-select my-4" name="user-type" id="user-type">
                    <option >Choose The User Type</option>
                    <option value="all" name="all-user" >All User</option>
                    <option value="subscribe" name="subscribed-user" selected>Subscribed User</option>
                </select>
                  <button  type="submit" class="btn btn-primary btn-block text-white text-center mt-5 ">Send Email</button>

            </div>


    </div>
</form>

<div class="row">
    <div class="col-lg-12 col-md-12">
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total Subscribed User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>created_at</th>
                                <th>updated_at</th>

                                {{-- <th>Approved</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subUsers as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>


                                {{-- <td>Pending<td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                {{-- <th>Approved</th> --}}
                            </tr>
                        </tfoot>
                    </table>
              </div>
            </div>
          </div>
    </div>
</div>




@endsection

@section('script')


@endsection
