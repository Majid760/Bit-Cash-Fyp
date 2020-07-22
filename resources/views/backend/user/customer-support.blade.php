@extends('layouts.user-dashboard')
@section('style')

@endsection

@section('use-dashboard')

      <!-- form contact -->
      <div class="card card-outline-secondary">
        <div class="card-header">
          <h3 class="mb-0 text-center">Send Us Your Message!</h3>
        </div>
        <div class="card-body">
          <form autocomplete="off" class="form" role="form" method="POST" action="{{ route('user.email') }}">
            <fieldset>
                @csrf
              <label class="mb-0" for="name2">Name</label>
              <div class="row mb-1">
                <div class="col-lg-12">
                  <input class="form-control" id="name2" name="name" required="" type="text" value={{ $userData->username }}>
                </div>
              </div>
              <label class="mb-0" for="email2">Email</label>
              <div class="row mb-1">
                <div class="col-lg-12">
                  <input class="form-control" id="email2" name="email" required="" type="text" value={{ $userData->email }}>
                </div>
              </div>
              <label class="mb-0" for="email2">Phone</label>
              <div class="row mb-1">
                <div class="col-lg-12">
                  <input class="form-control" id="phone" name="phone" required="" type="number">
                </div>
              </div>
              <div class="form-group row">
                <label class="mb-0 ml-3" for="issue">Type</label>
                <div class="col-lg-12">
                  <select class="form-control" name="issue-type" id="user_time_zone" size="0" required>
                    <option value="cashback" selected>
                        Select the type of Issue
                    </option>
                    <option value="cashback">
                      Cashback Issue
                    </option>
                    <option value="sponcership">
                      Sponcership Issue
                    </option>
                    <option value="bussiness">
                       Bussiness
                    </option>
                    <option value="other">
                       Others
                     </option>

                  </select>
                </div>
              </div>
              <label class="mb-0" for="message2">Message</label>
              <div class="row mb-1">
                <div class="col-lg-12">
                  <textarea class="form-control" id="message2" name="message2" required="" rows="6"></textarea>
                </div>
              </div>
              <button class="btn btn-info btn-lg float-right" type="submit">Send Message</button>
            </fieldset>
          </form>
          <p class="">You can also mail us at customersupport@bit-cash.com in case of any queries.</p>
        </div>
      </div><!-- /form contact -->



@endsection


@section('script')

@endsection
