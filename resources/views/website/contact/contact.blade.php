@extends('website.welcome')
@section('title', 'Contact')

@section('custom-styles')
@endsection

@section('content')

    <div class="mt-3 pb-4"></div>
    <section class="contact-us container">
        <div class="mw-930">
            <h2 class="page-title">CONTACT US</h2>
        </div>
    </section>

    <section class="google-map mb-5">
        <h2 class="d-none">Contact US</h2>
        {{-- <div id="map" class="google-map__wrapper"></div> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12407.732817880162!2d-77.64784029178227!3d38.971193179956686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b66ae2241962f3%3A0x15a8739d0328a1c8!2sAldie%2C%20VA%2020105%2C%20USA!5e0!3m2!1sen!2sin!4v1709462805942!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us container">
        <div class="mw-930">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3 class="mb-4">Store in London</h3>
                    <p class="mb-4">1418 River Drive, Suite 35 Cottonhall, CA 9622<br>United Kingdom</p>
                    <p class="mb-4">sale@Nneels.com<br>+44 20 7123 4567</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Store in Istanbul</h3>
                    <p class="mb-4">1418 River Drive, Suite 35 Cottonhall, CA 9622<br>Turky</p>
                    <p class="mb-4">sale@Nneels.com<br>+90 212 555 1212</p>
                </div>
            </div>
            <div class="contact-us__form">
                <form name="contact-us-form" class="needs-validation" novalidate>
                    <h3 class="mb-5">Get In Touch</h3>
                    <div class="form-floating my-4">
                        <input type="text" class="form-control" id="contact_us_name" placeholder="Name *" required>
                        <label for="contact_us_name">Name *</label>
                    </div>
                    <div class="form-floating my-4">
                        <input type="email" class="form-control" id="contact_us_email" placeholder="Email address *"
                            required>
                        <label for="contact_us_name">Email address *</label>
                    </div>
                    <div class="my-4">
                        <textarea class="form-control form-control_gray" placeholder="Your Message" cols="30" rows="8" required></textarea>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="mb-5 pb-xl-5"></div>

@endsection

@section('custom-scripts')
    {{-- <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyAnKJxI0i5KGFgD3QTSg_aXbQk_Ze2kNAw", v: "beta"});</script>
    <script src="{{asset('assets/Demo2/js/googlemap-setting.js')}}"></script> --}}
@endsection
