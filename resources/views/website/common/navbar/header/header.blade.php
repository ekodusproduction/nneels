  {{-- <div class="header-mobile header_sticky">
      <div class="container d-flex align-items-center h-100">
        <a class="mobile-nav-activator d-block position-relative" href="#">
          <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_nav" /></svg>
          <span class="btn-close-lg position-absolute top-0 start-0 w-100"></span>
        </a>

        <div class="logo">
          <a href="/">
            <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" alt="Nneels" class="logo__image d-block">
          </a>
        </div><!-- /.logo -->

        <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
          <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
          <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
        </a>
      </div><!-- /.container -->

      <nav class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
        <div class="container">
          <form action="#" method="GET" class="search-field position-relative mt-4 mb-3">
            <div class="position-relative">
              <input class="search-field__input w-100 border rounded-1" type="text" name="search-keyword" placeholder="Search products">
              <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
                <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
              </button>
              <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
            </div>

            <div class="position-absolute start-0 top-100 m-0 w-100">
              <div class="search-result"></div>
            </div>
          </form><!-- /.header-search -->
        </div><!-- /.container -->

        <div class="container">
          <div class="overflow-hidden">
            <ul class="navigation__list list-unstyled position-relative">
              <li class="navigation__item">
                <a href="/" class="navigation__link js-nav-right d-flex align-items-center">Home
                      <svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                      </svg>
                  </a>
              </li>
              <li class="navigation__item">
                  <a href="{{route('website.nav.shop.index')}}" class="navigation__link js-nav-right d-flex align-items-center">Shop
                      <svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                      </svg>
                  </a>
              </li>

              <li class="navigation__item">
                  <a href="{{route('website.nav.blog.index')}}" class="navigation__link js-nav-right d-flex align-items-center">Blog
                      <svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                      </svg>
                  </a>
              </li>

              <li class="navigation__item">
                <a href="{{route('website.nav.about.index')}}" class="navigation__link">About</a>
              </li>

              <li class="navigation__item">
                <a href="{{route('website.nav.contact.index')}}" class="navigation__link">Contact</a>
              </li>
            </ul><!-- /.navigation__list -->
          </div><!-- /.overflow-hidden -->
        </div><!-- /.container -->

        <div class="border-top mt-auto pb-2">
          <div class="customer-links container mt-4 mb-2 pb-1">
            <svg class="d-inline-block align-middle" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_user" /></svg>
            <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">My Account</span>
          </div>

          <div class="container d-flex align-items-center">
            <label for="footerSettingsLanguage_mobile" class="me-2 text-secondary">Language</label>
            <select id="footerSettingsLanguage_mobile" class="form-select form-select-sm bg-transparent border-0" aria-label="Default select example" name="store-language">
              <option class="footer-select__option" value="1">United States | English</option>
            </select>
          </div>

          <ul class="container social-links list-unstyled d-flex flex-wrap mb-0">
            <li>
              <a href="https://www.facebook.com/nneelsfashionandjewelry" class="footer__social-link d-block ps-0" target="_blank">
                <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter" /></svg>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/nneels777/" class="footer__social-link d-block" target="_blank">
                <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg"><path d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z"/></svg>
              </a>
            </li>
            <li>
              <a href="https://www.pinterest.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest" /></svg>
              </a>
            </li>
          </ul>
        </div>
      </nav><!-- /.navigation -->
  </div> --}}
  <div class="header-mobile header_sticky position-absolute">
    <div class="container d-flex align-items-center h-100">
      <a class="mobile-nav-activator d-block position-relative" href="#">
        <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_nav"></use></svg>
        <span class="btn-close-lg position-absolute top-0 start-0 w-100"></span>
      </a>

      <div class="logo">
        <a href="./index.html">
          <img src="../images/logo.png" alt="Uomo" class="logo__image d-block">
        </a>
      </div><!-- /.logo -->

      <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart"></use></svg>
        <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
      </a>
    </div><!-- /.container -->

    <nav class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
      <div class="container">
        <form action="search.html" method="GET" class="search-field position-relative mt-4 mb-3">
          <div class="position-relative">
            <input class="search-field__input w-100 border rounded-1" type="text" name="search-keyword" placeholder="Search products">
            <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search"></use></svg>
            </button>
            <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
          </div>

          <div class="position-absolute start-0 top-100 m-0 w-100">
            <div class="search-result"></div>
          </div>
        </form><!-- /.header-search -->
      </div><!-- /.container -->

      <div class="container">
        <div class="overflow-hidden">
          <ul class="navigation__list list-unstyled position-relative">
            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Home<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>Home</a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="../Demo1/index.html" class="menu-link menu-link_us-s">Home 1</a></li>
                  <li class="sub-menu__item"><a href="../Demo2/index.html" class="menu-link menu-link_us-s">Home 2</a></li>
                  <li class="sub-menu__item"><a href="../Demo3/index.html" class="menu-link menu-link_us-s">Home 3</a></li>
                  <li class="sub-menu__item"><a href="../Demo4/index.html" class="menu-link menu-link_us-s">Home 4</a></li>
                  <li class="sub-menu__item"><a href="../Demo5/index.html" class="menu-link menu-link_us-s">Home 5</a></li>
                  <li class="sub-menu__item"><a href="../Demo6/index.html" class="menu-link menu-link_us-s">Home 6</a></li>
                  <li class="sub-menu__item"><a href="../Demo7/index.html" class="menu-link menu-link_us-s">Home 7</a></li>
                  <li class="sub-menu__item"><a href="../Demo8/index.html" class="menu-link menu-link_us-s">Home 8</a></li>
                  <li class="sub-menu__item"><a href="../Demo9/index.html" class="menu-link menu-link_us-s">Home 9</a></li>
                  <li class="sub-menu__item"><a href="../Demo10/index.html" class="menu-link menu-link_us-s">Home 10</a></li>
                  <li class="sub-menu__item"><a href="../Demo11/index.html" class="menu-link menu-link_us-s">Home 11</a></li>
                  <li class="sub-menu__item"><a href="../Demo12/index.html" class="menu-link menu-link_us-s">Home 12</a></li>
                  <li class="sub-menu__item"><a href="../Demo13/index.html" class="menu-link menu-link_us-s">Home 13</a></li>
                  <li class="sub-menu__item"><a href="../Demo14/index.html" class="menu-link menu-link_us-s">Home 14</a></li>
                  <li class="sub-menu__item"><a href="../Demo15/index.html" class="menu-link menu-link_us-s">Home 15</a></li>
                  <li class="sub-menu__item"><a href="../Demo16/index.html" class="menu-link menu-link_us-s">Home 16</a></li>
                  <li class="sub-menu__item"><a href="../Demo17/index.html" class="menu-link menu-link_us-s">Home 17</a></li>
                  <li class="sub-menu__item"><a href="../Demo18/index.html" class="menu-link menu-link_us-s">Home 18</a></li>
                  <li class="sub-menu__item"><a href="../Demo19/index.html" class="menu-link menu-link_us-s">Home 19</a></li>
                  <li class="sub-menu__item"><a href="../Demo20/index.html" class="menu-link menu-link_us-s">Home 20</a></li>
                  <li class="sub-menu__item"><a href="../Demo21/index.html" class="menu-link menu-link_us-s">Home 21</a></li>
                  <li class="sub-menu__item"><a href="../Demo22/index.html" class="menu-link menu-link_us-s">Home 22</a></li>
                  <li class="sub-menu__item"><a href="../Demo23/index.html" class="menu-link menu-link_us-s">Home 23</a></li>
                </ul><!-- /.box-menu -->
              </div>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Shop<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-3"><svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>Shop</a>
                <div class="sub-menu__wrapper">
                  <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Shop List<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></a>
                  <div class="sub-menu__wrapper position-absolute top-0 start-100 w-100 d-none">
                    <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>Shop List</a>
                    <ul class="sub-menu__list list-unstyled">
                      <li class="sub-menu__item"><a href="./shop1.html" class="menu-link menu-link_us-s">Shop List V1</a></li>
                      <li class="sub-menu__item"><a href="./shop2.html" class="menu-link menu-link_us-s">Shop List V2</a></li>
                      <li class="sub-menu__item"><a href="./shop3.html" class="menu-link menu-link_us-s">Shop List V3</a></li>
                      <li class="sub-menu__item"><a href="./shop4.html" class="menu-link menu-link_us-s">Shop List V4</a></li>
                      <li class="sub-menu__item"><a href="./shop5.html" class="menu-link menu-link_us-s">Shop List V5</a></li>
                      <li class="sub-menu__item"><a href="./shop6.html" class="menu-link menu-link_us-s">Shop List V6</a></li>
                      <li class="sub-menu__item"><a href="./shop7.html" class="menu-link menu-link_us-s">Shop List V7</a></li>
                      <li class="sub-menu__item"><a href="./shop8.html" class="menu-link menu-link_us-s">Shop List V8</a></li>
                      <li class="sub-menu__item"><a href="./shop9.html" class="menu-link menu-link_us-s">Shop List V9</a></li>
                      <li class="sub-menu__item"><a href="./shop10.html" class="menu-link menu-link_us-s">Shop Item Style</a></li>
                      <li class="sub-menu__item"><a href="./shop11.html" class="menu-link menu-link_us-s">Horizontal Scroll</a></li>
                    </ul>
                  </div><!-- /.sub-menu__wrapper -->

                  <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Shop Detail<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></a>
                  <div class="sub-menu__wrapper position-absolute top-0 start-100 w-100 d-none">
                    <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>Shop Detail</a>
                    <ul class="sub-menu__list list-unstyled">
                      <li class="sub-menu__item"><a href="./product2_variable.html" class="menu-link menu-link_us-s">Shop Detail V1</a></li>
                      <li class="sub-menu__item"><a href="./product7_v2.html" class="menu-link menu-link_us-s">Shop Detail V2</a></li>
                      <li class="sub-menu__item"><a href="./product8_v3.html" class="menu-link menu-link_us-s">Shop Detail V3</a></li>
                      <li class="sub-menu__item"><a href="./product9_v4.html" class="menu-link menu-link_us-s">Shop Detail V4</a></li>
                      <li class="sub-menu__item"><a href="./product10_v5.html" class="menu-link menu-link_us-s">Shop Detail V5</a></li>
                      <li class="sub-menu__item"><a href="./product11_v6.html" class="menu-link menu-link_us-s">Shop Detail V6</a></li>
                      <li class="sub-menu__item"><a href="./product12_v7.html" class="menu-link menu-link_us-s">Shop Detail V7</a></li>
                      <li class="sub-menu__item"><a href="./product13_v8.html" class="menu-link menu-link_us-s">Shop Detail V8</a></li>
                      <li class="sub-menu__item"><a href="./product14_v9.html" class="menu-link menu-link_us-s">Shop Detail V9</a></li>
                      <li class="sub-menu__item"><a href="./product15_v10.html" class="menu-link menu-link_us-s">Shop Detail V10</a></li>
                      <li class="sub-menu__item"><a href="./product16_v11.html" class="menu-link menu-link_us-s">Shop Detail V11</a></li>
                    </ul>
                  </div><!-- /.sub-menu__wrapper -->

                  <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Other Pages<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></a>
                  <div class="sub-menu__wrapper position-absolute top-0 start-100 w-100 d-none">
                    <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>Other Pages</a>
                    <ul class="sub-menu__list list-unstyled">
                      <li class="sub-menu__item"><a href="./shop12.html" class="menu-link menu-link_us-s">Collection Grid</a></li>
                      <li class="sub-menu__item"><a href="./product1_simple.html" class="menu-link menu-link_us-s">Simple Product</a></li>
                      <li class="sub-menu__item"><a href="./product2_variable.html" class="menu-link menu-link_us-s">Variable Product</a></li>
                      <li class="sub-menu__item"><a href="./product3_external.html" class="menu-link menu-link_us-s">External Product</a></li>
                      <li class="sub-menu__item"><a href="./product4_grouped.html" class="menu-link menu-link_us-s">Grouped Product</a></li>
                      <li class="sub-menu__item"><a href="./product5_onsale.html" class="menu-link menu-link_us-s">On Sale</a></li>
                      <li class="sub-menu__item"><a href="./product6_outofstock.html" class="menu-link menu-link_us-s">Out of Stock</a></li>
                      <li class="sub-menu__item"><a href="./shop_cart.html" class="menu-link menu-link_us-s">Shopping Cart</a></li>
                      <li class="sub-menu__item"><a href="./shop_checkout.html" class="menu-link menu-link_us-s">Checkout</a></li>
                      <li class="sub-menu__item"><a href="./shop_order_complete.html" class="menu-link menu-link_us-s">Order Complete</a></li>
                      <li class="sub-menu__item"><a href="./shop_order_tracking.html" class="menu-link menu-link_us-s">Order Tracking</a></li>
                    </ul>
                  </div><!-- /.sub-menu__wrapper -->
                </div><!-- /.sub-menu__wrapper -->
              </div><!-- /.sub-menu -->
            </li>

            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Blog<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>Blog</a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="./blog_list1.html" class="menu-link menu-link_us-s">Blog V1</a></li>
                  <li class="sub-menu__item"><a href="./blog_list2.html" class="menu-link menu-link_us-s">Blog V2</a></li>
                  <li class="sub-menu__item"><a href="./blog_list3.html" class="menu-link menu-link_us-s">Blog V3</a></li>
                  <li class="sub-menu__item"><a href="./blog_single.html" class="menu-link menu-link_us-s">Blog Detail</a></li>
                </ul>
              </div>
            </li>

            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Pages<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>Pages</a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="./account_dashboard.html" class="menu-link menu-link_us-s">My Account</a></li>
                  <li class="sub-menu__item"><a href="./login_register.html" class="menu-link menu-link_us-s">Login / Register</a></li>
                  <li class="sub-menu__item"><a href="./store_location.html" class="menu-link menu-link_us-s">Store Locator</a></li>
                  <li class="sub-menu__item"><a href="./lookbook.html" class="menu-link menu-link_us-s">Lookbook</a></li>
                  <li class="sub-menu__item"><a href="./faq.html" class="menu-link menu-link_us-s">Faq</a></li>
                  <li class="sub-menu__item"><a href="./terms.html" class="menu-link menu-link_us-s">Terms</a></li>
                  <li class="sub-menu__item"><a href="./404.html" class="menu-link menu-link_us-s">404 Error</a></li>
                  <li class="sub-menu__item"><a href="./coming_soon.html" class="menu-link menu-link_us-s">Coming Soon</a></li>
                </ul>
              </div>
            </li>

            <li class="navigation__item">
              <a href="./about.html" class="navigation__link">About</a>
            </li>

            <li class="navigation__item">
              <a href="./contact.html" class="navigation__link">Contact</a>
            </li>
          </ul><!-- /.navigation__list -->
        </div><!-- /.overflow-hidden -->
      </div><!-- /.container -->

      <div class="border-top mt-auto pb-2">
        <div class="customer-links container mt-4 mb-2 pb-1">
          <svg class="d-inline-block align-middle" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_user"></use></svg>
          <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">My Account</span>
        </div>

        <div class="container d-flex align-items-center">
          <label for="footerSettingsLanguage_mobile" class="me-2 text-secondary">Language</label>
          <select id="footerSettingsLanguage_mobile" class="form-select form-select-sm bg-transparent border-0" aria-label="Default select example" name="store-language">
            <option class="footer-select__option" selected="">United Kingdom | English</option>
            <option class="footer-select__option" value="1">United States | English</option>
            <option class="footer-select__option" value="2">German</option>
            <option class="footer-select__option" value="3">French</option>
            <option class="footer-select__option" value="4">Swedish</option>
          </select>
        </div>

        <div class="container d-flex align-items-center">
          <label for="footerSettingsCurrency_mobile" class="me-2 text-secondary">Currency</label>
          <select id="footerSettingsCurrency_mobile" class="form-select form-select-sm bg-transparent border-0" aria-label="Default select example" name="store-language">
            <option selected="">$ USD</option>
            <option value="1">£ GBP</option>
            <option value="2">€ EURO</option>
          </select>
        </div>

        <ul class="container social-links list-unstyled d-flex flex-wrap mb-0">
          <li>
            <a href="https://www.facebook.com" class="footer__social-link d-block ps-0">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook"></use></svg>
            </a>
          </li>
          <li>
            <a href="https://twitter.com" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter"></use></svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram"></use></svg>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg"><path d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z"></path></svg>
            </a>
          </li>
          <li>
            <a href="https://www.pinterest.com" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest"></use></svg>
            </a>
          </li>
        </ul>
      </div>
    </nav><!-- /.navigation -->
  </div>
  <!-- /.header-mobile -->

  <!-- Header Type 5 -->
{{-- <header id="header" class="header header_sticky header-fullwidth">
    <div class="header-desk header-desk_type_5">
        <div class="logo">
            <a href="/">
                <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" alt="Nneels" class="logo__image d-block">
            </a>
        </div><!-- /.logo -->

        

        <nav class="navigation mx-auto mx-xxl-0">
          <ul class="navigation__list list-unstyled d-flex">
              <li class="navigation__item">
                  <a href="/" class="navigation__link">Men</a>
              </li>
              <li class="navigation__item">
                  <a href="{{route('website.nav.shop.index')}}" class="navigation__link">Women</a>
              </li>
              <li class="navigation__item">
                  <a href="{{route('website.nav.blog.index')}}" class="navigation__link">Kids</a>
              </li>
              <li class="navigation__item">
                  <a href="{{route('website.nav.about.index')}}" class="navigation__link">Accessories</a>
              </li>
              <li class="navigation__item">
              <a href="{{route('website.nav.contact.index')}}" class="navigation__link">Homeware</a>
              </li>
          </ul>
        </nav>

        <form action="#" method="GET" class="header-search search-field d-none d-xxl-flex">
          <button class="btn header-search__btn" type="submit">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
          </button>
          <input class="header-search__input w-100" type="text" name="search-keyword" placeholder="Search products...">
          <div class="hover-container position-relative">
              <div class="js-hover__open">
              <input class="header-search__category search-field__actor border-0 bg-white w-100" type="text" name="search-category" placeholder="All Category" readonly>
              </div>
              <div class="header-search__category-list js-hidden-content mt-2">
              <ul class="search-suggestion list-unstyled">
                  <li class="search-suggestion__item js-search-select">All Category</li>
                  <li class="search-suggestion__item js-search-select">Clothing</li>
                  <li class="search-suggestion__item js-search-select">Accessories</li>
                  <li class="search-suggestion__item js-search-select">Homeware</li>
              </ul>
              </div>
          </div>
        </form>

        <div class="header-tools d-flex align-items-center">
          <div class="header-tools__item hover-container d-block d-xxl-none">
              <div class="js-hover__open position-relative">
              <a class="js-search-popup search-field__actor" href="#">
                  <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
                  <i class="btn-icon btn-close-lg"></i>
              </a>
              </div>

              <div class="search-popup js-hidden-content">
              <form action="https://Nneels-html.flexkitux.com/Demo9/search_result.html" method="GET" class="search-field container">
                  <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
                  <div class="position-relative">
                  <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword" placeholder="Search products">
                  <button class="btn-icon search-popup__submit" type="submit">
                      <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
                  </button>
                  <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
                  </div>

                  <div class="search-popup__results">
                  <div class="sub-menu search-suggestion">
                      <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                      <ul class="sub-menu__list list-unstyled">
                      <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">New Arrivals</a></li>
                      <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Dresses</a></li>
                      <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a></li>
                      <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Footwear</a></li>
                      <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Sweatshirt</a></li>
                      </ul>
                  </div>

                  <div class="search-result row row-cols-5"></div>
                  </div>
              </form><!-- /.header-search -->
              </div><!-- /.search-popup -->
          </div>

          <div class="header-tools__item hover-container">
              <a class="header-tools__item js-open-aside" href="#" data-aside="customerForms">
                <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_user" />
                </svg>
              </a>
          </div>

          <a class="header-tools__item" href="account_wishlist.html">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </a>

          <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
              <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
          </a>

          <a class="header-tools__item" href="#" data-bs-toggle="modal" data-bs-target="#siteMap">
              <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
              <rect width="25" height="2"/><rect y="8" width="20" height="2"/><rect y="16" width="25" height="2"/>
              </svg>
          </a>
        </div>
    </div>
</header> --}}

