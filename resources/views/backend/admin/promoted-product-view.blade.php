@extends('layouts.admin-dashb')

@section('style')

<style>
    div.dataTables_filter, div.dataTables_length {
  padding-left:10px;

}
</style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css" rel="stylesheet">
@endsection


@section('content')

        <div class="row ">

            <div class="col-lg-6 bg-primary col-md-12 shadow p-3 mb-5 border border-white border-left-2 rounded">
                <div class="panel panel-default  ">
                    <div class="panel-heading">

                        <h3 class="panel-title text-center text-white">Import CSV File Of Promoted Products! </h3>
                    </div>
                    <div class="panel-body">

                        <form action="{{ route('admin.import-promoted-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 justify-content-center ml-auto d-flex justify-content-center ">
                                <a href="#" class="btn btn-info btn-icon-split btn-lg ">
                                    <span class="icon text-white-50">
                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                    </span>
                                    <input type="file" name="promoted-file" class="text text-white " value="Upload The File!">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6  mt-4">

                                <button  class="btn btn-info btn-md float-right">Import Products</button>
                            </div>
                            <div class="col-lg-6 col-md-6  mt-4">
                                <button class="btn btn-success btn-md" href="{{ route('admin.export-product') }}">Export Products </button>
                            </div>
                        </div>

                        </form>
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
            </div>
            <div class="col-lg-6 bg-primary col-md-12 shadow p-3 mb-5 border border-white border-left-2 rounded"  rounded">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h3 class="text-center text-white">Total Promoted Products Detail!</h3>
                    </div>
                </div>

               <!--- md -->

                <div class="container my-1">
                    <div class="row">
                      <div class="col-md-8 col-lg-12 mx-auto">
                        <!-- Section: Block Content -->
                        <section>

                          <div class="list-group list-group-flush z-depth-1 rounded">
                            <div class="list-group-item active d-flex justify-content-start align-items-center py-3 border border-white rounded-top">
                              <img src="{{ asset('backend/images/product-detail.jpg') }}" alt="product-detail" class="rounded-circle z-depth-0" width="70" >
                              <div class="d-flex flex-column pl-3">
                                <p class="font-weight-normal mb-0">Affiliated Products</p>
                                <p class="small mb-0">Ali Express</p>
                              </div>
                            </div>
                            <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Promoted Products
                                <button class="btn btn-md btn-primary"><span class="badge badge-primary badge-pill">{{ count($promoData) }}</span></button>
                            </a>
                            <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Total Stores
                                <button class="btn btn-primary btn-md"><span class="badge badge-primary badge-pill">{{ count($store) }}</span></button>
                            </a>
                            <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Activated Links
                                <button class="btn btn-md btn-primary"><span class="badge badge-primary badge-pill">{{ count($promoData) }}</span></button>
                            </a>
                            <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Non Activated Links
                              <button class="btn btn-md btn-primary"><span class="badge badge-primary badge-lg badge-pill">00</span></button>
                            </a>
                          </div>

                        </section>
                        <!-- Section: Block Content -->


                      </div>
                    </div>
                  </div>
                <!--  -->
            </div>

        </div>
        <!-- kdkdk -->


        <!-- Data table -->
        <div class="row no-gutters ">
            <div class="col-lg-12 col-md-12 ">

                     <!-- Data table -->
                <div class="table-responsive">
                     <table id="example" class="table table-striped" width="100%">
                        <thead class="rounded-top">
                            <tr class="bg-primary text-white rounded-top">
                                <th scope="col">#</th>
                                <th scope="col">Unit_Price</th>
                                <th scope="col">Link</th>
                                <th scope="col">Store_Info</th>
                                <th scope="col">Store_Link</th>
                                <th scope="col">Sold_Quantity</th>
                                <th scope="col">Comm_Rate</th>
                                <th scope="col">Commission</th>
                                <th scope="col">R_M_C Rate</th>
                                <th scope="col">R_M_Comm</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            @if($promoData)
                                @foreach($promoData as $promo)
                                    <tr class="">
                                        <td scope="row">{{ $promo->id }}</td>
                                        <td scope="row">{{ $promo->unit_price}}<span class="">$</span></td>
                                        <td scope="row">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                  <div class="flip-box-front">
                                                    <img src="{{ $promo->image_link }}" alt="{{ $promo->image_link}}" width="220" height="160" class="rounded float-left" />
                                                  </div>
                                                  <div class="flip-box-back rounded py-1 px-1">
                                                    <p>{{ $promo->product_info }}</p>
                                                  </div>
                                                </div>
                                              </div>

                                            <a href="{{ $promo->product_link}}" target="_blank">{{ $promo->product_link}}</a>
                                        </td>
                                        <td scope="row">{{ $promo->store_id}}</td>
                                        <td scope="row"><a href="{{preg_replace('/\s\s+/', ' ', $promo->store_link)}}" target="_blank">{{$promo->store_link  }}</a></td>
                                        <td scope="row">{{ $promo->sold_quantity}}</td>
                                        <td scope="row">{{ $promo->commission_rate}}<span class="">%</span></td>
                                        <td scope="row">{{ $promo->commission}}<span class="">%</span></td>
                                        <td scope="row">{{ $promo->relevant_market_commission.'%'}}</td>
                                        <td scope="row">{{ $promo->relevant_market_commission}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr class="bg-info text-white rounded-top">
                                <th scope="col">#</th>
                                <th scope="col">Unit_Price</th>
                                <th scope="col">Link</th>
                                <th scope="col">Store_Info</th>
                                <th scope="col">Store_Link</th>
                                <th scope="col">Sold_Quantity</th>
                                <th scope="col">Comm_Rate</th>
                                <th scope="col">Commission</th>
                                <th scope="col">R_M_C Rate</th>
                                <th scope="col">R_M_Comm</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- End of Data table div-->
                <div class="float-right mt-4">{{ $promoData->links('vendor.pagination.bootstrap-4') }}</div>
            </div>
        </div>



@endsection


@section('script')


<script>
    // $(document).ready(function() {
    //     $('.file-upload').file_upload();

    // });

    // window.onload = function() {
    //     if (window.jQuery) {
    //     // jQuery is loaded
    //     alert("Yeah!");
    //     } else {
    //     // jQuery is not loaded
    //     alert("Doesn't Work");
    //     }
    // }


</script>


@endsection
