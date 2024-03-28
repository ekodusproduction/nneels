  <div class="header-mobile header_sticky position-absolute">
    <div class="container d-flex align-items-center h-100">
      <a class="mobile-nav-activator d-block position-relative" href="#">
        <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_nav"></use></svg>
        <span class="btn-close-lg position-absolute top-0 start-0 w-100"></span>
      </a>

      <div class="logo">
        <a href="/">
          <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" alt="Nneels" class="logo__image d-block">
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
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Women
                <svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm"></use>
                </svg>
              </a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2">
                  <svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_sm"></use>
                  </svg>Women
                </a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="../Demo1/index.html" class="menu-link menu-link_us-s">Long Pyjama Sets</a></li>
                  <li class="sub-menu__item"><a href="../Demo2/index.html" class="menu-link menu-link_us-s">Short Pyjama Sets</a></li>
                  <li class="sub-menu__item"><a href="../Demo3/index.html" class="menu-link menu-link_us-s">Cotton Night-Shirts</a></li>
                  <li class="sub-menu__item"><a href="../Demo4/index.html" class="menu-link menu-link_us-s">Quilted Long Jackets</a></li>
                  <li class="sub-menu__item"><a href="../Demo5/index.html" class="menu-link menu-link_us-s">Dresses</a></li>
                  <li class="sub-menu__item"><a href="../Demo6/index.html" class="menu-link menu-link_us-s">Jumpsuits</a></li>
                  <li class="sub-menu__item"><a href="../Demo6/index.html" class="menu-link menu-link_us-s">Cotton Robes</a></li>
                </ul><!-- /.box-menu -->
              </div>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Men
                <svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm"></use>
                </svg>
              </a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2">
                  <svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_sm"></use>
                  </svg>Men
                </a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="./blog_list1.html" class="menu-link menu-link_us-s">Long Pyjama Sets</a></li>
                </ul><!-- /.box-menu -->
              </div>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Kids
                <svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm"></use>
                </svg>
              </a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2">
                  <svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_sm"></use>
                  </svg>Kids
                </a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="./account_dashboard.html" class="menu-link menu-link_us-s">Kids Pyjama Sets</a></li>
                  <li class="sub-menu__item"><a href="./login_register.html" class="menu-link menu-link_us-s">Quilted Jackets</a></li>
                  <li class="sub-menu__item"><a href="./store_location.html" class="menu-link menu-link_us-s">Dresses</a></li>
                  <li class="sub-menu__item"><a href="./lookbook.html" class="menu-link menu-link_us-s">Bathrobes</a></li>
                </ul>
              </div>
            </li>

            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">
                Homeware<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm"></use>
                </svg>
              </a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2">
                  <svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_sm"></use>
                  </svg>Homeware
                </a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="./account_dashboard.html" class="menu-link menu-link_us-s">Handmade Linen Napkin</a></li>
                  <li class="sub-menu__item"><a href="./login_register.html" class="menu-link menu-link_us-s">Bath Towel</a></li>
                  <li class="sub-menu__item"><a href="./store_location.html" class="menu-link menu-link_us-s">Tea Towel</a></li>
                </ul>
              </div>
            </li>

            <li class="navigation__item">
              <a href="#" class="navigation__link js-nav-right d-flex align-items-center">
                Accessories<svg class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm"></use>
                </svg>
              </a>
              <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2">
                  <svg class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_sm"></use>
                  </svg>Accessories
                </a>
                <ul class="list-unstyled">
                  <li class="sub-menu__item"><a href="./account_dashboard.html" class="menu-link menu-link_us-s">Necklace</a></li>
                  <li class="sub-menu__item"><a href="./login_register.html" class="menu-link menu-link_us-s">Bracelets</a></li>
                  <li class="sub-menu__item"><a href="./store_location.html" class="menu-link menu-link_us-s">Bags</a></li>
                </ul>
              </div>
            </li>
          </ul><!-- /.navigation__list -->
        </div><!-- /.overflow-hidden -->
      </div><!-- /.container -->

      <div class="border-top mt-auto pb-2">
        <div class="customer-links container mt-4 mb-2 pb-1">
          <svg class="d-inline-block align-middle" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_user"></use></svg>
          <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">My Account</span>
        </div>

        <ul class="container social-links list-unstyled d-flex flex-wrap mb-0">
          <li>
            <a href="https://www.facebook.com/nneelsfashionandjewelry" class="footer__social-link d-block ps-0" target="_blank">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook"></use></svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/nneels777/" class="footer__social-link d-block" target="_blank">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram"></use></svg>
            </a>
          </li>
        </ul>
      </div>
    </nav><!-- /.navigation -->
  </div>
  <!-- /.header-mobile -->

<header id="header" class="header header_sticky header-fullwidth position-absolute">
  <div class="header-desk header-desk_type_1">
    <div class="logo">
      <a href="/">
        <img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" alt="Nneels" class="logo__image d-block">
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
          <a href="#" class="navigation__link">Men</a>
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
