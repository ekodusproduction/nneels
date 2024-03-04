<div class="modal fade" id="siteMap" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="sitemap d-flex">
            <div class="w-50 d-none d-lg-block">
                <img loading="lazy" src="{{asset('images/nav-bg.jpg')}}" alt="Site map" class="sitemap__bg">
            </div><!-- /.sitemap__bg w-50 d-none d-lg-block -->
            <div class="sitemap__links w-50 flex-grow-1">
                <div class="modal-content">
                    <div class="modal-header">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active rounded-1 text-uppercase" id="clothing-tab"
                                    data-bs-toggle="pill" href="#clothing-item" role="tab"
                                    aria-controls="clothing-item" aria-selected="true">CLOTHING</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link rounded-1 text-uppercase" id="accessories-tab" data-bs-toggle="pill"
                                    href="#accessories-item" role="tab" aria-controls="accessories-item"
                                    aria-selected="false">ACCESSORIES</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link rounded-1 text-uppercase" id="homeware-tab" data-bs-toggle="pill"
                                    href="#homeware-item" role="tab" aria-controls="homeware-item"
                                    aria-selected="false">HOMEWARE</a>
                            </li>
                        </ul>
                        <button type="button" class="btn-close-lg" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="tab-content col-12" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="clothing-item" role="tabpanel" aria-labelledby="clothing-tab">
                                <div class="row">
                                    <ul class="nav nav-tabs list-unstyled col-5 d-block" id="myTab" role="tablist">
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline active" id="sleepware-tab"
                                                data-bs-toggle="tab" href="#sleepware-item" role="tab"
                                                aria-controls="sleepware-item" aria-selected="true"><span
                                                    class="rline-content">SLEEPWEAR</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" id="womensware-tab" data-bs-toggle="tab"
                                                href="#womensware-item" role="tab" aria-controls="womensware-item"
                                                aria-selected="false"><span class="rline-content">WOMENSWEAR</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" id="mens-tab" data-bs-toggle="tab"
                                                href="#mens-item" role="tab" aria-controls="mens-item"
                                                aria-selected="false"><span class="rline-content">MENS</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" id="kids-tab" data-bs-toggle="tab"
                                                href="#kids-item" role="tab" aria-controls="kids-item"
                                                aria-selected="false"><span class="rline-content">KIDS</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content col-7" id="myTabContent">
                                        <div class="tab-pane fade show active" id="sleepware-item" role="tabpanel"
                                            aria-labelledby="sleepware-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Long Pyjama Sets</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Short PJ Sets</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Cotton Nightshirts</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Cotton Robe</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="womensware-item" role="tabpanel"
                                            aria-labelledby="tab-item-2-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Quilted long Jacket</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Dress</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Jumpsuit</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="mens-item" role="tabpanel"
                                            aria-labelledby="tab-item-3-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="about.html" class="menu-link menu-link_us-s">Long Pyjama Set</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="kids-item" role="tabpanel"
                                            aria-labelledby="tab-item-3-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="about.html" class="menu-link menu-link_us-s">Kids Pajama Set</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#"
                                                        class="menu-link menu-link_us-s">Quilted Jacket</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Dress</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Bathrobe</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="tab-pane fade" id="accessories-item" role="tabpanel" aria-labelledby="accessories-tab">
                                <div class="row">
                                    <ul class="nav nav-tabs list-unstyled col-5 d-block" id="myAccessoriesTab" role="tablist">
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" id="accessories-inner-tab"
                                                data-bs-toggle="tab" href="#accessories-inner-item" role="tab"
                                                aria-controls="accessories-inner-item" aria-selected="true"><span
                                                    class="rline-content">Accessories</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content col-7" id="myAccessoriesTabContent">
                                        <div class="tab-pane fade" id="accessories-inner-item" role="tabpanel"
                                            aria-labelledby="sleepware-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Necklace</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Bracelets</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Bags</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="tab-pane fade" id="homeware-item" role="tabpanel" aria-labelledby="homeware-tab">
                                <div class="row">
                                    <ul class="nav nav-tabs list-unstyled col-5 d-block" id="myHomewareTab" role="tablist">
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" id="homeware-inner-tab"
                                                data-bs-toggle="tab" href="#homeware-inner-item" role="tab"
                                                aria-controls="homeware-inner-item" aria-selected="true"><span
                                                    class="rline-content">Homeware</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content col-7" id="myHomewareTabContent">
                                        <div class="tab-pane fade" id="homeware-inner-item" role="tabpanel"
                                            aria-labelledby="sleepware-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Handmade Linen Napkin</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Bath Towel</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Tea Towel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.sitemap__links w-50 flex-grow-1 -->
        </div>
    </div><!-- /.modal-dialog modal-fullscreen -->
</div>
