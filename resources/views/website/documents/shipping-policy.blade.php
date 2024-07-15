@extends('website.welcome')
@section('title', 'Privacy Policy')

@section('custom-styles')
    <style>
        .shipping h5{
            margin-top:25px;
        }
        .shipping p{
            font-size:16px;
            margin-bottom:5px;
            color:rgb(71, 71, 71);
            text-align: justify;
        }
        .shipping p span{
            font-weight:500; 
        }
        .shipping a{
            color:blue;
        }
        .shipping ul{
            list-style-type: lower-roman;
        }
        .shipping ul li{
            font-size:18px;
        }
    </style>
@endsection

@section('content')

    <div class="mt-3 pb-4"></div>
    <section class="contact-us container">
        <h2 class="page-title">Shipping Terms and Conditions</h2>
    </section>

    <hr class="mx-5">

    <section class="shipping container">
        <h5>Processing Time:</h5>
        <p>
            Orders typically take 1-3 business days to process before they are shipped out. During peak seasons or promotional periods, 
            processing times may be slightly longer. We appreciate your patience and understanding.
        </p>
        <h5>Shipping Costs</h5>
        <p>
            We offer free shipping over <span>$195</span> domestically (United States), flat rate shipping of <span>$14</span> on orders between 
            <span>$75 - $195</span> and <span>$12</span> on orders less than <span>$75</span>.
        </p>
        <h5>Estimated Delivery Time:</h5>
        <p>
            The estimated delivery time depends on the shipping method and the destination of the package. 
            Standard shipping within the United States usually takes 3-7 business days, while express shipping may 
            take 1-3 business days.
        </p>
        <h5>Tracking Information:</h5>
        <p>
            Once your order has been shipped, you will receive a shipping confirmation email containing tracking information. 
            You can use this information to track the status of your package and monitor its delivery progress.
        </p>
        <h5>Delayed or Lost Orders:</h5>
        <p>
            A parcel is considered lost after it has been in the postal system for a period of 55 business days for US orders and 
            75 business days for international orders. We cannot take responsibility for delays caused by the courier. 
            Although orders normally take much less than that, we are unable to dispatch a replacement until this period of time has elapsed.
        </p>
        <h5>Successful Delivery Confirmation:</h5>
        <p>
            Once a package is marked as 'delivered' by the designated courier service, we consider the item successfully delivered. 
            In the event of concerns or issues with a delivered package, customers are encouraged to contact the courier service 
            directly for assistance.
        </p>
        <h5>Shipping Terms Acceptance:</h5>
        <p>
            By placing an order on our website, you agree to accept our shipping terms and conditions outlined above. 
            If you have any questions or concerns regarding shipping, please contact our customer service team for assistance.
        </p>
        <h5>Contact Information:</h5>
        <p>
            If you have any questions or need further assistance regarding shipping, please don't hesitate 
            to contact our customer service team at [<a href="mailto:sales@nneelsglobal.com">sales@nneelsglobal.com</a>].
        </p>
    </section>

    <div class="mb-5 pb-xl-5"></div>

@endsection

@section('custom-scripts')
@endsection
