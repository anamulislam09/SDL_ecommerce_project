@extends('layouts.app')
@section('frontend_content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area box-plr-75">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('products')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Your Cart</li>
                            </ol>
                        </nav>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Cart Area Strat-->
    <section class="cart-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-price">Color</th>
                                        <th class="product-price">Size</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Subtotal</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_price = 0;
                                    @endphp
                                    @foreach ($cart as $item)
                                        @php
                                            $product = App\Models\Product::where('id', $item->product_id)->first();
                                            $colors = explode(',', $product->product_color);
                                            $size = explode(',', $product->product_size);
                                        @endphp
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.html"><img
                                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{substr( $product->product_name ,0,50)}}</a></td>
                                            <td class="product-price"><span class="amount">{{ $item->price }}</span></td>
                                            <td class="product-color"> <span class="amount">{{ $item->color }}</span></td>
                                            <td class="product-size"><span class="">{{ $item->size }}</span></td>
                                            <td class="product-quantity">
                                                <div class="product-quantity">
                                                   {{ $item->quantity }}
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span
                                                    class="amount">{{ $item->price * $item->quantity }}</span></td>
                                            <td class="product-remove">
                                                    <a href="{{url('product/my-cart/delete', $item->id)}}"><i class="fa fa-times"></i>
                                                
                                                </a>
                                            </td>
                                        </tr>
                                        @php
                                            $total_price = $total_price + $item->price * $item->quantity;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a href="{{route('clearCartItem')}}" class="btn btn-warning btn-sm float-end emptyCart"><i class="fas fa-trash"></i> Clear cart</a>
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <div class="cart-coupon pt-5">
                        <form action="#">
                            <input type="text" class="form-control" name="cuppon" placeholder="Enter Coupon code">
                            <button class="btn">Apply coupon</button>
                        </form>
                       
                    </div>
                </div>
                <div class="col-6">
                    <aside class="shop-cart-sidebar">
                        <div class="shop-cart-widget">
                            <h6 class="title">Cart Totals</h6>
                            <hr>
                            <form action="#">
                                <ul>
                                    <li><span>SUBTOTAL</span> {{$total_price}}</li>
                                    <li>
                                        <span>SHIPPING</span>
                                        <div class="shop-check-wrap">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">FLAT RATE: $15</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-total-amount"><span>TOTAL</span> <span class="amount">{{$total_price}}</span></li>
                                </ul>
                                <hr>
                                <a href="{{ route('products') }}" class="btn btn-warning btn-sm ">Go to Shoppng</a>
                                <a href="{{ route('cart.checkout') }}" class="checkout_btn">PROCEED TO CHECKOUT</a>
                                {{-- <button class="checkout_btn">PROCEED TO CHECKOUT</button> --}}
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
     
{{-- empty cart --}}

{{-- <script>
    $(document).on('click', 'emptyCart', function(){
        var cartid = $(this).data('cartid');
        var result = confirm("Are you sure you want to delete this cart item ?");
        if(result){
            $.ajax({
                headers:{

                }
            })
        }
    })
</script> --}}

        
@endsection
