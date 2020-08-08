@extends('layouts.admin-dashb')

@section('style')
    <!-- Data table css-->
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css    " rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css" rel="stylesheet">
@endsection


@section('content')
    <div class="container">
        <div class="row ">

            <div class="col-lg-6 bg-primary col-md-12 shadow p-3 mb-5 border border-white border-left-2 rounded">
                <div class="panel panel-default  ">
                    <div class="panel-heading">
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                    @foreach($errors->all() as $error)
                                        <li class="alert alert-danger text-center">{{ $error }}</li>
                                    @endforeach
                                    </ul>
                            </div>
                        @endif
                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                    <li>{{ session('message') }}</li>
                                    </ul>
                            </div>
                        @endif
                        <h3 class="panel-title text-center text-white">Import CSV File Of Products! </h3>
                    </div>
                    <div class="panel-body">

                        <form action="{{ route('admin.import-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                            <input type="file" class="form-control" name="file" accept=".csv">
                            <br>
                            <button  class="btn btn-info">Import Products</button>
                            <a class="btn btn-success" href="{{ route('admin.export-product') }}">Export Products </a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-primary col-md-12 shadow p-3 mb-5 border border-white border-left-2 rounded"  rounded">
                <div class="">
                    <h2 class="text-center text-white">Total Products Detail!</h2>
                </div>
            </div>

        </div>

        <!-- Data table -->
        <div class="row no-gutters ">
            <div class="col-lg-12 col-md-12">
                     <!-- Data table -->
                     <table id="example" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th class="text-justify">Product Id</th>
                                <th>Product</th>
                                <th>Product Url</th>
                                <th>Original Price</th>
                                <th>Sale Price</th>
                                <th>Commission Rate</th>
                                <th>Discount</th>
                                <th>Out_Of_Stock_Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                            </tr>
                            <tr>

                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                            </tr>

                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                            </tr>



                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Product ID</th>
                                <th>Product</th>
                                <th>Product Url</th>
                                <th>Original Price</th>
                                <th>Sale Price</th>
                                <th>Commission Rate</th>
                                <th>Discount</th>
                                <th>Out_Of_Stock_Date</th>
                            </tr>
                        </tfoot>
                    </table>
            </div>
        </div>


   </div>


@endsection


@section('script')

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
<script type="text/javascript">
 // Data tabel script
 $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf','print' ]
    } );
table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    } );

    console.log($('#example_filter')..css({
    'floate':'right',
    'width' : '400px',
    'display' : 'inline',
    'margin-top' : '20px',
});
    // file selection button

</script>
@endsection
