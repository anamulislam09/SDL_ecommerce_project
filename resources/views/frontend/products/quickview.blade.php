<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="product__modal-box">
            <div class="tab-content" id="modalTabContent">
                @php
                    $images = json_decode($product->images, true);
                @endphp
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
            <h4><a href="product-details.html"></a></h4>
            <div class="product__modal-des mb-40">
                <p>{{$data->product_name}}</p>
            </div>
            <div class="product__stock">
                <span>Availability :</span>
                @if ($data->stock_quantity < 1)
                <a href="" class="text-danger" disabled>Stock
                    out</a>
            @else
                <span>In Stock</span>
                @endif
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
                {{-- <div class="product__add-review mb-15">
                    <span><a href="#">1 Review</a></span>
                    <span><a href="#">Add Review</a></span>
                </div> --}}
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
            <div class="product__modal-form mb-30">
                <form action="#">
                    <div class="pro-quan-area d-lg-flex align-items-center">
                        <div class="product-quantity mr-20 mb-25">
                            <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                        </div>
                        <div class="pro-cart-btn mb-25">
                            @if ($data->stock_quantity < 1)
                            <a href="" class="btn btn-danger" disabled>Stock
                                out</a>
                        @else
                            <button class="t-y-btn" type="submit">Add to cart</button>
                        @endif
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