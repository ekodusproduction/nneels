@extends('website.welcome')
@section('title', 'Account Signin/Signup')

@section('custom-styles')
@endsection

@section('content')

    <div class="mt-5 pb-4"></div>
    
    <section class="login-register container mt-5">
        <h2 class="d-none">Login & Register</h2>
        <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab" href="#tab-item-login"
                    role="tab" aria-controls="tab-item-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore" id="register-tab" data-bs-toggle="tab" href="#tab-item-register"
                    role="tab" aria-controls="tab-item-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <div class="tab-content pt-2" id="login_register_tab_content">
            <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                <div class="login-form">
                    <form id="loginForm" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control form-control_gray"
                                id="customerNameEmailInput1" placeholder="Email address *" required>
                            <label for="customerNameEmailInput1">Email address *</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control form-control_gray"
                                id="customerPasswodInput" placeholder="Password *" required>
                            <label for="customerPasswodInput">Password *</label>
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-2">
                            <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
                        </div>

                        <button class="btn btn-primary w-100 text-uppercase user-login-submit-btn" type="submit">Log In</button>

                        {{-- <div class="customer-option mt-4 text-center">
                            <span class="text-secondary">No account yet?</span>
                            <a href="#register-tab" class="btn-text js-show-register">Create Account</a>
                        </div> --}}
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
                <div class="register-form">
                    <form id="registerForm" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control form-control_gray"
                                id="customerNameRegisterInput" placeholder="Jhon Doe" required>
                            <label for="customerNameRegisterInput">Full Name *</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control form-control_gray"
                                id="customerEmailRegisterInput" placeholder="Email address *" required>
                            <label for="customerEmailRegisterInput">Email address *</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="phone" type="text" class="form-control form-control_gray"
                                id="customerPhoneNumberRegisterInput" placeholder="+1 XXX XXX-XXXX" required>
                            <label for="customerPhoneNumberRegisterInput">Phone Number *</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control form-control_gray"
                                id="customerPasswodRegisterInput" placeholder="****************" required>
                            <label for="customerPasswodRegisterInput">Password *</label>
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-2">
                            <p class="m-0">Your personal data will be used to support your experience throughout this
                                website, to manage access to your account, and for other purposes described in our privacy
                                policy.</p>
                        </div>

                        <button class="btn btn-primary w-100 text-uppercase  user-submit-btn" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="mb-5 pb-xl-5"></div>
@endsection

@section('custom-scripts')
<script>
    $('#registerForm').on('submit', function(e){
        e.preventDefault();

        const formData = new FormData(this);

        $('.user-submit-btn').text('Please wait....');
        $('.user-submit-btn').attr('Disabled', true);

        $.ajax({
          url:"{{route('website.auth.signup')}}",
          type:"POST",
          processData:false,
          contentType:false,
          data:formData,
          success:function(data){
            if(data.status == 200){
              $('#registerForm')[0].reset();
              toastr.success(data.message)
              $('.user-submit-btn').text('REGISTER');
              $('.user-submit-btn').attr('Disabled', false);

            }else{
              toastr.error(data.message)
              $('.user-submit-btn').text('REGISTER');
              $('.user-submit-btn').attr('Disabled', false);
            }
            
          },error:function(error){
            toastr.error('Oops! Something went wrong');
            $('.user-submit-btn').text('REGISTER');
            $('.user-submit-btn').attr('Disabled', false);
          }
        });


    });

    $('#loginForm').on('submit', function(e){
        e.preventDefault();

        const formData = new FormData(this);
        $('.user-login-submit-btn').text('Please wait....');
        $('.user-login-submit-btn').attr('Disabled', true);

        $.ajax({
          url:"{{route('website.auth.login')}}",
          type:"POST",
          processData:false,
          contentType:false,
          data:formData,
          success:function(data){
            if(data.status == 200){

              $('#loginForm')[0].reset();

              toastr.success(data.message)
              $('.user-login-submit-btn').text('LOG IN');
              $('.user-login-submit-btn').attr('Disabled', false);


              window.location.replace("{{route('website.account.myaccount')}}");
            }else{
              toastr.error(data.message)
              $('.user-login-submit-btn').text('LOG IN');
              $('.user-login-submit-btn').attr('Disabled', false);
            }
          },error:function(error){
            toastr.error('Oops! Something went wrong')
            $('.user-login-submit-btn').text('LOG IN');
            $('.user-login-submit-btn').attr('Disabled', false);
          }
        });
    });
  </script>
@endsection
