@extends('layouts.user-dashboard')

@section('style')

.jumbotron {

    padding: .5rem 1rem;
}
@endsection

    <!--  main content  -->
    @section('use-dashboard')
           <!-- Content Row -->
           @if(session('error'))
           <div class="alert alert-danger alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <li class="alert alert-danger text-center">{{ session('error') }}</li>
           </div>

           @endif
           <div class="jumbotron user-account-card">
            <p class="text-primary mb-2 font-weight-bold">Hey {{ (auth()->user())->username }} You can find your Bit-Cash account details here!<p>
            <div class="row w-100">
                    <div class="col-md-3">
                        <div class="card border-info mx-sm-1 p-2">
                            <div class="card border-info shadow text-info p-3 my-card" >
                            <span class="fa fa-money" aria-hidden="true"></span></div>
                            <div class="text-info text-center mt-3"><h5>Cashback</h5></div>
                            <div class="text-info text-center mt-2">
                                <div class="row no-gutters mb-2">
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>Pending:</h6></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>00 $</h6></div>
                                </div>
                                <div class="row no-gutters mb-2">
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>Approved:</h6></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>56 $</h6></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-success mx-sm-1 p-2">
                            <div class="card border-success shadow text-success p-3 my-card">
                            <span class="fa fa-trophy" aria-hidden="true"></span></div>
                            <div class="text-success text-center mt-3"><h5>Reward</h5></div>
                            <div class="text-success text-center mt-2">
                                <div class="row no-gutters mb-2">
                                <div class="col-lg-6 col-md-6 col-sm-6"><h6>Pending:</h6></div>
                                <div class="col-lg-6 col-md-6 col-sm-6"><h6>600</h6></div>
                            </div>
                            <div class="row no-gutters mb-2">
                                <div class="col-lg-6 col-md-6 col-sm-6"><h6>Approved:</h6></div>
                                <div class="col-lg-6 col-md-6 col-sm-6"><h6>600</h6></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-danger mx-sm-1 p-2 ">
                            <div class="card border-danger shadow text-danger p-3 my-card" >
                                <span class="fa fa-gift" aria-hidden="true"></span></div>
                            <div class="text-danger text-center mt-3"><h5>Voucher</h5></div>
                            <div class="text-danger text-center mt-2">
                                <div class="row no-gutters mb-2">
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>Pending:</h6></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>600</h6></div>
                                </div>
                                <div class="row no-gutters mb-2">
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>Approved:</h6></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>600</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-warning mx-sm-1 p-2">
                            <div class="card border-warning shadow text-warning p-3 my-card" >
                            <span class="fa fa-user-plus" aria-hidden="true"></span></div>
                            <div class="text-warning text-center mt-3"><h5>Referral</h5></div>
                            <div class="text-warning text-center mt-2">
                                <div class="row no-gutters mb-2">
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>Pending:</h6></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>600</h6></div>
                                </div>
                                <div class="row no-gutters mb-2">
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>Approved:</h6></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6"><h6>600</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>

            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-4 ">
                    <div class="row no-gutters  mt-2">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h5 class="redeem">Redeemable Amount:</h6>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h5 class="redeem text-success"> 33 $</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <p>(Cashback + Reward + Voucher Cash + Referral Approved Earnings)</p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4  ">
                    <div class="row no-gutters ">
                        <div class="col-lg-12 col-md-8 col-sm-4 text-center">
                            <button href="#" class="btn btn-warning btn-lg">
                                <h6>Redeem</h6>
                            </button>
                             <p class="text text-warning">Minimum Amount that to be drawn 50$</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row no-gutters border-radius mt-5">
                <div class="col-lg-6 col-md-4 bg-dark py-2 px-1 border-radius ">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-6">
                            <p class="text-md-left text-primary font-weight-bold">Total Amount Paid:</p>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <p class="text-left text-primary font-weight-bold">{{ 0 }} $</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-4 py-2 px-1 bg-dark  border-radius ">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-6 ">
                            <p class="text-right text-primary font-weight-bold">Total Amount Earned:</p>
                        </div>
                        <div class="col-md-6 col-lg-6 ">
                            <p class="text-center text-primary font-weight-bold">56 $</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <span class="text-muted">Please Note:</span><p>Rewards can only be redeemed via Mobile/DTH Recharge & Shopping Vouchers, & cannot be redeemed by NEFT Bank Transfer. All Cashback & Reward statistics are not updated in real-time. It may take 24-48hr in showing updated balance.
                        Starting June 8, 2020 no service charges will be applicable for the Transfer via BANK/NEFT.</p>
                </div>
            </div>
    @endsection

<!-- end of  main content  -->


@section('script')

@endsection
