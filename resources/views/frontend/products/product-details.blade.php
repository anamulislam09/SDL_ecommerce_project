@extends('layouts.app')
@section('frontend_content')
    <!-- product area start -->

    @php
        $rating5 = App\Models\Review::where('product_id', $data->id)
            ->where('rating', 5)
            ->count();
        $rating4 = App\Models\Review::where('product_id', $data->id)
            ->where('rating', 4)
            ->count();
        $rating3 = App\Models\Review::where('product_id', $data->id)
            ->where('rating', 3)
            ->count();
        $rating2 = App\Models\Review::where('product_id', $data->id)
            ->where('rating', 2)
            ->count();
        $rating1 = App\Models\Review::where('product_id', $data->id)
            ->where('rating', 1)
            ->count();
            
        // average rating
        $sum_rating = App\Models\Review::where('product_id', $data->id)->sum('rating');
        $count_rating = App\Models\Review::where('product_id', $data->id)->count('rating');
        $avg_rating = $count_rating ? $sum_rating / $count_rating : 0;
    @endphp

    <section class="product__area box-plr-75 pb-70 pt-30">
        <div class="container-fluid">
            <div class="row">
                @php
                    $images = json_decode($data->images, true);
                    $color = explode(',', $data->product_color);
                    $size = explode(',', $data->product_size);
                @endphp
                <div class="col-xxl-5 col-xl-5 col-lg-5">
                    <div class="product__details-nav d-sm-flex align-items-start">
                        <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
                            @foreach ($images as $image)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="thumbOne-tab" data-bs-toggle="tab"
                                        data-bs-target="#thumbOne" type="button" role="tab" aria-controls="thumbOne"
                                        aria-selected="true">
                                        <img src="{{ asset('files/product/' . $image) }}" alt="{{ $image }}">
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="product__details-thumb">
                            <div class="tab-content" id="productThumbContent">
                                <div class="tab-pane fade show active" id="thumbOne" role="tabpanel"
                                    aria-labelledby="thumbOne-tab">
                                    <div class="product__details-nav-thumb" id="thumbOne">
                                        <img id="thumbImage" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thumbTwo" role="tabpanel" aria-labelledby="thumbTwo-tab">
                                    <div class="product__details-nav-thumb">
                                        <img src="{{ asset('frontend/img/shop/product/details/big/product-nav-big-2.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thumbThree" role="tabpanel" aria-labelledby="thumbThree-tab">
                                    <div class="product__details-nav-thumb">
                                        <img src="{{ asset('frontend/img/shop/product/details/big/product-nav-big-3.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thumbFour" role="tabpanel" aria-labelledby="thumbFour-tab">
                                    <div class="product__details-nav-thumb">
                                        <img src="{{ asset('frontend/img/shop/product/details/big/product-nav-big-4.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thumbFive" role="tabpanel" aria-labelledby="thumbFive-tab">
                                    <div class="product__details-nav-thumb">
                                        <img src="{{ asset('frontend/img/shop/product/details/big/product-nav-big-5.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thumbSix" role="tabpanel" aria-labelledby="thumbSix-tab">
                                    <div class="product__details-nav-thumb">
                                        <img src="{{ asset('frontend/img/shop/product/details/big/product-nav-big-6.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7">
                    <div class="product__details-wrapper">
                        <div class="product__details">
                            <h3 class="product__details-title">
                                <a href="">{{ $data->product_name }}</a>
                            </h3>
                            <div class="product__review d-sm-flex">
                                <div class="rating rating__shop mb-15 mr-35">
                                    <ul>
                                        @if ($sum_rating == null)
                                            <li><span class="fas fa-star "></span></li>
                                            <li><span class="fas fa-star "></span></li>
                                            <li><span class="fas fa-star "></span></li>
                                            <li><span class="fas fa-star "></span></li>
                                            <li><span class="fas fa-star "></span></li>
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
                            </div>
                            <div class="product__price">
                                @if ($data->descount_price == null)
                                    <span class="new mb-5">${{ $data->selling_price }}</span>
                                @else
                                    <div>
                                        <span class="price-old mb-5">${{ $data->descount_price }}</span>
                                        <del>${{ $data->selling_price }}</del>
                                    </div>
                                @endif
                            </div>

                            <div class="product__stock">
                                <span>Availability :</span>
                                @if ($data->stock_quantity < 1)
                                    <span class="badge badge-danger"> Stock out </span>
                                @else
                                    <span class="badge badge-primary"> Stock Available </span>
                                @endif
                            </div>

                            <div class="product__stock sku mb-30">
                                <span>SKU:</span>
                                <span>Samsung C49J89: £875, Debenhams Plus</span>
                            </div>
                            <div class="product__details-des mb-30">
                                <p>{{ $data->short }}</p>
                            </div>
                            <div class="product__details-stock">
                                <h3><span>Hurry Up!</span> Only {{ $data->stock_quantity }} products left in stock.</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuenow="{{ $data->stock_quantity }}" aria-valuemin="0" aria-valuemax="100" data-width="{{ $data->stock_quantity }}"></div>
                                </div>
                            </div>
                            <div class="product__details-quantity mb-20">
                                <form action="{{route('addToCart')}}" method="POST" id="add_cart_form_Qv">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                
                                    @if ($data->descount_price == null)
                                        <input type="hidden" name="price" value="{{ $data->selling_price }}">
                                    @else
                                        <input type="hidden" name="price" value="{{ $data->descount_price }}">
                                    @endif
                
                                    <div class="clearfix" style="z-index: 1000">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="color" class="form-control form-control-sm" style="min-width:120px;" required>
                                                    <option value="" selected disabled>Select Color</option>
                                                    @foreach ($color as $row)
                                                        <option value="{{ $row }}">{{ $row }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                                <div class="col-6">
                                                    <select name="size"class="form-control form-control-sm" style="min-width:120px;" required>
                                                        <option value="" selected disabled>Select Size</option>
                                                        @foreach ($size as $row)
                                                            <option value="{{ $row }}">{{ $row }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pro-quan-area d-lg-flex align-items-center pt-3">
                                        <div class="product-quantity mr-20 mb-25">
                                            <div class="cart-plus-minus p-relative"><input type="text" name="qty"
                                                    value="1" /></div>
                                        </div>
                                        <div class="pro-cart-btn mb-25">
                                            @if ($data->stock_quantity < 1)
                                                <a href="" class="btn btn-sm btn-danger" disabled>Stock
                                                    out</a>
                                            @else
                                                <button class="t-y-btn" type="submit">Add to cart</button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product__details-action">
                                <ul>
                                    <li><a href="{{ route('add.wishlist', $data->id) }}" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                    <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="product__details-des-tab mb-40 mt-110">
                        <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="des-tab" data-bs-toggle="tab"
                                    data-bs-target="#des" type="button" role="tab" aria-controls="des"
                                    aria-selected="true">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                    type="button" role="tab" aria-controls="review" aria-selected="false">Review
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="tab-content" id="prodductDesTaContent">
                        <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                            <div class="product__details-des-wrapper">
                                <div class="product__details-des mb-20">
                                    <p>{!! $data->product_description !!}</p>
                                </div>
                                <div class="product__details-des-banner w-img">
                                    <img src="{{ asset('frontend/img/shop/product/details/product-details-banner.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="product__details-review">
                                <div class="row">

                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="review-wrapper">
                                            <h3 class="block-title">All review of <u>{{ $data->product_name }}</u>
                                                <span>({{ number_format($avg_rating, 1) }}) </span>
                                            </h3>
                                            @foreach ($review as $data)
                                                <div class="review-item">
                                                    @php
                                                        $user = App\Models\User::where('id', $data->user_id)->first();
                                                    @endphp
                                                    {{-- <h3 class="review-title">{{ $user->name }}</h3> --}}
                                                    <div class="review-ratings mb-10">
                                                        <div class="review-ratings-single d-flex align-items-center">
                                                            <span>Rating : </span>
                                                            <ul>
                                                                <li><span
                                                                        class="fas fa-star {{ $data->rating >= 1 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ $data->rating >= 2 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ $data->rating >= 3 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ $data->rating >= 4 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li><span
                                                                        class="fas fa-star {{ $data->rating >= 5 ? 'checked' : null }}"></span>
                                                                </li>
                                                                <li class="pl-2">( {{ $data->rating }} )</li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="review-text">
                                                        <p> <strong>Details : </strong>{{ $data->review }}</p>
                                                    </div>
                                                    <div class="review-meta">
                                                        <div class="review-author">
                                                            <span>Review By </span>
                                                            <span>{{ $user->name }}</span>
                                                        </div>
                                                        <div class="review-date">
                                                            <span>Posted on</span>
                                                            <span>
                                                                ({{ date('d F , Y'), strtotime($data->review_date) }})
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{-- <div class="review-item">
                                                <h3 class="review-title">Nice</h3>
                                                <div class="review-ratings mb-10">
                                                    <div class="review-ratings-single d-flex align-items-center">
                                                        <span>Quality</span>
                                                        <ul>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-ratings-single d-flex align-items-center">
                                                        <span>Price</span>
                                                        <ul>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-ratings-single d-flex align-items-center">
                                                        <span>Value</span>
                                                        <ul>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="review-text">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti
                                                        quia eligendi molestias illum libero et.</p>
                                                </div>
                                                <div class="review-meta">
                                                    <div class="review-author">
                                                        <span>Review By </span>
                                                        <span>Selena Gomz</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>Posted on</span>
                                                        <span>1/21/20</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <h3 class="review-title">Best product</h3>
                                                <div class="review-ratings mb-10">
                                                    <div class="review-ratings-single d-flex align-items-center">
                                                        <span>Quality</span>
                                                        <ul>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-ratings-single d-flex align-items-center">
                                                        <span>Price</span>
                                                        <ul>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-ratings-single d-flex align-items-center">
                                                        <span>Value</span>
                                                        <ul>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="review-text">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti
                                                        quia eligendi molestias illum libero et.</p>
                                                </div>
                                                <div class="review-meta">
                                                    <div class="review-author">
                                                        <span>Review By </span>
                                                        <span>Jonson</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>Posted on</span>
                                                        <span>1/21/20</span>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                        <div class="review-form">
                                            <h3>Your Reviewing</h3>
                                            <p>Reviewing for {{ $data->product_name }}</p>
                                            <form action="{{ route('store.review') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                <div class="review-input-box mb-15 d-flex align-items-start">
                                                    <h4 class="review-input-title">Rating</h4>
                                                    <div class="form-group">
                                                        <select name="rating" class="custom-select" id=""
                                                            style="min-width:170px;">
                                                            <option value="" selected disabled>Select your rating
                                                            </option>
                                                            <option value="1">1 star</option>
                                                            <option value="2">2 star</option>
                                                            <option value="3">3 star</option>
                                                            <option value="4">4 star</option>
                                                            <option value="5">5 star</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="review-input-box d-flex align-items-start">
                                                    <h4 class="review-input-title">Review</h4>
                                                    <div class="review-input">
                                                        <textarea class="form-control" name="review"></textarea>
                                                    </div>
                                                </div>

                                                <div class="review-sub-btn">
                                                    @if (Auth::check())
                                                        <button type="submit" class="t-y-btn t-y-btn-grey">submit
                                                            review</button>
                                                    @else
                                                        <p>please login first to your account for submit a review</p>
                                                    @endif
                                                </div>

                                            </form>
                                        </div>
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

    <!-- product area start -->
    <section class="product__area box-plr-75 pb-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__head mb-40">
                        <div class="section__title">
                            <h3>Related <span>Products</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="product__slider owl-carousel">
                        @foreach ($reletedProduct as $data)
                            <div class="product__item white-bg mb-30">
                                <div class="product__thumb p-relative">
                                    <a href="product-details.html" class="w-img">
                                        <img src="{{ asset($data->product_thumbnail) }}" alt="product">
                                        <img class="second-img" src="{{ asset($data->product_thumbnail) }}"
                                            alt="product">
                                    </a>
                                    <div class="product__action p-absolute">
                                        <ul>
                                            <li><a href="{{ route('add.wishlist', $data->id) }}"
                                                    title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                            </li>
                                            <li><a href="#" title="Quick View" data-bs-toggle="modal"
                                                    id="{{ $data->id }}" data-bs-target="#productModalId"><i
                                                        class="fal fa-search"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content text-center">
                                    <h6 class="product-name"><a
                                            href="{{ route('product.product_details', $data->product_slug) }}">{{ substr($data->product_name, 0, 20) }}
                                        </a>
                                    </h6>
                                    <div class="rating">
                                        <ul>
                                            @if ($sum_rating == null)
                                                <li><span class="fas fa-star "></span></li>
                                                <li><span class="fas fa-star "></span></li>
                                                <li><span class="fas fa-star "></span></li>
                                                <li><span class="fas fa-star "></span></li>
                                                <li><span class="fas fa-star "></span></li>
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
                                    @if ($data->descount_price == null)
                                        <span class="new mb-5">${{ $data->selling_price }}</span>
                                    @else
                                        <span class="price">${{ $data->descount_price }}</span>
                                        <del>${{ $data->selling_price }}</del>
                                    @endif
                                </div>
                                <div class="product__add-btn">
                                    @if ($data->stock_quantity < 1)
                                        <a href="" class="btn btn-danger" disabled>Stock
                                            out</a>
                                    @else
                                        <button type="button">Add to Cart</button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
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
                        @foreach ($brand as $data)
                        <div class="brand__item">
                            <img src="{{ asset($data->brand_image) }}" style="width: 80px;" alt="">
                        </div>
                        @endforeach
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
                    <div class="product__modal-inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-box">
                                    <div class="tab-content" id="modalTabContent">
                                        <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                            aria-labelledby="nav1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav2" role="tabpanel"
                                            aria-labelledby="nav2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-2.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav3" role="tabpanel"
                                            aria-labelledby="nav3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-3.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav4" role="tabpanel"
                                            aria-labelledby="nav4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-4.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav1" type="button" role="tab"
                                                aria-controls="nav1" aria-selected="true">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-1.jpg') }}"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav2" type="button" role="tab"
                                                aria-controls="nav2" aria-selected="false">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-2.jpg') }}"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav3" type="button" role="tab"
                                                aria-controls="nav3" aria-selected="false">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-3.jpg') }}"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav4" type="button" role="tab"
                                                aria-controls="nav4" aria-selected="false">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-4.jpg') }}"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                    <div class="product__modal-des mb-40">
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum
                                            claritatem. Investigationes demonstraverunt </p>
                                    </div>
                                    <div class="product__stock">
                                        <span>Availability :</span>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="product__stock sku mb-30">
                                        <span>SKU:</span>
                                        <span>Samsung C49J89: £875, Debenhams Plus</span>
                                    </div>
                                    <div class="product__review d-sm-flex">
                                        <div class="rating rating__shop mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__add-review mb-15">
                                            <span><a href="#">1 Review</a></span>
                                            <span><a href="#">Add Review</a></span>
                                        </div>
                                    </div>
                                    <div class="product__price">
                                        <span>$560.00</span>
                                    </div>
                                    <div class="product__modal-form mb-30">
                                        <form action="#">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text"
                                                            value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    {{-- @if ($item->stock_quantity < 1)
                                                            <a href="" class="btn btn-sm btn-danger" disabled>Stock
                                                                out</a>
                                                        @else --}}
                                                    <button class="t-y-btn" type="submit">Add to cart</button>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product__modal-links">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i
                                                        class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                            </li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a>
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
    </div>
    <!-- shop modal end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#thumbOne-tab').click(function() {
                var images = $('#thumbOne-tab img').attr('src');
                // alert(images);
                // $('#thumbImage').val(attr(images))
                $("#thumbImage").attr('src', images)
            });
        })

        //         $(document).ready(function(){
        //   $("button").click(function(){
        //     $("#div1").load("demo_test.txt");
        //   });
        // });
    </script>

<script>
    // add to cart 
    $('#add_cart_form_Qv').submit(function(e) {
      e.preventDefault();
      var url = $(this).attr('action');
      var request = $(this).serialize();
      $.ajax({
        url: url,
        type:'post',
        async: false,
        data: request,
        success:function(data){
          toastr.success(data);
        window.location.reload(true);
   
          
        }
      })
    })
  </script>
@endsection
