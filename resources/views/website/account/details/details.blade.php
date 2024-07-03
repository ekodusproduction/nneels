@extends('website.welcome')
@section('title', 'Account Details')

@section('custom-styles')
@endsection

@section('content')
<div class="mb-4 pb-4"></div>
<section class="my-account container">
    <h2 class="page-title">Account Details</h2>
    <div class="row">
        <div class="col-lg-2">
          @include('website.account.menu.links')
        </div>
        <div class="col-lg-10">
            <div class="page-content my-account__edit">
              <div class="my-account__edit-form">
                <form id="editAccountDetailsForm">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-floating my-3">
                        <input type="text" class="form-control" id="account_full_name" name="full_name" placeholder="Full Name" value="{{Auth::user()->name}}" required>
                        <label for="account_full_name">Full Name</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating my-3">
                        <input type="email" class="form-control" id="account_email" name="email" placeholder="Email Address" value="{{Auth::user()->email}}" required>
                        <label for="account_email">Email Address</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating my-3">
                        <input type="phone" class="form-control" id="account_phone" name="phone" placeholder="Phone Number" value="{{Auth::user()->phone}}" required>
                        <label for="account_email">Phone Number</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="my-3">
                      <button type="submit" class="btn btn-primary edit-details-save-btn">Save Changes</button>
                    </div>
                  </div>
                </form>
                <form id="changePasswordForm">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="my-3">
                        <h5 class="text-uppercase mb-0">Password Change</h5>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating my-3">
                        <input type="password" class="form-control" id="account_current_password" name="current_password" placeholder="Current password" required>
                        <label for="account_current_password">Current password</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating my-3">
                        <input type="password" class="form-control" id="account_new_password" name="new_password" placeholder="New password" required>
                        <label for="account_new_password">New password</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="my-3">
                        <button type="submit" class="btn btn-primary update-password-save-btn">Save Changes</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</section>
<div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
  <script>
    $('#editAccountDetailsForm').on('submit', function(e){
      e.preventDefault();
      $('.edit-details-save-btn').attr('disabled', true).text('Please wait...');
      let formData = new FormData(this);
      $.ajax({
        url:"{{route('website.account.details')}}",
        type:"POST",
        contentType:false,
        processData:false,
        data:formData,
        success:function(data){
          if(data.status == 200){
            toastr.success(data.message);
          }else{
            toastr.error(data.message)
          }
          $('.edit-details-save-btn').attr('disabled', false).text('Save Changes');
        },error:function(error){
          toastr.error('Oops! Something went wrong');
          $('.edit-details-save-btn').attr('disabled', false).text('Save Changes');
        }
      });
    });

    $('#changePasswordForm').on('submit', function(e){
      e.preventDefault();

      $('.update-password-save-btn').attr('disabled', true).text('Please wait...');
      let formData = new FormData(this);
      
      $.ajax({
        url:"{{route('website.account.update.password')}}",
        type:"POST",
        contentType:false,
        processData:false,
        data:formData,
        success:function(data){
          if(data.status == 200){
            toastr.success(data.message);
          }else{
            toastr.error(data.message);
          }
          $('.update-password-save-btn').attr('disabled', false).text('Save Changes');
        },error:function(error){
          toastr.error('Oops! Something went wrong');
          $('.update-password-save-btn').attr('disabled', false).text('Save Changes');
        }
      });

    });
  </script>
@endsection