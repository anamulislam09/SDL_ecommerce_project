  
  @php
      $cats = DB::table('categories')->get();
      $carts = DB::table('carts')->where('user_id',Auth::id())->count();
      $wishlist = DB::table('wishlists')->where('user_id',Auth::id())->count();
  @endphp
  <!-- back to top start -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->
<header>
    <div class="header__area">
        <div class="header__top d-none d-sm-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                        <div class="header__welcome">
                            <span>Welcome to Worldwide Electronics Store</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="header__action d-flex justify-content-center justify-content-md-end">
                            <ul>
                                <li>
                                    <a href="{{route('wishlist')}}"><i
                                        class="fal fa-heart "></i> <span class="cart__total-item wishlist">{{$wishlist}}</sub></span></a>
                                    {{-- <a href="javascript:void(0);" class="cart__toggle">
                                        <span class="cart__total-item">{{$wishlist}}</span>
                                    </a> --}}
                                </li>
                                @guest
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#login">Sign In</a> </li>
                                @else
                                <li><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                                    <ul class="dropdown-menu">
                                          <li><a href="#">Profile</a></li>
                                          <li><a href="#">Setings</a></li>
                                          <li><a href="#">Order List</a></li>
                                          <li><a href="{{route('customer.logout')}}">Logout</a></li>
                                        </ul></li>
                                </li>
                              @endguest
                                <li><a href="#">Compare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__info">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3 col-md-3">
                        <div class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('frontend/img/logo/logo-black.png')}}" alt="logo"></a>
                            </div>
                            <div class="header__hotline align-items-center d-none d-sm-flex  d-lg-none d-xl-flex">
                                <div class="header__hotline-icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <div class="header__hotline-info">
                                    <span>Hotline Free:</span>
                                    <h6>06-900-6789-00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="header__info-right">
                            <div class="header__search f-left d-none d-sm-block">
                                <form action="#">
                                    <div class="header__search-box">
                                        <input type="text" placeholder="Search For Products...">
                                        <button type="submit">Search</button>
                                    </div>
                                    <div class="header__search-cat">
                                        
                                        <select>
                                            @foreach ($cats as $item )
                                            {{-- @php
                                               $cats = DB::table('subcategories')->where('category_id',$item->id)->get(); 
                                            @endphp --}}
                                            <option>
                                                <a href="">{{$item->category_name}}</a>
                                            </option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
                                <a href="{{route('cart')}}" class="cart__toggle">
                                    <span class="cart__total-item">{{$carts}}</span>
                                </a>
                                <span class="cart__content">
                                    <span class="cart__my">My Cart:</span>
                                    <span class="cart__total-price">$ 255.00</span>
                                </span>
                                <div class="cart__mini">
                                  <div class="cart__close"><button type="button" class="cart__close-btn"><i class="fal fa-times"></i></button></div>
                                  <ul>
                                      <li>
                                        <div class="cart__title">
                                          <h4>My Cart</h4>
                                          <span>(1 Item in Cart)</span>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="cart__item d-flex justify-content-between align-items-center">
                                          <div class="cart__inner d-flex">
                                            <div class="cart__thumb">
                                              <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/shop/product/cart/cart-mini-1.jpg')}}" alt="">
                                              </a>
                                            </div>
                                            <div class="cart__details">
                                              <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                              <div class="cart__price">
                                                <span>$255.00</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="cart__del">
                                              <a href="#"><i class="fal fa-trash-alt"></i></a>
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="cart__sub d-flex justify-content-between align-items-center">
                                          <h6>Car Subtotal</h6>
                                          <span class="cart__sub-total">$255.00</span>
                                        </div>
                                      </li>
                                      <li>
                                        <a href="checkout.html" class="t-y-btn w-100 mb-10">Proceed to checkout</a>
                                        <a href="cart.html" class="t-y-btn t-y-btn-border w-100 mb-10">view add edit cart</a>
                                      </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                      <div class="header__bottom-left d-flex d-xl-block align-items-center">
                        <div class="side-menu d-xl-none mr-20">
                          <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                        </div>
                        <div class="main-menu d-none d-md-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li><a href="{{route('products')}}">Simple Product</a></li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li><a href="{{route('about')}}">about us</a></li>
                                    <li><a href="{{route('contact')}}">contact</a></li>
                                    {{-- <li>
                                        <a href="about.html">pages <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="error.html">404 Error</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3  col-sm-6  col-6 d-md-none d-lg-block">
                        <div class="header__bottom-right d-flex justify-content-end">
                            <div class="header__currency">
                                <select>
                                    <option>BDT</option>
                                    <option>USD</option>
                                </select>
                            </div>
                            <div class="header__lang d-md-none d-lg-block">
                                <select>
                                    <option>English</option>
                                    <option>Bangla</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
<!-- offcanvas area start -->
<div class="offcanvas__area">
    <div class="offcanvas__wrapper">
    <div class="offcanvas__close">
        <button class="offcanvas__close-btn" id="offcanvas__close-btn">
            <i class="fal fa-times"></i>
        </button>
    </div>
    <div class="offcanvas__content">
        <div class="offcanvas__logo mb-40">
            <a href="index.html">
            <img src="{{ asset('frontend/img/logo/logo-black.png')}}" alt="logo">
            </a>
        </div>
        <div class="offcanvas__search mb-25">
            <form action="#">
                <input type="text" placeholder="What are you searching for?">
                <button type="submit" ><i class="far fa-search"></i></button>
            </form>
        </div>
        <div class="mobile-menu fix"></div>
        <div class="offcanvas__action">

        </div>
    </div>
    </div>
</div>
<!-- offcanvas area end -->      
<div class="body-overlay"></div>
<!-- offcanvas area end -->

 <!-- Login Modal start here -->
 <div class="modal fade" id="login" tabindex="-1" role="dialog"
 aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
       <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <form action="{{ route('login') }}" method="POST">
         @csrf
         <div class="mb-3 mt-3">
           <label for="email" class="form-label">Email:</label>
           <input type="text" class="form-control @error('email') is-invalid @enderror"
             name="email" placeholder="Enter  your email">
         </div>
         @error('email')
           <div class="alert alert-danger">{{ $message }}</div>
         @enderror

         <div class="mb-3 mt-3">
           <label for="password" class="form-label">Password:</label>
           <input type="password" class="form-control @error('password') is-invalid @enderror"
             name="password" placeholder="Enter  your password">
         </div>
         @error('password')
           <div class="alert alert-danger">{{ $message }}</div>
         @enderror
     </div>
     <div class="modal-footer">
        <a href="{{ route('register') }}" class="btn btn-outline-success">Register!</a>
       {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> --}}
       <button type="submit" class="btn btn-primary">Login</button>
       
     </div>
     </form>
   </div>
 </div>
</div>
<!-- Login Modal ends here -->

<script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>