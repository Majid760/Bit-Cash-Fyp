@extends('layouts.user-dashboard')

@section('style')
@endsection

@section('use-dashboard')

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
      <!-- form card cc payment -->
      <div class="card card-outline-secondary">
        <div class="card-body">
          <h3 class="text-center">Credit Card Payment</h3>
          <hr>
          <div class="alert alert-info">
            <a class="close" data-dismiss="alert" href="#">×</a>CVC code is required.
          </div>
          <form autocomplete="off" class="form" role="form" method="POST" action="{{route('user.amount-transaction')}}">
            <div class="form-group">
                @csrf
              <label for="cc_name">Card Holder's Name</label>
              <input class="form-control" name="cc_name" value="{{ old('cc_name') }} "id="name"  required="required" title="First and last name" type="text">
            </div>
            <div class="form-group">
              <label>Card Number</label>
              <input autocomplete="off" name="cc_number" value="{{ old('cc_number') }}"  class="form-control" maxlength="20" pattern="\d{16}" required="" title="Enter your 16 digit Credit card number" type="text">
            </div>
            <div class="form-group row">
              <label class="col-md-12">Card Exp. Date</label>
              <div class="col-md-4">
                <select class="form-control" name="cc_exp_mo" size="0">
                  <option value="01" {{ old('cc_exp_mo')== '01' ? 'selected' : ''}}>
                    01
                  </option>
                  <option value="02" {{ old('cc_exp_mo')== '02' ? 'selected' : ''}}>
                    02
                  </option>
                  <option value="03" {{ old('cc_exp_mo')== '03' ? 'selected' : ''}}>
                    03
                  </option>
                  <option value="04" {{ old('cc_exp_mo')== '04' ? 'selected' : ''}}>
                    04
                  </option>
                  <option value="05" {{ old('cc_exp_mo')== '05' ? 'selected' : ''}}>
                    05
                  </option>
                  <option value="06" {{ old('cc_exp_mo')== '06' ? 'selected' : ''}}>
                    06
                  </option>
                  <option value="07" {{ old('cc_exp_mo')== '07' ? 'selected' : ''}}>
                    07
                  </option>
                  <option value="08" {{ old('cc_exp_mo')== '08' ? 'selected' : ''}}>
                    08
                  </option>
                  <option value="09" {{ old('cc_exp_mo')== '09' ? 'selected' : ''}}>
                    09
                  </option>
                  <option value="10" {{ old('cc_exp_mo')== '10' ? 'selected' : ''}}>
                    10
                  </option>
                  <option value="11" {{ old('cc_exp_mo')== '11' ? 'selected' : ''}}>
                    11
                  </option>
                  <option value="12" {{ old('cc_exp_mo')== '12' ? 'selected' : ''}}>
                    12
                  </option>
                </select>
              </div>
              <div class="col-md-4">
                    <input type="date" name="expire_year" min="{{ date('m-d-Y', time()) }}" class="form-control" value="{{date('m-d-Y', time())}}" required/>

                </div>
              <div class="col-md-4">
                <input autocomplete="off" id="cvc"  name="cvc" value="{{ old('cvc') }}" class="form-control" maxlength="3" pattern="\d{3}" placeholder="CVC" required="" title="Three digits on the back of your card" type="text" required>
              </div>
            </div>
            <div class="row">
              <label class="col-md-12">Amount</label>
            </div>
            <div class="form-inline">
              <div class="input-group">
                <div class="input-group-addon mt-3">
                  $
                </div>
                <input type="number"  class="form-control text-right" min="50" name="amount" id="exampleInputAmount"  value="{{ old('amount') }}" required>
                <div class="input-group-addon mt-3">
                  .00  <span class="text-right text-warning ml-3">Minimum Amount that to be drawn 50$</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-md-6">
                <button class="btn btn-default btn-lg btn-block" type="reset">Cancel</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div><!-- /form card cc payment -->




@endsection




@section('script')


@endsection
