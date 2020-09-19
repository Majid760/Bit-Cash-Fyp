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
                  <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">User Clicks</div>
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
                  <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Conversion</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">858</div>
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
                  <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Visited User</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">848</div>
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
                  <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">Estimated Commission</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">323$</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Clicks History</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Email</th>
                                <th>Product_Id</th>
                                <th>Product_Name</th>
                                <th>Sale_Price</th>
                                <th>Original_Price</th>
                                <th>Commission</th>
                                <th>Product Url</th>
                                <th>Date&Time</th>


                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1
                            @endphp
                            @foreach($users as $user)
                                @foreach($user->products as $product)
                                    <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $product->product_id }}</td>
                                    <td>{{ Str::limit($product->product_name, 25, ' (...)')}}</td>
                                    <th>{{ $product->sale_price.'$' }}</th>
                                    <th>{{ $product->original_price.'$'}}</th>
                                    <td>{{ $product->commission }}</td>
                                    <td><a href="{{ $product->product_url }}" target="_blank">{{ Str::limit($product->product_url,25,'(...)') }}</a></td>
                                    <td>{{ $product->pivot->created_at }}</td>
                                    </tr>
                                @php $i++
                                @endphp
                                @endforeach
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>User Email</th>
                                <th>P_Id</th>
                                <th>P_Name</th>
                                <th>Sale_Price</th>
                                <th>Original_Price</th>
                                <th>Commission</th>
                                <th>Product Url</th>
                                <th>Date&Time</th>

                            </tr>
                        </tfoot>
                    </table>
              </div>
            </div>
          </div>



@endsection






@section('script')

@endsection
