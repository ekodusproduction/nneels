<div class="modal fade" id="newsletterPopup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog newsletter-popup modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="row p-0 m-0">
                <div class="col-md-6 p-0 d-none d-md-block">
                    <div class="newsletter-popup__bg h-100 w-100">
                        <img loading="lazy" src="{{asset('assets/Womensware/login-modal-avacado.jpg')}}"
                            class="h-100 w-100 object-fit-cover d-block" alt="" style="max-height:500px; max-width:500px; object-position:top;">
                    </div>
                </div>
                <div class="col-md-6 p-0 d-flex align-items-center">
                    <div class="block-newsletter w-100">
                        <h3 class="block__title">Login Or Create Account</h3>
                        <p>Be the first to get the latest news about trends, promotions, and much more!</p>
                        <form id="newsletterUserLoginForm" class="footer-newsletter__form position-relative bg-body">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Email</label>
                                <input name="email" type="text" class="form-control" placeholder="e.g email id">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="e.g xxxxxxx">
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-sm btn-default text-white user-login-submit-btn" type="submit">Login</button>
                             </div>
                            <div class="form-group mb-3">
                                Don't have an account? <a href="javascript:void(0)" style="color:rgb(1, 1, 148); font-weight:600;" class="js-open-aside" data-aside="customerForms">Create Account</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

