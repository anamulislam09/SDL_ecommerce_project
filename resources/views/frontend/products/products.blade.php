@extends('layouts.app')
@section('frontend_content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area box-plr-75 grey-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- product area start -->
    <section class="product__area box-plr-75 pb-70 grey-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2 col-xl-3 col-lg-4">
                    <div class="product__widget">
                        <div class="product__widget-item mb-15">

                        </div>
                        <div class="product__widget-item mb-15">
                            <div class="accordion" id="productWidgetAccordion1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button product__widget-title" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Price
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#productWidgetAccordion1">
                                        <div class="accordion-body">
                                            <div class="product__widget-content">
                                                <div class="product__price-slider">
                                                    <div>
                                                        <form action="#">
                                                            <input type="text" id="amount" readonly>
                                                        </form>
                                                    </div>
                                                    <div id="slider-range"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__widget-item mb-15">
                            <div class="accordion" id="productWidgetAccordion2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button product__widget-title" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Size
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                        <div class="accordion-body">
                                            <div class="product__widget-content">
                                                <div class="product__size pt-10">
                                                    <ul>
                                                        <li>
                                                            <a href="#">S</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">M</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">L</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">XL</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">XXL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__widget-item mb-45">
                            <div class="banner__item mb-20 w-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('frontend/img/banner/banner-sm-4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="product__widget-item">
                            <h3 class="product__widget-title mb-25">Top Rate</h3>
                            <div class="product__sm">
                                <ul>
                                    <li class="product__sm-item d-flex align-items-center">
                                        <div class="product__sm-thumb mr-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/shop/product/sm/product-sm-1.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product__sm-content">
                                            <h3 class="product__sm-title">
                                                <a href="#">Organic Greenhouse Tomatoes New 18kg</a>
                                            </h3>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__sm-price">
                                                <span class="price">$300.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product__sm-item d-flex align-items-center">
                                        <div class="product__sm-thumb mr-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/shop/product/sm/product-sm-2.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product__sm-content">
                                            <h3 class="product__sm-title">
                                                <a href="#">Australian Large Granny Smith Apples</a>
                                            </h3>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__sm-price">
                                                <span class="price">$120.00</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-xl-9 col-lg-8 order-first order-lg-last">
                    <div class="product__grid-wrapper">
                        <div class="product__grid-banner w-img">
                            <img src="{{ asset('frontend/img/banner/product-grid-banner.jpg') }}" alt="">
                        </div>
                        <div class="product__grid-item-wrapper pt-70">
                            <div class="product__filter mb-50">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="product__filter-left d-sm-flex align-items-center">
                                            <div class="product__col">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="FourCol-tab"
                                                            data-bs-toggle="tab" data-bs-target="#FourCol" type="button"
                                                            role="tab" aria-controls="FourCol" aria-selected="true">
                                                            <i class="fal fa-border-all"></i>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="FiveCol-tab" data-bs-toggle="tab"
                                                            data-bs-target="#FiveCol" type="button" role="tab"
                                                            aria-controls="FiveCol" aria-selected="false">
                                                            <i class="fal fa-th"></i>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="list-tab" data-bs-toggle="tab"
                                                            data-bs-target="#list" type="button" role="tab"
                                                            aria-controls="list" aria-selected="false">
                                                            <i class="fal fa-list"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product__result pl-60">
                                                <p>Showing 1-20 of 29 relults</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div
                                            class="product__filter-right d-flex align-items-center justify-content-md-end">
                                            <div class="product__sorting product__show-no">
                                                <select>
                                                    <option>10</option>
                                                    <option>20</option>
                                                    <option>30</option>
                                                    <option>40</option>
                                                </select>
                                            </div>
                                            <div class="product__sorting product__show-position ml-20">
                                                <select>
                                                    <option>Position</option>
                                                    <option>Poduct Name</option>
                                                    <option>Price</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="productGridTabContent">
                                <div class="tab-pane fade  show active" id="FourCol" role="tabpanel"
                                    aria-labelledby="FourCol-tab">
                                    <div class="row">

                                        @foreach ($data as $item)
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="{{ route('product.product_details', $item->product_slug) }}"
                                                            class="w-img">
                                                            <img src="{{ asset($item->product_thumbnail) }}"
                                                                alt="{{ asset($item->product_thumbnail) }}">
                                                            <img class="second-img"
                                                                src="{{ asset($item->product_thumbnail) }}"
                                                                alt="{{ asset($item->product_thumbnail) }}">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href=" {{ route('add.wishlist', $item->id) }}" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="" title="Quick View" class="quick_view" id="{{ $item->id }}" data-bs-toggle="modal"  data-bs-target="#productModalId"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="{{ route('product.product_details', $item->product_slug) }}">
                                                                {{ substr($item->product_name, 0, 20) }}</a>
                                                        </h6>

                                                        {{-- Rating starrt herte --}}
                                                        @php
                                                        $rating5 = App\Models\Review::where('product_id', $item->id)
                                                            ->where('rating', 5)
                                                            ->count();
                                                        $rating4 = App\Models\Review::where('product_id', $item->id)
                                                            ->where('rating', 4)
                                                            ->count();
                                                        $rating3 = App\Models\Review::where('product_id', $item->id)
                                                            ->where('rating', 3)
                                                            ->count();
                                                        $rating2 = App\Models\Review::where('product_id', $item->id)
                                                            ->where('rating', 2)
                                                            ->count();
                                                        $rating1 = App\Models\Review::where('product_id', $item->id)
                                                            ->where('rating', 1)
                                                            ->count();
                                                            
                                                        // average rating
                                                        $sum_rating = App\Models\Review::where('product_id', $item->id)->sum('rating');
                                                        $count_rating = App\Models\Review::where('product_id', $item->id)->count('rating');
                                                        // $avg_rating = $count_rating ? $sum_rating / $count_rating : 0;
                                                    @endphp
                                                        <div class="rating">
                                                            <ul>
                                                                @if ($sum_rating == null)
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                            @elseif($sum_rating != null)
                                                                <li><span
                                                                        class="fas fa-star {{ round($sum_rating / $count_rating) >= 1 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ round($sum_rating / $count_rating) >= 2 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ round($sum_rating / $count_rating) >= 3 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ round($sum_rating / $count_rating) >= 4 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ round($sum_rating / $count_rating) >= 5 ? 'checked' : null }}"></span>
                                                                </li>
                                                            @endif
                                                            </ul>
                                                        </div>

                                                        {{-- Rating ends here --}}
                                                        @if ($item->descount_price == null)
                                                            <span class="new mb-5">${{ $item->selling_price }}</span>
                                                        @else
                                                            <div>
                                                                <span
                                                                    class="price-old mb-5">${{ $item->descount_price }}</span>
                                                                <del>${{ $item->selling_price }}</del>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    {{-- add top cart form start here --}}
                                                    <form action="{{route('addToCart')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                    
                                                        @if ($item->descount_price == null)
                                                            <input type="hidden" name="price" value="{{ $item->selling_price }}">
                                                        @else
                                                            <input type="hidden" name="price" value="{{ $item->descount_price }}">
                                                        @endif
                                                   
                                                    <div class="product__add-btn">
                                                        @if ($item->stock_quantity < 1)
                                                                <button type="submit" class="btn stock-out">Stock out</button>
                                                                @else
                                                                {{-- <button type="submit">Add to Cart</button> --}}
                                                                <a href="{{ route('product.product_details', $item->product_slug) }}" class=" btn cart-btn" disabled>
                                                                    View details</a>

                                                        @endif
                                                    </div>
                                                </form>
                                                    {{-- add top cart form ends here --}}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="FiveCol" role="tabpanel" aria-labelledby="FiveCol-tab">
                                    <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-4">
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-1.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-2.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#"  title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> High
                                                            Quality Glass Ultra-Thin Kitchen Scale</a>
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
                                                    <span class="price">$500.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-3.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-4.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> LG
                                                            27UD58: £347.21, Ebuyer.com </a>
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
                                                    <span class="price">$560.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-5.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-6.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung
                                                            C49J89: £875, Debenhams Plus </a>
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
                                                    <span class="price">$450.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-7.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-8.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Blink
                                                            Home Security Camera System 01 </a>
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
                                                    <span class="price">$720.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-9.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-10.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Blue
                                                            t-shir for men (X, M, XL, XXL) </a>
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
                                                    <span class="price">$720.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-11.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-12.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung
                                                            A20 Pro Ultra CPU 4/64 GB </a>
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
                                                    <span class="price">$720.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-24.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-13.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">
                                                            Capacitive Touch Screen 22 Inch LCD Display </a>
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
                                                    <span class="price">$70.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-14.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-15.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> New
                                                            Model Watch Mobile with Bpm Function </a>
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
                                                    <span class="price">$120.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-16.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-17.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Original
                                                            Smart Phone for Original for iPhone 6s</a>
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
                                                    <span class="price">$89.99</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-18.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-19.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original
                                                            Mobile Android Dual SIM Smart Phone </a>
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
                                                    <span class="price">$56.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-20.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-21.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">TF Camera
                                                            Clock Support Bt 4.0 for Ios </a>
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
                                                    <span class="price">$320.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-22.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-23.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad
                                                            2019 6th Gen 64GB Memory </a>
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
                                                    <span class="price">$250.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-2.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-1.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad
                                                            2019 6th Gen 64GB Memory </a>
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
                                                    <span class="price">$250.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-23.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-7.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad
                                                            2019 6th Gen 64GB Memory </a>
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
                                                    <span class="price">$250.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item white-bg mb-30">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-4.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-23.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId"><i
                                                                        class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad
                                                            2019 6th Gen 64GB Memory </a>
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
                                                    <span class="price">$250.00</span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                <div class="product__thumb p-relative mr-20">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-1.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-2.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Ipad 2019
                                                            6th Gen 64GB Memory</a>
                                                    </h6>
                                                    <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                        <div class="product-review-action ml-30">
                                                            <span><a href="#">2 Reviews</a></span>
                                                            <span><a href="#">Add Your Review</a></span>
                                                        </div>
                                                    </div>
                                                    <span class="price">$500.00</span>
                                                    <p class="product-text">Typi non habent claritatem insitam, est usus
                                                        legentis in iis qui facit eorum claritatem. Investigationes
                                                        demonstraverunt lectores legere me lius quod ii legunt saepius.
                                                        Claritas est etiam processus. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when anunknown printer
                                                        took a galley </p>
                                                    <div class="product__list-features">
                                                        <ul>
                                                            <li>Light green crewneck sweatshirt.</li>
                                                            <li>Hand pockets.</li>
                                                            <li>Relaxed fit.</li>
                                                            <li>Machine wash/dry.</li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <button class="t-y-btn mr-10">add to cart</button>
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                <div class="product__thumb p-relative mr-20">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-3.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-4.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung
                                                            Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>
                                                    <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                        <div class="product-review-action ml-30">
                                                            <span><a href="#">2 Reviews</a></span>
                                                            <span><a href="#">Add Your Review</a></span>
                                                        </div>
                                                    </div>
                                                    <span class="price">$240.00</span>
                                                    <p class="product-text">Typi non habent claritatem insitam, est usus
                                                        legentis in iis qui facit eorum claritatem. Investigationes
                                                        demonstraverunt lectores legere me lius quod ii legunt saepius.
                                                        Claritas est etiam processus. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when anunknown printer
                                                        took a galley </p>
                                                    <div class="product__list-features">
                                                        <ul>
                                                            <li>Light green crewneck sweatshirt.</li>
                                                            <li>Hand pockets.</li>
                                                            <li>Relaxed fit.</li>
                                                            <li>Machine wash/dry.</li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <button class="t-y-btn mr-10">add to cart</button>
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                <div class="product__thumb p-relative mr-20">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-5.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-6.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">TF Camera
                                                            Clock Support Bt 4.0 for Ios</a>
                                                    </h6>
                                                    <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                        <div class="product-review-action ml-30">
                                                            <span><a href="#">2 Reviews</a></span>
                                                            <span><a href="#">Add Your Review</a></span>
                                                        </div>
                                                    </div>
                                                    <span class="price">$120.00</span>
                                                    <p class="product-text">Typi non habent claritatem insitam, est usus
                                                        legentis in iis qui facit eorum claritatem. Investigationes
                                                        demonstraverunt lectores legere me lius quod ii legunt saepius.
                                                        Claritas est etiam processus. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when anunknown printer
                                                        took a galley </p>
                                                    <div class="product__list-features">
                                                        <ul>
                                                            <li>Light green crewneck sweatshirt.</li>
                                                            <li>Hand pockets.</li>
                                                            <li>Relaxed fit.</li>
                                                            <li>Machine wash/dry.</li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <button class="t-y-btn mr-10">add to cart</button>
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                <div class="product__thumb p-relative mr-20">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-7.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-8.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original
                                                            Mobile Android Dual SIM Smart Phone</a>
                                                    </h6>
                                                    <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                        <div class="product-review-action ml-30">
                                                            <span><a href="#">2 Reviews</a></span>
                                                            <span><a href="#">Add Your Review</a></span>
                                                        </div>
                                                    </div>
                                                    <span class="price">$90.00</span>
                                                    <p class="product-text">Typi non habent claritatem insitam, est usus
                                                        legentis in iis qui facit eorum claritatem. Investigationes
                                                        demonstraverunt lectores legere me lius quod ii legunt saepius.
                                                        Claritas est etiam processus. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when anunknown printer
                                                        took a galley </p>
                                                    <div class="product__list-features">
                                                        <ul>
                                                            <li>Light green crewneck sweatshirt.</li>
                                                            <li>Hand pockets.</li>
                                                            <li>Relaxed fit.</li>
                                                            <li>Machine wash/dry.</li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <button class="t-y-btn mr-10">add to cart</button>
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                <div class="product__thumb p-relative mr-20">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="{{ asset('frontend/img/shop/product/product-9.jpg') }}"
                                                            alt="product">
                                                        <img class="second-img"
                                                            src="{{ asset('frontend/img/shop/product/product-8.jpg') }}"
                                                            alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__content">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original
                                                            Smart Phone for Original for iPhone 6s</a>
                                                    </h6>
                                                    <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                        <div class="product-review-action ml-30">
                                                            <span><a href="#">2 Reviews</a></span>
                                                            <span><a href="#">Add Your Review</a></span>
                                                        </div>
                                                    </div>
                                                    <span class="price">$59.00</span>
                                                    <p class="product-text">Typi non habent claritatem insitam, est usus
                                                        legentis in iis qui facit eorum claritatem. Investigationes
                                                        demonstraverunt lectores legere me lius quod ii legunt saepius.
                                                        Claritas est etiam processus. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when anunknown printer
                                                        took a galley </p>
                                                    <div class="product__list-features">
                                                        <ul>
                                                            <li>Light green crewneck sweatshirt.</li>
                                                            <li>Hand pockets.</li>
                                                            <li>Relaxed fit.</li>
                                                            <li>Machine wash/dry.</li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                        <button class="t-y-btn mr-10">add to cart</button>
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i
                                                                        class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="basic-pagination pt-30 pb-30">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="blog.html">
                                                        <i class="fal fa-chevron-double-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">1</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html" class="active">2</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">3</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">
                                                        <i class="fal fa-chevron-double-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- brand area start -->
    <section class="brand__area">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <div class="brand__slider owl-carousel">
                        <div class="brand__item">
                            <img src="{{ asset('frontend/img/brand/brand-1.jpg') }}" alt="">
                        </div>
                        <div class="brand__item">
                            <img src="{{ asset('frontend/img/brand/brand-2.jpg') }}" alt="">
                        </div>
                        <div class="brand__item">
                            <img src="{{ asset('frontend/img/brand/brand-3.jpg') }}" alt="">
                        </div>
                        <div class="brand__item">
                            <img src="{{ asset('frontend/img/brand/brand-4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->

    <!-- shop modal start -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner" id="quickView">
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $(document).on('click', '.quick_view', function() {
          let id = $(this).attr('id');
        //   alert(id);
          $.get("product/product_quick_view/" + id, function(data) {
            $('#quickView').html(data);
          })
        })
      </script>
@endsection
