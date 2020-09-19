@extends('layouts.user-dashboard')
@section('style')
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css    " rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css" rel="stylesheet">

@section('use-dashboard')

<!-- ./Tabs -->

        <section class=" ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center ">
                        <nav class="nav-justified ">
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Transaction</a>
                            <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Click History</a>
                            <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false">PW Cashback Voucher Details</a>

                        </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                                <!-- Transaction History section -->
                            <div class="pt-3"></div>

                            <div class="row">
                                <div class="container">
                                    <form name="payment_form"  action="{{route('user.taransactionData')}}" method="POST">
                                        @csrf
                                        <div class="row mt-2">
                                          <div class="col">
                                            Start Date:
                                            <input type="date" class="form-control" name="start-date" placeholder="start date" >
                                          </div>
                                          <div class="col">
                                            End Date:
                                            <input type="date" class="form-control" name="end-date" placeholder="last date" >
                                          </div>
                                          <div class="col">
                                            <input type="submit" class="form-control btn btn-primary mt-4" placeholder="Last name" value="Submit">
                                          </div>
                                        </div>
                                      </form>

                                </div>
                             </div>
                              <!-- Data table -->
                                <div class="row no-gutters datatable">
                                    <div class="container datatable">
                                       <div class="col datatable">
                                             <!-- Data table -->
                                             <table id="example" class="display table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                        </div>


                                    </div>
                                </div>

                             <!-- End of Transaction History section -->
                        </div>

                                <!-- Transaction Click History -->
                        <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                            <div class="pt-3"></div>

                            <div class="row no-gutters datatable">
                                <div class="container datatable">
                                   <div class="col datatable">
                                         <!-- Data table -->
                                         @if($users!=null || $users!=0)
                                         <table id="example" class="display table table-sm table-striped " style="width:100%">

                                            <thead>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Product_Id</th>
                                                    <th>Name</th>
                                                    <th>Sale_Price</th>
                                                    <th>Original_Price</th>
                                                    <th>Product Url</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($users as $user)
                                                    @foreach($user->products as $product)
                                                        <tr>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $product->product_id }}</td>
                                                        <td>{{ Str::limit($product->product_name, 25, ' (...)')}}</td>
                                                        <th>{{ $product->sale_price.'$' }}</th>
                                                        <th>{{ $product->original_price.'$'}}</th>
                                                        <td><a href="{{ $product->product_url }}" target="_blank">{{ Str::limit($product->product_url,25,'(...)') }}</a></td>
                                                        </tr>

                                                    @endforeach
                                                @endforeach

                                            </tbody>

                                        </table>
                                        @else
                                        <div class="alert alert-info text-center">No Click record found</div>
                                        @endif
                                    </div>
                                </div>
                        </div>





                        </div>

                               <!-- PW Cashback Voucher Details -->
                        <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                            <div class="pt-3"></div>
                                <p>3. There's another way to do this for layouts that doesn't have to put the navbar inside the container, and which doesn't require any CSS or Bootstrap overrides.

        Simply place a div with the Bootstrap container class around the navbar. This will center the links inside the navbar:

                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection



@section('scripts')
        <!-- Data table Script CDN -->


{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
{{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>

<script>

    // Data tabel script
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf','print' ]
    } );

    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );





</script>


@endsection

