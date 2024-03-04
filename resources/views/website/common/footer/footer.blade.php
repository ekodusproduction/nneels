<footer class="footer footer_type_2 dark">
    <div class="footer-top container">
        <div class="block-newsletter dark">
            <h3 class="block__title">Get 10% Off</h3>
            <p>Be the first to get the latest news about trends, promotions, and much more!</p>
            <form action="https://Nneels-html.flexkitux.com/Demo2/index.html" class="block-newsletter__form">
                <input class="form-control" type="email" name="email" placeholder="Your email address">
                <button class="btn btn-secondary fw-medium" type="submit">JOIN</button>
            </form>
        </div>
    </div><!-- /.footer-top container -->

    <div class="footer-middle container">
        <div class="row row-cols-lg-5 row-cols-2">
            <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
                <div class="logo">
                    <a href="{{route('website.nav.home.index')}}">
                        <img src="{{asset('assets/images/nneels-logo.png')}}" alt="Nneels" class="logo__image">
                    </a>
                </div><!-- /.logo -->
                <p class="footer-address">1418 River Drive, Suite 35 Cottonhall, CA 9622 United States</p>

                <p class="m-0">
                    <strong class="fw-medium">sale@Nneels.com</strong>
                </p>
                <p>
                    <strong class="fw-medium">+1 246-345-0695</strong>
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
                        <a href="https://www.twitter.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_twitter" />
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
                    <li>
                        <a href="https://www.youtube.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_pinterest" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div><!-- /.footer-column -->

            <div class="footer-column footer-menu mb-4 mb-lg-0">
                <h6 class="sub-menu__title text-uppercase">Company</h6>
                <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item"><a href="{{route('website.nav.about.index')}}" class="menu-link menu-link_us-s">About Us</a></li>
                    {{-- <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Careers</a></li>
                    <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Affiliates</a></li> --}}
                    <li class="sub-menu__item"><a href="{{route('website.nav.blog.index')}}" class="menu-link menu-link_us-s">Blog</a></li>
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
                    <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Customer
                            Service</a></li>
                    <li class="sub-menu__item"><a href="{{route('website.account.myaccount')}}" class="menu-link menu-link_us-s">My
                            Account</a></li>
                    <li class="sub-menu__item"><a href="terms.html" class="menu-link menu-link_us-s">Terms & Conditions</a></li>
                    <li class="sub-menu__item"><a href="{{route('website.nav.contact.index')}}" class="menu-link menu-link_us-s">Privacy Policy</a>
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
