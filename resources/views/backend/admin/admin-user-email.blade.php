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
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Estimated)</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings  Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">$ 00</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Cashback (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Cashback</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$ 00</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendings</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$ 00</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

    <!-- flash message -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
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
        </div>
    </div>


        @if($userContEmails)
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Emails</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message Body</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach($userContEmails as $ucemail)
                      <tr>
                        <td>{{ $ucemail->name }}</td>
                        <td>{{ $ucemail->email }}</td>

                        <td>
                            <h5 class="text-left"><span class="font-weight-bold mr-2">Subject:</span>{{ $ucemail->subject }}</h5>
                            <p class="px-4">{{ $ucemail->message }} </p>
                            <h5 class="text-right">{{ $ucemail->created_at }}</h5>

                            <!-- Accordion -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                            <button class="accordion" >Replay</button>
                                            <div class="panel mx-0">
                                                <form method="post" action="{{ route('admin.replay-user') }}" class="mx-0 px-0 mt-3" enctype="multipart/form-data">
                                                @csrf
                                                <textarea id="summernote" name="msgbody" class="form-control mt-3 px-0 mx-0">{{{ old('msgbody') }}}</textarea>
                                                <div class="float-right mb-5">
                                                    <button type="submit" class="btn btn-primary mt-2">Send Message</button>
                                                </div>
                                                <input type="hidden" name="email" value="{{$ucemail->email}}">
                                                </form>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message Body</th>
                        </tr>
                      </tfoot>
                  </table>
                </div>
              </div>
            </div>
        @endif
          <!-- /.container-fluid -->




@endsection


@section('script')

@endsection
