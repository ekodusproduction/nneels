@extends('website.welcome')
@section('title', 'Return Policy')

@section('custom-styles')
    <style>
        .return h5{
            margin-top:25px;
        }
        .return p{
            font-size:18px;
            text-align: justify;
            color:rgb(71, 71, 71);
        }
        .return a{
            color:blue;
        }
        .return ul li{
            text-align: justify;
            font-size:16px;
            color:rgb(71, 71, 71);
        }
    </style>
@endsection

@section('content')

    <div class="mt-3 pb-4"></div>
    <section class="contact-us container">
        <h2 class="page-title">Return Policy</h2>
    </section>

    <hr class="mx-5">

    <section class="return container">
        <p>
            At our store, we always make sure that our products are of good quality and are carefully inspected before shipping.
            If you do receive a defective product, don't worry, we have a very easy return process. We apologize for any inconvenience
            this may have caused.
        </p>
        <h5>
            What should you do when you receive a defective product?
        </h5>
        <ul>
            <li>
                Write to us at <a href="mailto:sales@nneelsglobal.com">sales@nneelsglobal.com</a> 
                within 1-2 days of receiving the product.
            </li>
            <li>Provide photos or videos that clearly show the quality defects of the product.</li>
            <li>
                Once it is confirmed that the product is defective (this confirmation process usually takes one day), a 
                refund will be arranged to your original payment method. All items must be returned in their original 
                condition to be eligible for a refund or exchange. Shipping charges for returns shall be borne by customer.
            </li>
        </ul>
        <h5>Can I return or cancel my order if it is not a quality issue?</h5>
        <p class="mx-3 mb-1">Order Changes and Cancellations:</p>
        <ul>
            <li>
                Once an order has been placed, it may not be possible to make changes or cancellations. 
                If you need to modify or cancel your order, please contact us immediately, and we will 
                do our best to accommodate your request.
            </li>
            <li>No cancellation is possible once an order has been shipped.</li>
        </ul>
        <h5>Important Reminder:</h5>
        <ul>
            <li>
                It is important not to return items to the sender's address on the package, 
                as this is not our designated return address. Before initiating a return or exchange, 
                kindly email at <a href="mailto: sales@nneelsglobal.com"> sales@nneelsglobal.com.</a> Please only ship to the address provided by our 
                sales manager, as shipping to any other address may hinder the processing of your return.
            </li>
            <li>
                Ensure that your return package contains only Nneel’s items. We cannot be held responsible for returning
                any non-Nneel’s items included in the package.
            </li>
        </ul>
        <h5>Email: <a href="mailto:sales@nneelsglobal.com">sales@nneelsglobal.com</a></h5>
        <h5>Return Address: Nneel’s , 24670 Dulles Landing Dr #150, Dulles, VA 20166</h5>
    </section>

    <div class="mb-5 pb-xl-5"></div>

@endsection

@section('custom-scripts')
@endsection
