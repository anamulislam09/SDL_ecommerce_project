   <!-- back to top btn area start -->
   <section class="back-btn-top">
    <div class="container-fluid p-0">
        <div class="row gx-0">
            <div class="col-xl-12">
                <div id="scroll" class="back-to-top-btn text-center">
                    <a href="javascript:void(0);">back to top</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- back to top btn area end -->

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
                                        <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/quick-view-4.jpg')}}" alt="">
                                            </div>
                                        </div>
                                      </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-1.jpg')}}" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                            <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-2.jpg')}}" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                            <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-3.jpg')}}" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                            <img src="{{ asset('frontend/img/shop/product/quick-view/nav/quick-nav-4.jpg')}}" alt="">
                                          </button>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                    <div class="product__modal-des mb-40">
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
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
                                                <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                            </div>
                                            <div class="pro-cart-btn mb-25">
                                                <button class="t-y-btn" type="submit">Add to cart</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="product__modal-links">
                                        <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                        <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                        <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
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
        <footer>
            <div class="footer__area footer-bg">
                <div class="footer__top pt-80 pb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-12">
                                <div class="footer__top-left">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title mb-45">
                                                    <div class="footer__logo">
                                                        <a href="index.html"><img src="{{ asset('frontend/img/logo/logo-white.png')}}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__hotline d-flex align-items-center mb-30">
                                                        <div class="icon mr-15">
                                                            <i class="fal fa-headset"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h4>Hotline Free 24/24:</h4>
                                                            <span>(+100) 123 456 7890</span>
                                                        </div>
                                                    </div>
                                                    <div class="footer__info">
                                                        <ul>
                                                            <li>
                                                                <span>Add:  <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Walls Street 68, Mahattan, New York, USA</a>
                                                                </span>
                                                            </li>
                                                            <li><span>Email: <a href="mailto:info@thebuesky.com">info@thebuesky.com</a>  </span></li>
                                                            <li><span>Fax: <a href="tel:123-456-7890">(+100) 123 456 7890</a> - <a href="tel:-100-123-456-7891">(+100) 123 456 7891</a> </span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title">
                                                            <h4>Information</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link">
                                                                <ul>
                                                                    <li><a href="#"> Custom Service </a></li>
                                                                    <li><a href="#">F.A.Q.’s</a></li>
                                                                    <li><a href="#">Ordering Tracking</a></li>
                                                                    <li><a href="#"> Contacts</a></li>
                                                                    <li><a href="#">Events</a></li>
                                                                    <li><a href="#">Popular</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title">
                                                            <h4>Our Services</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link">
                                                                <ul>
                                                                    <li><a href="#">Sitemap</a></li>
                                                                    <li><a href="#">Privacy Policy</a></li>
                                                                    <li><a href="#">Your Account</a></li>
                                                                    <li><a href="#">Advanced Search</a></li>
                                                                    <li><a href="#">Terms & Condition</a></li>
                                                                    <li><a href="#"> Contact Us</a></li>
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
                            <div class="col-xl-5 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title">
                                                <h4>My Account</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link">
                                                    <ul>
                                                        <li><a href="#"> About us </a></li>
                                                        <li><a href="#">Delivery Information</a></li>
                                                        <li><a href="#">Privacy Policy</a></li>
                                                        <li><a href="#">Discount</a></li>
                                                        <li><a href="#">Custom Service</a></li>
                                                        <li><a href="#">Terms & Condition</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title">
                                                <h4>Payment & Shipping</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link">
                                                    <ul>
                                                        <li><a href="#">Terms Of Use</a></li>
                                                        <li><a href="#">Payment Methods</a></li>
                                                        <li><a href="#">Shipping Guide</a></li>
                                                        <li><a href="#">Locations We Ship To</a></li>
                                                        <li><a href="#">Estimated Delivery Time</a></li>
                                                        <li><a href="#">Express</a></li>
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
                <div class="footer__bottom pt-60 pb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer__links text-center">
                                    <p>
                                        <a href="#">Air Conditioners</a>
                                        <a href="#">Audios & Theaters</a>
                                        <a href="#">Car Electronics</a>
                                        <a href="#">Office Electronics</a>
                                        <a href="#">TV Televisions</a>
                                        <a href="#">Washing Machines</a>
                                    </p>
                                    <p>
                                        <a href="#">Cookware</a>
                                        <a href="#">Decoration</a>
                                        <a href="#">Furniture </a>
                                        <a href="#">Garden Tools</a>
                                        <a href="#">Garden Equipments</a>
                                        <a href="#">Powers And Hand Tools </a>
                                        <a href="#">Utensil & Gadget </a>
                                        <a href="#">Printers</a>
                                        <a href="#">Projectors</a>
                                        <a href="#">Scanners</a>
                                        <a href="#">Store</a>
                                        <a href="#">Business</a>
                                    </p>
                                    <p>
                                        <a href="#">4K Ultra</a>
                                        <a href="#"> HD TVs </a>
                                        <a href="#">LED TVs</a>
                                        <a href="#">OLED TVs</a>
                                        <a href="#">Desktop</a>
                                        <a href="#">PC</a>
                                        <a href="#">Laptop</a>
                                        <a href="#">Smartphones</a>
                                        <a href="#">Tablet</a>
                                        <a href="#">Game Controller</a>
                                        <a href="#">Audio & Video</a>
                                        <a href="#"> Wireless Speaker</a>
                                        <a href="#">Drone</a>
                                    </p>
                                </div>
                                <div class="footer__download text-center">
                                    <h4>Download The App - Get 30% Sale Coupon</h4>
                                    <a href="#" class="m-img"><img src="{{ asset('frontend/img/icon/app-store.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright pt-30 pb-35 footer-bottom-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__copyright-text">
                                    <p>Copyright © <a href="index.html">Topico.</a> All Rights Reserved. <a href="#">ThemePure.</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__payment f-right">
                                    <a href="#" class="m-img"><img src="{{ asset('frontend/img/icon/payment.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>