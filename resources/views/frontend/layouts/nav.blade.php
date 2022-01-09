<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header -->
    <header>
        <div class="header-top primary-bg">
            <div class="container-fluid container-padding">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="header-top-offer">
                            <p>Exclusive Black Friday ! Offer</p>
                            <span class="coming-time" data-countdown="2020/3/20"></span>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="header-top-right">
                            <ul>
                                <li class="search-icon"><a href="#" data-toggle="modal" data-target="#search-modal"><i
                                            class="fas fa-search"></i></a></li>
                                <li class="shop-cart"><a href="/cart"><i class="fas fa-shopping-basket"></i><span
                                            class="cart-count"><span class="badge badge-danger">{{ Cart::getTotalQuantity() }}</span></span></a>
                                    <div class="menu-cart-widget">
                                        <ul>
                                            <li class="menu-cart-product-list">
                                                <div class="cart-product-thumb">
                                                    <a href="#"><img src="img/product/check-out01.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-product-content">
                                                    <h5><a href="#">Multi-Purpose HTML Template</a></h5>
                                                    <span>1 x $29.00</span>
                                                </div>
                                                <div class="cart-del">
                                                    <a href="#">X</a>
                                                </div>
                                            </li>
                                            <li class="menu-cart-product-list">
                                                <div class="cart-product-thumb">
                                                    <a href="#"><img src="img/product/check-out01.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-product-content">
                                                    <h5><a href="#">App Landing Sass HTML5 Template</a></h5>
                                                    <span>1 x $29.00</span>
                                                </div>
                                                <div class="cart-del">
                                                    <a href="#">X</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="cart-price fix mb-15">
                                            <span>Subtotal</span>
                                            <span>$ 58.00</span>
                                        </div>
                                        <div class="cart-checkout-btn">
                                            <a href="#" class="btn">check out</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="phone-call"><a href="tel:123456789"><i class="fas fa-headphones"></i> +12 245 326
                                        524</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area transparent-header">
            <div class="container-fluid container-padding">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="/"><img src="img/logo/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu" class="d-flex align-items-center justify-content-end">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li class="active"><a href="all-product.html">Product</a>
                                        <ul class="submenu">
                                            <li class="active"><a href="all-product.html">Our Product</a></li>
                                            <li><a href="product-with-sidebar.html">Product With Sidebar</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                            <li><a href="forums.html">Our Forums</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog Page</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <div class="header-btn">
                                    <a href="/login" class="btn"><i class="fas fa-user"></i> My Account</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
