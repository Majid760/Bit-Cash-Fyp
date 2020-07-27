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
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>



                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr>
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
                                <p>2. There's another way to do this for layouts that doesn't have to put the navbar inside the container, and which doesn't require any CSS or Bootstrap overrides.

        Simply place a div with the Bootstrap container class around the navbar. This will center the links inside the navbar:

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

