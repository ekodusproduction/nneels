<footer class="footer footer_type_2 dark">
    {{-- <div class="footer-top container">
        <div class="block-newsletter dark">
            <h3 class="block__title">Get 10% Off</h3>
            <p>Be the first to get the latest news about trends, promotions, and much more!</p>
            <form action="https://Nneels-html.flexkitux.com/Demo2/index.html" class="block-newsletter__form">
                <input class="form-control" type="email" name="email" placeholder="Your email address">
                <button class="btn btn-secondary fw-medium" type="submit">JOIN</button>
            </form>
        </div>
    </div> --}}
    <!-- /.footer-top container -->

    <div class="footer-middle container">
        <div class="row row-cols-lg-5 row-cols-2">
            <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
                <div class="logo">
                    <a href="{{route('website.nav.home.index')}}">
                        <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" alt="Nneels" class="logo__image">
                    </a>
                </div>
                <p class="footer-address">Virginia, Washington, D.C.</p>

                <p class="m-0">
                    <strong class="fw-medium">sales@nneelsglobal.com</strong>
                </p>
                <p class="m-0">
                    <strong class="fw-medium">nneels777@gmail.com</strong>
                </p>

                <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
                    <li>
                        <a href="https://www.facebook.com/nneelsfashionandjewelry" class="footer__social-link d-block" target="_blank">
                            <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_facebook" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/nneels777/" class="footer__social-link d-block" target="_blank">
                            <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_instagram" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div><!-- /.footer-column -->

            <div class="footer-column footer-menu mb-4 mb-lg-0">
                <h6 class="sub-menu__title text-uppercase">Quick Links</h6>
                <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item"><a href="{{route('website.nav.about.index')}}" class="menu-link menu-link_us-s">About Us</a></li>
                    {{-- <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Careers</a></li>
                    <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Affiliates</a></li> --}}
                    {{-- <li class="sub-menu__item"><a href="{{route('website.nav.blog.index')}}" class="menu-link menu-link_us-s">Blog</a></li> --}}
                    <li class="sub-menu__item"><a href="{{route('website.nav.contact.index')}}" class="menu-link menu-link_us-s">Contact Us</a>
                    </li>
                </ul>
            </div><!-- /.footer-column -->

            <div class="footer-column footer-menu mb-4 mb-lg-0">
                <h6 class="sub-menu__title text-uppercase">Shop</h6>
                <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">Sleepware</a>
                    </li>
                    <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Womensware</a>
                    </li>
                    <li class="sub-menu__item"><a href="shop4.html" class="menu-link menu-link_us-s">Mens</a></li>
                    <li class="sub-menu__item"><a href="shop5.html" class="menu-link menu-link_us-s">Kids</a></li>
                    <li class="sub-menu__item"><a href="shop5.html" class="menu-link menu-link_us-s">Accessories</a></li>
                    <li class="sub-menu__item"><a href="shop5.html" class="menu-link menu-link_us-s">Homeware</a></li>
                    <li class="sub-menu__item"><a href="{{route('website.nav.shop.index')}}" class="menu-link menu-link_us-s">Shop All</a></li>
                </ul>
            </div><!-- /.footer-column -->

            <div class="footer-column footer-menu mb-4 mb-lg-0">
                <h6 class="sub-menu__title text-uppercase">Help</h6>
                <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item">
                        <a href="about.html" class="menu-link menu-link_us-s">Customer Service</a>
                    </li>
                    
                    @auth
                        <li class="sub-menu__item">
                            <a href="{{route('website.account.myaccount')}}" class="menu-link menu-link_us-s">My Account</a>
                        </li>
                    @endauth

                    @guest
                        <li class="sub-menu__item">
                            <a href="#" data-aside="customerForms" style="color:white;" class="menu-link menu-link_us-s js-open-aside">Login</a>
                        </li>
                    @endguest
                    
                    <li class="sub-menu__item">
                        <a href="terms.html" class="menu-link menu-link_us-s">Terms & Conditions</a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="{{route('website.nav.contact.index')}}" class="menu-link menu-link_us-s">Privacy Policy</a>
                    </li>
                </ul>
            </div><!-- /.footer-column -->

            <div class="footer-column mb-4 mb-lg-0 nneels-instagram-feed">
                <h6 class="sub-menu__title text-uppercase">Nneel's Instagran Feed</h6>
                <iframe src="https://widget.taggbox.com/151264" style="width:250px;height:250px;border:none;"></iframe>


                {{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                <div class="elfsight-app-85849fa5-87c0-4536-af1a-195143549e2b" data-elfsight-app-lazy></div> --}}

                
                {{-- <ul class="list-unstyled">
                    <li><span class="menu-link">Mon - Fri: 8AM - 9PM</span></li>
                    <li><span class="menu-link">Sat: 9AM - 8PM</span></li>
                    <li><span class="menu-link">Sun: Closed</span></li>
                </ul> --}}
            </div><!-- /.footer-column -->
        </div><!-- /.row-cols-5 -->
    </div><!-- /.footer-middle container -->

    <div class="footer-bottom">
        <div class="container d-md-flex align-items-center">
            <span class="footer-copyright me-auto">©<?php echo Date('Y'); ?> Nneels</span>
            <div class="footer-settings d-md-flex align-items-center">
                <select id="footerSettingsLanguage" class="form-select form-select-sm bg-transparent border-0"
                    aria-label="Default select example" name="store-language">
                    <option class="footer-select__option" value="1">United States | English</option>
                </select>
            </div><!-- /.footer-settings -->
        </div><!-- /.container d-flex align-items-center -->
    </div><!-- /.footer-bottom container -->
</footer>

{{-- Footer For Mobile --}}

<footer class="footer-mobile container w-100 px-5 d-md-none bg-body">
    <div class="row text-center">
        <div class="col-4">
            <a href="{{route('website.nav.home.index')}}" class="footer-mobile__link d-flex flex-column align-items-center">
                <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_home" />
                </svg>
                <span>Home</span>
            </a>
        </div><!-- /.col-3 -->

        <div class="col-4">
            <a href="{{route('website.nav.shop.index')}}" class="footer-mobile__link d-flex flex-column align-items-center">
                <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_hanger" />
                </svg>
                <span>Shop</span>
            </a>
        </div><!-- /.col-3 -->

        <div class="col-4">
            <a href="../index.html" class="footer-mobile__link d-flex flex-column align-items-center">
                <div class="position-relative">
                    <svg class="d-block" width="18" height="18" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                    </svg>
                    <span class="wishlist-amount d-block position-absolute js-wishlist-count">3</span>
                </div>
                <span>Wishlist</span>
            </a>
        </div><!-- /.col-3 -->
    </div><!-- /.row -->
</footer>