<header id="header" class="header header_sticky header-fullwidth position-absolute">
  <div class="header-desk header-desk_type_1">
    <div class="logo">
      <a href="/">
        <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" alt="Uomo" class="logo__image d-block">
      </a>
    </div>

    <nav class="navigation">
      <ul class="navigation__list list-unstyled d-flex">
        <li class="navigation__item">
          <a href="#" class="navigation__link">Women</a>
          <ul class="default-menu list-unstyled" style="left: 305px;">
            <li class="sub-menu__item"><a href="../Demo1/index.html" class="menu-link menu-link_us-s">Long Pyjama Sets</a></li>
            <li class="sub-menu__item"><a href="../Demo2/index.html" class="menu-link menu-link_us-s">Short Pyjama Sets</a></li>
            <li class="sub-menu__item"><a href="../Demo3/index.html" class="menu-link menu-link_us-s">Cotton Night-Shirts</a></li>
            <li class="sub-menu__item"><a href="../Demo4/index.html" class="menu-link menu-link_us-s">Quilted Long Jackets</a></li>
            <li class="sub-menu__item"><a href="../Demo5/index.html" class="menu-link menu-link_us-s">Dresses</a></li>
            <li class="sub-menu__item"><a href="../Demo6/index.html" class="menu-link menu-link_us-s">Jumpsuits</a></li>
            <li class="sub-menu__item"><a href="../Demo6/index.html" class="menu-link menu-link_us-s">Cotton Robes</a></li>
          </ul>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link">Mens</a>
          <ul class="default-menu list-unstyled" style="left: 305px;">
            <li class="sub-menu__item"><a href="./blog_list1.html" class="menu-link menu-link_us-s">Long Pyjama Sets</a></li>
          </ul>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link">Kids</a>
          <ul class="default-menu list-unstyled" style="left: 374px;">
            <li class="sub-menu__item"><a href="./account_dashboard.html" class="menu-link menu-link_us-s">Kids Pyjama Sets</a></li>
            <li class="sub-menu__item"><a href="./login_register.html" class="menu-link menu-link_us-s">Quilted Jackets</a></li>
            <li class="sub-menu__item"><a href="./store_location.html" class="menu-link menu-link_us-s">Dresses</a></li>
            <li class="sub-menu__item"><a href="./lookbook.html" class="menu-link menu-link_us-s">Bathrobes</a></li>
          </ul><!-- /.box-menu -->
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link">Homeware</a>
          <ul class="default-menu list-unstyled" style="left: 374px;">
            <li class="sub-menu__item"><a href="./account_dashboard.html" class="menu-link menu-link_us-s">Handmade Linen Napkin</a></li>
            <li class="sub-menu__item"><a href="./login_register.html" class="menu-link menu-link_us-s">Bath Towel</a></li>
            <li class="sub-menu__item"><a href="./store_location.html" class="menu-link menu-link_us-s">Tea Towel</a></li>
          </ul><!-- /.box-menu -->
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link">Accessories</a>
          <ul class="default-menu list-unstyled" style="left: 374px;">
            <li class="sub-menu__item"><a href="./account_dashboard.html" class="menu-link menu-link_us-s">Necklace</a></li>
            <li class="sub-menu__item"><a href="./login_register.html" class="menu-link menu-link_us-s">Bracelets</a></li>
            <li class="sub-menu__item"><a href="./store_location.html" class="menu-link menu-link_us-s">Bags</a></li>
          </ul><!-- /.box-menu -->
        </li>
      </ul><!-- /.navigation__list -->
    </nav><!-- /.navigation -->

    <div class="header-tools d-flex align-items-center">

      <form action="./" method="GET" class="header-search search-field d-none d-xxl-flex mx-4">
        <input class="header-search__input w-100" type="text" name="search-keyword" placeholder="Search products...">
        <button class="btn header-search__btn" type="submit">
          <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search"></use></svg>
        </button>
      </form><!-- /.header-search -->

      <div class="header-tools__item hover-container d-block d-xxl-none">
        <div class="js-hover__open position-relative">
          <a class="js-search-popup search-field__actor" href="#">
            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search"></use></svg>
            <i class="btn-icon btn-close-lg"></i>
          </a>
        </div>

        <div class="search-popup js-hidden-content">
          <form action="./search_result.html" method="GET" class="search-field container">
            <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
            <div class="position-relative">
              <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword" placeholder="Search products">
              <button class="btn-icon search-popup__submit" type="submit">
                <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search"></use></svg>
              </button>
              <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
            </div>
          </form><!-- /.header-search -->
        </div><!-- /.search-popup -->
      </div><!-- /.header-tools__item hover-container -->

      <div class="header-tools__item hover-container">
        <a class="header-tools__item js-open-aside" href="#" data-aside="customerForms">
          <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_user"></use></svg>
        </a>
      </div>

      <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart"></use></svg>
        <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
      </a>
    </div>
  </div>
</header>
