@extends('layouts.app')
@section('frontend_content')
    <!-- slider area satrt -->
    <section class="slider__area pt-30 grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 custom-col-2 d-none d-xl-block">
                    <div class="cat__menu-wrapper">
                        <div class="cat-toggle">
                            <button type="button" class="cat-toggle-btn"><i class="fas fa-bars"></i> Shop by
                                department</button>
                            <div class="cat__menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="#">All Categories <i class="far fa-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                @foreach ($cats as $item)
                                                    <li><a href="">{{ $item->category_name }}</a>
                                                        @php
                                                            $sub_cats = DB::table('subcategories')
                                                                ->where('category_id', $item->id)
                                                                ->get();
                                                        @endphp
                                                        <ul class="mega-item">
                                                            @foreach ($sub_cats as $data)
                                                                <li><a
                                                                        href="product-details.html">{{ $data->sub_category_name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="product.html">Best Seller Products
                                                <span class="cat-label">hot!</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product.html">Top 10 Offers
                                                <span class="cat-label green">new!</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product.html">New Arrivals <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="product.html">Home Appliances</a></li>
                                                <li><a href="product.html">Technology</a>
                                                    <ul class="submenu">
                                                        <li><a href="product.html">Storage Devices</a></li>
                                                        <li><a href="product.html">Monitors</a></li>
                                                        <li><a href="product.html">Laptops</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">Office Equipments</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product.html">Phones & Tablets</a></li>
                                        <li><a href="product.html">Electronics & Digital</a></li>
                                        <li class="d-laptop-none"><a href="product.html">Fashion & Clothings</a></li>
                                        <li class="d-laptop-none"><a href="product.html">Jewelry & Watches</a></li>
                                        <li><a href="product.html">Health & Beauty</a></li>
                                        <li><a href="product.html">TV & Audio</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 custom-col-10 col-lg-12">
                    <div class="slider__inner slider-active">
                        @foreach ($slider as $item)
                            <div class="single-slider w-img">
                                <a href="{{$item->link}}">
                                <img src="{{ asset($item->image) }}" class="slide_product"
                                    alt="{{ asset($item->image) }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- features area start -->
    <section class="features__area grey-bg-2 pt-30 pb-20 pl-10 pr-10">
        <div class="container">
            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                <div class="col">
                    <div class="features__item d-flex white-bg">
                        <div class="features__icon mr-15">
                            <i class="fal fa-rocket-launch"></i>
                        </div>
                        <div class="features__content">
                            <h6>Free Shipping</h6>
                            <p>Free Shipping On All Order</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="features__item d-flex white-bg">
                        <div class="features__icon mr-15">
                            <i class="fal fa-sync"></i>
                        </div>
                        <div class="features__content">
                            <h6>Money Guarantee</h6>
                            <p>30 Day Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="features__item d-flex white-bg">
                        <div class="features__icon mr-15">
                            <i class="fal fa-user-headset"></i>
                        </div>
                        <div class="features__content">
                            <h6>Online Support 24/7</h6>
                            <p>Technical Support Stand By</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="features__item d-flex white-bg">
                        <div class="features__icon mr-15">
                            <i class="fal fa-thumbs-up"></i>
                        </div>
                        <div class="features__content">
                            <h6>Secure Payment</h6>
                            <p>All Payment Method are accepted</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="features__item features__item-last d-flex white-bg">
                        <div class="features__icon mr-15">
                            <i class="fal fa-badge-dollar"></i>
                        </div>
                        <div class="features__content">
                            <h6>Member Discount</h6>
                            <p>Upto 40% Discount All Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features area end -->

    <!-- banner area start -->
    <section class="banner__area pt-20 grey-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item w-img mb-30">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-1.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item mb-30 w-img">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-2.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item mb-30 w-img">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-3.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- deal off the day area start -->
    <section class="deal__area pb-45 pt-25 grey-bg ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__head d-md-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>Deals<span>Of The Day</span></h3>
                        </div>
                    </div>
                    <div class="product__deal-3 t-nav owl-carousel">
                        @foreach ($today_deal as $item)
                        <div class="product__deal-item">
                            <div class="product__item white-bg product__sale mb-30">
                                <div class="row">
                                    <div class="col-xl-6  col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__thumb product__thumb-big p-relative">
                                            <a href="{{route('product.product_details',$item->id)}}" class="w-img">
                                                <img src="{{ asset($item->product_thumbnail) }}"
                                                    alt="product" />
                                                <img class="second-img"
                                                    src="{{ asset($item->product_thumbnail) }}"
                                                    alt="product" />
                                            </a>
                                            <div class="product__offer">
                                                <span class="discount">-34%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__content product__content-2">
                                            <h6 class="product-name product__deal-name">
                                                <a class="product-item-link" href=" {{ $item->id }}"> 
                                                    {{ $item->product_name }}</a>
                                            </h6>
                                            <div class="rating rating-2">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            @if ($item->descount_price == null)
                                            <span class="new mb-5">${{ $item->selling_price }}</span>
                                          @else
                                            <div >
                                              <span class="price-old mb-5">${{ $item->descount_price}}</span> <del>${{ $item->selling_price}}</del>
                                            </div>
                                          @endif

                                            {{-- <p class="mt-10">{!! substr($item->product_description, 0, 20) !!}...</p> --}}
                                            <div class="product__countdown">
                                                <h4>Hurry Up! Offer ends in:</h4>
                                                <div class="countdown-wrapper">
                                                    <div data-countdown data-date="Dec 02 2022 20:20:22">
                                                        <ul>
                                                            <li>
                                                                <span data-days>0</span>
                                                                <p>Days</p>
                                                            </li>
                                                            <li>
                                                                <span data-hours>0</span>
                                                                <p>Hours</p>
                                                            </li>
                                                            <li>
                                                                <span data-minutes>0</span>
                                                                <p>mins</p>
                                                            </li>
                                                            <li>
                                                                <span data-seconds>0</span>
                                                                <p>secs</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deal off the day area end -->

    <!-- onsale product area start -->
    <section class="onsell__area pb-20 grey-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>On Sale <span>Products</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="sale__slider-3 owl-carousel t-nav">
                        @foreach ($sales as $item)
                        <div class="product__item-wrapper">
                            <div class="product__item white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset($item->product_thumbnail) }}"
                                            alt="product">
                                        <img class="second-img"
                                            src="{{ asset($item->product_thumbnail) }}" alt="product">
                                    </a>
                                </div>
                                <div class="product__content content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="{{route('product.product_details', $item->product_slug)}}">{{$item->product_name}}</a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    @if ($item->descount_price == null)
                                    <span class="new mb-5">${{ $item->selling_price }}</span>
                                  @else
                                    <div >
                                      <span class="price-old mb-5">${{ $item->descount_price}}</span> <del>${{ $item->selling_price}}</del>
                                    </div>
                                  @endif
                                </div>
                            </div>
                            <div class="product__item white-bg d-flex mb-20">
                                <div class="product__thumb product__thumb-sale p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset($item->product_thumbnail) }}"
                                            alt="product">
                                        <img class="second-img"
                                            src="{{ asset($item->product_thumbnail) }}" alt="product">
                                    </a>
                                </div>
                                <div class="product__content content">
                                    <h6 class="product-name">
                                        <a class="product-item-link" href="{{route('product.product_details', $item->product_slug)}}">{{$item->product_name}}</a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    @if ($item->descount_price == null)
                                    <span class="new mb-5">${{ $item->selling_price }}</span>
                                  @else
                                    <div >
                                      <span class="price-old mb-5">${{ $item->descount_price}}</span> <del>${{ $item->selling_price}}</del>
                                    </div>
                                  @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- onsale product area end -->

    <!-- banner area start -->
    <section class="banner__area pt-20 pb-30 grey-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner__item mb-30 w-img">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-4.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="banner__item mb-30 w-img">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-5.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- desktop computer area start -->
    @foreach ($cats as $cat)
    <section class="product__desktop grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-lg-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>{{$cat->category_name}} <span>Products</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            @php
        $data = DB::table('products')->where('category_id', $cat->id)->where('status', 1)->get();
        $deal_data = DB::table('products')->where('category_id', $cat->id)->where('today_deal', 1)->where('status', 1)->get();
            @endphp
            <div class="row">
                @foreach ($deal_data as $item) 
                <div class="col-xl-2 custom-col-2-2 ">
                    <div class="banner__area">
                        <div class="banner__item mb-20 w-img">
                            <a href="product-details.html"><img src="{{ asset($item->product_thumbnail) }}"
                                    alt="{{ asset($item->product_thumbnail) }}" /></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-xl-10 custom-col-10-2">
                    <div class="tab-content" id="desktop-content">
                        <div class="tab-pane fade show active" id="deskto" role="tabpanel"
                            aria-labelledby="deskto-tab">
                            <div class="product__desktop-slider-3 t-nav owl-carousel">
                                @foreach ($data as $item)
                                <div class="product__item-wrapper">
                                    <div class="product__item white-bg d-flex mb-20">
                                        <div class="product__thumb product__thumb-sale p-relative ">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{ asset($item->product_thumbnail) }}"
                                                    alt="product">
                                                <img class="second-img"
                                                    src="{{ asset($item->product_thumbnail) }}"
                                                    alt="product">
                                            </a>
                                        </div>
                                        <div class="product__content content">
                                            <h6 class="product-name ">
                                                <a class="product-item-link " href="product-details.html">{{$item->product_name}}</a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            @if ($item->descount_price == null)
                                            <span class="new mb-5">${{ $item->selling_price }}</span>
                                          @else
                                            <div >
                                              <span class="price-old mb-5">${{ $item->descount_price}}</span> <del>${{ $item->selling_price}}</del>
                                            </div>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="product__item white-bg d-flex mb-20">
                                        <div class="product__thumb product__thumb-sale p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{ asset($item->product_thumbnail) }}"
                                                    alt="product">
                                                <img class="second-img"
                                                    src="{{ asset($item->product_thumbnail) }}"
                                                    alt="product">
                                            </a>
                                        </div>
                                        <div class="product__content content">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product-details.html">{{$item->product_name}}</a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            @if ($item->descount_price == null)
                                            <span class="new mb-5">${{ $item->selling_price }}</span>
                                          @else
                                            <div >
                                              <span class="price-old mb-5">${{ $item->descount_price}}</span> <del>${{ $item->selling_price}}</del>
                                            </div>
                                          @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- destop computer area end -->

    <!-- desktop computer area start -->
    {{-- <section class="product__phone pt-30 grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-lg-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>Phones & Tablets <span>Products</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 custom-col-10-2">
                    <div class="tab-content" id="phone-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="product__phone-slider-3 t-nav owl-carousel">

                                <div class="product__item-wrapper">
                                    <div class="product__item white-bg d-flex mb-20">
                                        <div class="product__thumb product__thumb-sale p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{ asset('frontend/img/shop/product/product-2.jpg') }}"
                                                    alt="product">
                                                <img class="second-img"
                                                    src="{{ asset('frontend/img/shop/product/product-8.jpg') }}"
                                                    alt="product">
                                            </a>
                                        </div>
                                        <div class="product__content">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product-details.html">Verizon LG K8V
                                                    8GB 4G LTE 5" Prepaid Smartphone </a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="new new-2">$720.00</span>
                                            <span class="price-old"> <del>$800.00</del> </span>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg d-flex mb-20">
                                        <div class="product__thumb product__thumb-sale p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="{{ asset('frontend/img/shop/product/product-4.jpg') }}"
                                                    alt="product">
                                                <img class="second-img"
                                                    src="{{ asset('frontend/img/shop/product/product-1.jpg') }}"
                                                    alt="product">
                                            </a>
                                        </div>
                                        <div class="product__content">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product-details.html">Apple iPhone XS
                                                    (64GB) - Space Gray - [Locked key] </a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="new new-2">$90.00</span>
                                            <span class="price-old"> <del>$100.00</del> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 custom-col-2-2">
                    <div class="banner__area">
                        <div class="banner__item mb-20 w-img">
                            <a href="product-details.html"><img
                                    src="{{ asset('frontend/img/banner/banner-sm-2.jpg') }}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- destop computer area end -->

    <!-- banner area start -->
    <section class="banner__area pb-40 grey-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item mb-30 w-img">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-6.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item mb-30 w-img">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-7.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item mb-30 w-img">
                        <a href="product-details.html"><img src="{{ asset('frontend/img/banner/banner-8.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- blog area start -->
    <section class="blog__area pb-40 grey-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>From The<span>Blog</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog__slider owl-carousel">
                        <div class="blog__item mb-30">
                            <div class="blog__thumb fix">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__content white-bg">
                                <h3><a href="blog-details.html">Curabitur Lobortis News</a></h3>
                                <div class="blog__meta">
                                    <span>Post Date:</span>
                                    <span class="date"> 01-Jul-2020</span>
                                </div>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae
                                    lorem non mollis. </p>
                            </div>
                        </div>
                        <div class="blog__item mb-30">
                            <div class="blog__thumb fix">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/img/blog/blog-2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__content white-bg">
                                <h3><a href="blog-details.html">The Brushed Steel</a></h3>
                                <div class="blog__meta">
                                    <span>Post Date:</span>
                                    <span class="date"> 05-Aug-2020</span>
                                </div>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae
                                    lorem non mollis. </p>
                            </div>
                        </div>
                        <div class="blog__item mb-30">
                            <div class="blog__thumb fix">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/img/blog/blog-3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__content white-bg">
                                <h3><a href="blog-details.html">Koma and Torus</a></h3>
                                <div class="blog__meta">
                                    <span>Post Date:</span>
                                    <span class="date"> 15-Aug-2020</span>
                                </div>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae
                                    lorem non mollis. </p>
                            </div>
                        </div>
                        <div class="blog__item mb-30">
                            <div class="blog__thumb fix">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/img/blog/blog-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__content white-bg">
                                <h3><a href="blog-details.html">Grip and Allows</a></h3>
                                <div class="blog__meta">
                                    <span>Post Date:</span>
                                    <span class="date"> 20-Aug-2020</span>
                                </div>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae
                                    lorem non mollis. </p>
                            </div>
                        </div>
                        <div class="blog__item mb-30">
                            <div class="blog__thumb fix">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/img/blog/blog-5.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__content white-bg">
                                <h3><a href="blog-details.html">Pitterarum Formas</a></h3>
                                <div class="blog__meta">
                                    <span>Post Date:</span>
                                    <span class="date"> 25-Aug-2020</span>
                                </div>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae
                                    lorem non mollis. </p>
                            </div>
                        </div>
                        <div class="blog__item mb-30">
                            <div class="blog__thumb fix">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/img/blog/blog-6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__content white-bg">
                                <h3><a href="blog-details.html">Shelving Burgundy</a></h3>
                                <div class="blog__meta">
                                    <span>Post Date:</span>
                                    <span class="date"> 02-Sep-2020</span>
                                </div>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae
                                    lorem non mollis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- subscribe area start -->
    <section class="subscribe__area pt-35 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="subscribe__content d-sm-flex align-items-center">
                        <div class="subscribe__icon mr-25">
                            <img src="{{ asset('frontend/img/icon/icon_email.png') }}" alt="">
                        </div>
                        <div class="subscribe__text">
                            <h4>Sign up to Newsletter</h4>
                            <p>Get email updates about our latest shop...and receive <span>$30 Coupon For First
                                    Shopping</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="subscribe__form f-right">
                        <form action="#">
                            <input type="email" placeholder="Enter your email here...">
                            <button class="t-y-btn t-y-btn-sub">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe area end -->
@endsection
