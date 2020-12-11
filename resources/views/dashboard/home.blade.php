@extends('dashboard.master')
@section('body')
<main class="main">
    <div class="home-top-container mt-lg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 mb-2">
                    <div class="home-slider owl-carousel owl-theme owl-carousel-lazy h-100" data-owl-options="{
                        'dots': true,
                        'nav': false,
                        'loop': false
                    }">
                        <div class="home-slide home-slide1 banner banner-md-vw h-100">
                            <div class="owl-lazy slide-bg h-100" src="{{ asset('/public/dashboard-template/images/lazy.png') }}" data-src="{{ asset('/public/dashboard-template/images/slider/slide-1.jpg') }}" alt="slider image" width="835" height="435"></div>

                            <div class="banner-layer banner-layer-middle">
                                <h4 class="text-white">Find the Boundaries. Push Through!</h4>
                                <h2 class="text-white m-b-1">Summer Sale</h2>
                                <h3 class="text-white text-uppercase m-b-3">70% Off</h3>
                                <h5 class="text-white text-uppercase d-inline-block mb-1 pb-1 ls-n-20 align-text-bottom">Starting At <b class="coupon-sale-text bg-secondary text-white d-inline-block">$<em>199</em>99</b></h5>
                                <a href="category.html" class="btn btn-primary btn-md ls-10 align-bottom">Shop Now!</a>
                            </div><!-- End .banner-layer -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide home-slide2 banner banner-md-vw h-100">
                            <div class="owl-lazy slide-bg h-100" src="{{ asset('/public/dashboard-template/images/lazy.png') }}" data-src="{{ asset('/public/dashboard-template/images/slider/slide-2.jpg') }}" alt="slider image" width="835" height="435"></div>

                            <div class="banner-layer banner-layer-middle text-uppercase">
                                <h4 class="text-white m-b-2">Over 200 products with discounts</h4>
                                <h2 class="text-white m-b-3">Great Deals</h2>
                                <h5 class="text-white d-inline-block mb-0 align-top mr-4 pt-2">Starting At <b class="ml-2 mr-3">$<em>299</em>99</b></h5>
                                <a href="category.html" class="btn btn-primary btn-md ls-10">Get Yours!</a>
                            </div><!-- End .banner-layer -->
                        </div><!-- End .home-slide -->
                    </div><!-- End .home-slider -->
                </div><!-- End .col-lg-9 -->

                <div class="col-lg-3 top-banners">
                    <div class="row">
                        <div class="col-md-4 col-lg-12">
                            <div class="banner banner1 banner-md-vw-large banner-sm-vw-large mb-2">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/banners/banner-1.jpg') }}" alt="banner">
                                </figure>
                                <div class="banner-layer banner-layer-middle text-right">
                                    <h3 class="m-b-2">Handbags</h3>
                                    <h4 class="m-b-4 text-secondary text-uppercase">Starting at $99</h4>
                                    <a href="#" class="text-dark text-uppercase ls-10 py-1">Shop Now</a>
                                </div>
                            </div><!-- End .banner -->
                        </div>
                        <div class="col-md-4 col-lg-12">
                            <div class="banner banner2 banner-md-vw-large banner-sm-vw-large text-uppercase mb-2">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/banners/banner-2.jpg') }}" alt="banner">
                                </figure>
                                <div class="banner-layer banner-layer-middle text-center">
                                    <h3 class="m-b-1 text-primary">Deal Promos</h3>
                                    <h4 class="mb-1 pb-1 text-body">Starting at $99</h4>
                                    <a href="#" class="text-dark ls-10 py-1">Shop Now</a>
                                </div>
                            </div><!-- End .banner -->
                        </div>
                        <div class="col-md-4 col-lg-12">
                            <div class="banner banner3 banner-md-vw-large banner-sm-vw-large mb-2">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/banners/banner-3.jpg') }}" alt="banner" style="object-position: left;">
                                </figure>
                                <div class="banner-layer banner-layer-middle">
                                    <h3 class="m-b-2">Black Jackets</h3>
                                    <h4 class="m-b-4 text-white text-uppercase">Starting at $99</h4>
                                    <a href="#" class="text-dark text-uppercase ls-10 py-1">Shop Now</a>
                                </div>
                            </div><!-- End .banner -->
                        </div>
                    </div>
                </div><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .home-top-container -->

    <div class="info-boxes-container bg-dark2 mb-4">
        <div class="container">
            <div class="info-boxes-slider owl-carousel owl-theme" data-owl-options="{
                'dots': false,
                'margin': 20,
                'loop': false,
                'responsive': {
                    '576': {
                        'items': 2
                    },
                    '992': {
                        'items': 3
                    }
                }
            }">
                <div class="info-box text-white info-box-icon-left">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content pt-1">
                        <h4>FREE SHIPPING & RETURN</h4>
                        <p>Free Shipping on All Orders Over $99.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box text-white info-box-icon-left">
                    <i class="icon-money"></i>

                    <div class="info-box-content pt-1">
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>100% Money Back Guarantee</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box text-white info-box-icon-left">
                    <i class="icon-support"></i>

                    <div class="info-box-content pt-1">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p>Lorem Ipsum Dolor Sit Amet.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->
            </div><!-- End .info-boxes-slider -->
        </div><!-- End .container -->
    </div><!-- End .info-boxes-container -->

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="home-product-tabs">
                    <ul class="nav nav-tabs mb-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="featured-products-tab" data-toggle="tab" href="#featured-products" role="tab" aria-controls="featured-products" aria-selected="true">Featured Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="latest-products-tab" data-toggle="tab" href="#latest-products" role="tab" aria-controls="latest-products" aria-selected="false">Latest Products</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
                            <div class="row">
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-10.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-sale">-30%</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-11.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-hot">HOT</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-12.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-sale">-20%</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top">5.00</span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-1.jpg') }}">
                                            </a>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top">5.00</span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-2.jpg') }}">
                                            </a>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-3.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-hot">HOT</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-4.jpg') }}">
                                            </a>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-5.jpg') }}">
                                            </a>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-6.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-hot">HOT</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .tab-pane -->
                        <div class="tab-pane fade" id="latest-products" role="tabpanel" aria-labelledby="latest-products-tab">
                            <div class="row">
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-1.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-sale">-30%</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top">5.00</span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-2.jpg') }}">
                                            </a>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-3.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-hot">HOT</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-4.jpg') }}">
                                            </a>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-5.jpg') }}">
                                            </a>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-6.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-hot">HOT</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-10.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-sale">-30%</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-11.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-hot">HOT</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ asset('/public/dashboard-template/images/products/product-12.jpg') }}">
                                            </a>
                                            <div class="label-group">
                                                <span class="product-label label-sale">-20%</span>
                                            </div>
                                            <div class="btn-icon-group">
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="category.html" class="product-category">category</a>
                                                </div>
                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">Product Short Name</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top">5.00</span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .home-product-tabs -->

                <div class="banners-group">
                    <div class="row m-b-3">
                        <div class="col-md-6 w-md-44 mb-2">
                            <div class="banner banner4 banner-md-vw-large">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/banners/banner-4.jpg') }}" alt="banner">
                                </figure>
                                <div class="banner-layer banner-layer-middle banner-layer-space">
                                    <h3 class="m-b-2 ls-n-20 text-uppercase">Flash Sale</h3>
                                    <h5 class="m-b-2 ls-n-20 text-uppercase">Cool Sunglasses</h5>
                                    <h4 class="m-b-3 ls-n-20 text-white">Only <sup>$</sup>199<sup>99</sup></h4>
                                    <a href="#" class="btn btn-md btn-light ls-10">View Sale</a>
                                </div>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6 w-md-55 mb-2">
                            <div class="banner banner5 banner-md-vw-large">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/banners/banner-5.jpg') }}" alt="banner">
                                </figure>
                                
                                <div class="banner-layer banner-layer-img banner-layer-middle banner-layer-space banner-layer-right">
                                    <img src="{{ asset('/public/dashboard-template/images/banners/banner-brand.png') }}" alt="brand">
                                </div>

                                <div class="banner-layer banner-layer-middle banner-layer-space">
                                    <h3 class="m-b-1 text-primary">Exclusive Shoes</h3>
                                    <h4 class="m-b-3 text-primary">50% OFF</h4>
                                    <a href="#" class="btn btn-md btn-dark ls-10">View Sale</a>
                                </div>
                            </div>
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .banners-group -->

                <div class="product-widgets">
                    <div class="row m-b-2">
                        <div class="col-lg-4 col-sm-6 pb-5">
                            <h4 class="section-sub-title text-uppercase m-b-3">Top Rated Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-1.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-2.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-3.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pb-5">
                            <h4 class="section-sub-title text-uppercase m-b-3">Best Selling Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-4.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-5.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-6.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pb-5">
                            <h4 class="section-sub-title text-uppercase m-b-3">Latest Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-7.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-8.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{ asset('/public/dashboard-template/images/products/small/product-9.jpg') }}" width="95" height="95">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price">$59.00</del>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                    </div><!-- End .row -->
                </div><!-- End .product-widgets -->
            </div><!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
            <aside class="sidebar-home col-lg-3 mobile-sidebar">
                <div class="side-menu-wrapper mb-3">
                    <h2 class="side-menu-title ls-n-25">Browse Categories</h2>

                    <ul class="side-menu pt-2 mb-2 px-3 mx-3">
                        <li>
                            <a href="category.html">Fashion</a> 
                            <span class="side-menu-toggle"></span>

                            <ul>
                                <li><a href="#">Women Clothes</a></li>
                                <li><a href="#">Men Clothes</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html">Electronics </a>
                            <span class="side-menu-toggle"></span>

                            <ul>
                                <li><a href="#">Computers</a></li>
                                <li><a href="#">Mobile Phones</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Tablets</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html">Gifts</a>
                        </li>
                        <li>
                            <a href="category.html">Home & Garden</a>
                        </li>
                        <li>
                            <a href="category.html">Music</a>
                        </li>
                        <li>
                            <a href="category.html">Motors</a>
                            <span class="side-menu-toggle"></span>

                            <ul>
                                <li><a href="#">Sub Category</a></li>
                                <li><a href="#">Sub Category</a></li>
                                <li><a href="#">Sub Category</a></li>
                                <li><a href="#">Sub Category</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html">Clothes</a>
                            <span class="side-menu-toggle"></span>

                            <ul>
                                <li><a href="#">Sub Category</a></li>
                                <li><a href="#">Sub Category</a></li>
                                <li><a href="#">Sub Category</a></li>
                                <li><a href="#">Sub Category</a></li>
                            </ul>
                        </li>
                    </ul><!-- End .side-menu -->
                </div>

                <div class="widget widget-banners px-5 pb-3 text-center">
                    <div class="owl-carousel owl-theme dots-small">
                        <div class="banner d-flex flex-column align-items-center">
                            <h3 class="badge-sale bg-secondary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                            <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-primary btn-md font1">View Sale</a>
                        </div><!-- End .banner -->

                        <div class="banner d-flex flex-column align-items-center">
                            <h3 class="badge-sale bg-secondary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                            <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-primary btn-md font1">View Sale</a>
                        </div><!-- End .banner -->

                        <div class="banner d-flex flex-column align-items-center">
                            <h3 class="badge-sale bg-secondary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                            <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-primary btn-md font1">View Sale</a>
                        </div><!-- End .banner -->
                    </div><!-- End .banner-slider -->
                </div><!-- End .widget -->

                <div class="widget widget-newsletters bg-gray text-center">
                    <h3 class="widget-title text-uppercase">Subscribe Newsletter</h3>
                    <p class="mb-2">Get all the latest information on Events, Sales and Offers. </p>
                    <form action="#">
                        <div class="form-group position-relative sicon-envolope-letter">
                            <input type="email" class="form-control" name="newsletter-email" placeholder="Email address">
                        </div><!-- Endd .form-group -->
                        <input type="submit" class="btn btn-primary btn-md" value="Subscribe">
                    </form>
                </div><!-- End .widget -->

                <div class="widget widget-testimonials">
                    <div class="owl-carousel owl-theme dots-left dots-small">
                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/clients/client-1.jpg') }}" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">john Smith</h4>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->

                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/clients/client-2.jpg') }}" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">Dae Smith</h4>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->

                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="{{ asset('/public/dashboard-template/images/clients/client-3.jpg') }}" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">John Doe</h4>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->
                    </div><!-- End .testimonials-slider -->
                </div><!-- End .widget -->

                <div class="widget widget-posts post-date-in-media">
                    <div class="owl-carousel owl-theme dots-left dots-m-0" data-owl-options="{
                        'margin': 20
                    }">
                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="{{ asset('/public/dashboard-template/images/blog/home/post-1.jpg') }}" alt="Post">
                                </a>
                                <div class="post-date">
                                    <span class="day">29</span>
                                    <span class="month">Jun</span>
                                </div><!-- End .post-date -->
                            </div><!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title m-b-2">
                                    <a href="single.html">Fashion Trends</a>
                                </h2>

                                <div class="post-content">
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

                                    <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                                </div><!-- End .post-content -->
                            </div><!-- End .post-body -->
                        </article>

                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="{{ asset('/public/dashboard-template/images/blog/home/post-2.jpg') }}" alt="Post">
                                </a>
                                <div class="post-date">
                                    <span class="day">29</span>
                                    <span class="month">Jun</span>
                                </div><!-- End .post-date -->
                            </div><!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title m-b-2">
                                    <a href="single.html">Fashion Trends</a>
                                </h2>

                                <div class="post-content">
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

                                    <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                                </div><!-- End .post-content -->
                            </div><!-- End .post-body -->
                        </article>

                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="{{ asset('/public/dashboard-template/images/blog/home/post-3.jpg') }}" alt="Post">
                                </a>
                                <div class="post-date">
                                    <span class="day">29</span>
                                    <span class="month">Jun</span>
                                </div><!-- End .post-date -->
                            </div><!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title m-b-2">
                                    <a href="single.html">Fashion Trends</a>
                                </h2>

                                <div class="post-content">
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

                                    <a href="single.html" class="read-more">read more <i class="icon-right-open"></i></a>
                                </div><!-- End .post-content -->
                            </div><!-- End .post-body -->
                        </article>
                    </div><!-- End .posts-slider -->
                </div><!-- End .widget -->
            </aside>
        </div><!-- End .row -->
    </div><!-- End .container -->
</main><!-- End .main -->
@endsection