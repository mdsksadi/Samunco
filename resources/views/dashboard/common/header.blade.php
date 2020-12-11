<header class="header">
    <div class="header-middle">
        <div class="container">
            <div class="header-left col-lg-2 w-auto pl-0 mr-3">
                <button class="mobile-menu-toggler" type="button">
                    <i class="icon-menu"></i>
                </button>
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('/public/dashboard-template/images/logo.png') }}" alt="Porto Logo">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right w-lg-max">
                <div class="header-icon header-search header-search-inline header-search-category mr-lg-5 pr-lg-4 w-lg-max">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                            
                            <button class="btn icon-search-3" type="submit"></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->

                <div class="header-contact d-none d-lg-flex pl-1 mr-xl-5 pr-4">
                    <img alt="phone" src="{{ asset('/public/dashboard-template/images/phone.png') }}" width="30" height="30" class="pb-1">
                    <h6>Call us now<a href="tel:#" class="text-dark font1">+8801891-995322</a></h6>
                </div><!-- End .header-contact -->

                <a href="login.html" class="header-icon pl-1"><i class="icon-user-2"></i></a>

            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{
        'move': [
            {
                'item': '.header-search',
                'position': 'end',
                'clone': false
            },
            {
                'item': '.header-icon:not(.header-search)',
                'position': 'end',
                'clone': false
            },
            {
                'item': '.cart-dropdown',
                'position': 'end',
                'clone': false
            }
        ],
        'moveTo': '.container',
        'changes': [
            {
                'item': '.header-search',
                'removeClass': 'header-search-inline w-lg-max mr-lg-5 pr-lg-4',
                'addClass': 'header-search-popup ml-auto'
            },
            {
                'item': '.main-nav',
                'removeClass': 'w-100'
            },
            {
                'item': '.logo',
                'removeClass': 'd-none'
            },
            {
                'item': '.float-right',
                'addClass': 'd-none'
            }
        ]
    }">
        <div class="container">
            <a href="{{ url('/') }}" class="logo logo-light mr-3 pr-xl-3 d-none">
                <img src="{{ asset('/public/dashboard-template/images/logo-light.png') }}" alt="Porto Logo">
            </a>
            <nav class="main-nav w-100">
                <ul class="menu">
                    <li class="active">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    
                    <li>
                        <a href="product.html">Products</a>
                        <div class="megamenu megamenu-fixed-width">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="#" class="nolink">Variations 1</a>
                                    <ul class="submenu">
                                        <li><a href="product.html">Horizontal Thumbs</a></li>
                                        <li><a href="product-full-width.html">Vertical Thumbnails</a></li>
                                        <li><a href="product.html">Inner Zoom</a></li>
                                        <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                        <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                    </ul>
                                </div><!-- End .col-lg-4 -->
                                <div class="col-lg-3">
                                    <a href="#" class="nolink">Variations 2</a>
                                    <ul class="submenu">
                                        <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                        <li><a href="product-simple.html">Simple Product</a></li>
                                        <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                    </ul>
                                </div><!-- End .col-lg-4 -->
                                <div class="col-lg-3">
                                    <a href="#" class="nolink">Product Layout Types</a>
                                    <ul class="submenu">
                                        <li><a href="product.html">Default Layout</a></li>
                                        <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                        <li><a href="product-full-width.html">Full Width Layout</a></li>
                                        <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                        <li><a href="product-sticky-both.html">Sticky Both Side Info</a></li>
                                        <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                    </ul>
                                </div><!-- End .col-lg-4 -->

                                <div class="col-lg-3 p-0">
                                    <img src="{{ asset('/public/dashboard-template/images/menu-bg.png') }}" alt="Menu banner" class="product-promo">
                                </div><!-- End .col-lg-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu -->
                    </li>
                   
                    <li>
                        <a href="#">Services</a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dashboard</a>
                                <ul>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Projects</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                    <li class="float-right bg-dark2"><a class="text-white" href="https://1.envato.market/DdLk5" target="_blank">News</a></li>
                    <li class="float-right"><a class="text-white" href="#">Career</a></li>
                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
       
