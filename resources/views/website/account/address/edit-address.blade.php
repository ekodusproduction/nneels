@extends('website.welcome')
@section('title', 'My Address')

@section('custom-styles')
@endsection

@section('content')
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Edit Address</h2>
        <div class="row">
            <div class="col-lg-12">
                <form id="editAddressForm">
                    @csrf
                    <div class="checkout-form">
                    <div class="billing-info__wrapper">
                        <h4>DETAILS</h4>
                        <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-floating my-3">
                            <input type="text" class="form-control" id="checkout_company_name" name="company_name" placeholder="Company Name (optional)" value="{{$shipping_address != null ? $shipping_address->company_name : ''}}">
                            <label for="checkout_company_name">Company Name (optional)</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="search-field my-3">
                            <div class="form-label-fixed hover-container">
                                <label for="search-dropdown" class="form-label">Country / Region*</label>
                                <div class="js-hover__open">
                                <input type="text" class="form-control form-control-lg search-field__actor search-field__arrow-down" id="search-dropdown" name="country" readonly placeholder="Choose a location..." value="{{$shipping_address != null ? $shipping_address->country : ''}}">
                                </div>
                                <div class="filters-container js-hidden-content mt-2">
                                <ul class="search-suggestion list-unstyled overflow-scroll" style="max-height:270px;">
                                    @foreach ($country_list as $country)
                                    <li class="search-suggestion__item js-search-select">{{$country}}</li>
                                    @endforeach
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="checkout_street_address" name="street_address_1" placeholder="Street Address 1" value="{{$shipping_address != null ? $shipping_address->address_1 : ''}}">
                            <label for="checkout_company_name">Street Address 1*</label>
                            </div>
                            <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="checkout_street_address_2"  name="street_address_2" placeholder="Street Address 2" value="{{$shipping_address != null ? $shipping_address->address_2 : ''}}">
                            <label for="checkout_company_name">Street Address 2</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-floating my-3">
                            <input type="text" class="form-control" name="town_or_city" id="checkout_city" placeholder="Town / City *" value="{{$shipping_address != null ? $shipping_address->town_or_city : ''}}">
                            <label for="checkout_city">Town / City *</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-floating my-3">
                            <input type="text" class="form-control" id="checkout_zipcode" name="zip_code" placeholder="Postcode / ZIP *" value="{{$shipping_address != null ? $shipping_address->zip_code : ''}}">
                            <label for="checkout_zipcode">Postcode / ZIP *</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-floating my-3">
                            <input type="text" class="form-control" id="checkout_province" name="province" placeholder="Province" value="{{$shipping_address != null ? $shipping_address->province : ''}}">
                            <label for="checkout_province">Province</label>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{route('website.account.myAddress')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary save-address-btn">Save Address</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
    <script>
        $('#editAddressForm').on('submit', function(e){
            e.preventDefault();

            $('.save-address-btn').attr('disabled', true).text('Please wait....');
            let formData = new FormData(this);

            $.ajax({
                url:"{{route('website.account.edit.address')}}",
                type:"POST",
                contentType:false,
                processData:false,
                data:formData,
                success:function(data){
                    if(data.status == 200){
                        toastr.success(data.message)
                    }else{
                        toastr.error(data.message)
                    }
                    $('.save-address-btn').attr('disabled', false).text('Save Address');
                },error:function(error){
                    toastr.error('Oops! Something went wrong');
                    $('.save-address-btn').attr('disabled', false).text('Save Address');
                }
            });
            
        });
    </script>
@endsection