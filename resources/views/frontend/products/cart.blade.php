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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                        <th class="product-price">Color </th>
                                        <th class="product-price">sizS</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                            <td class="product-name"><a href="#">{{ $product->product_name }}</a></td>
                                            <td class="product-price"><span class="amount">{{ $item->price }}</span></td>
                                            <td class="product-color">
                                                <select name="color" id="">
                                                    <option value="" selected disabled>select color</option>
                                                    @foreach ($colors as $data)
                                                        <option value="{{ $item->color }}">
                                                            {{ $product->product_color }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="product-size"><span class="">{{ $product->price }}</span></td>
                                            <td class="product-quantity">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input id="qty"
                                                            type="text" name="qty" value="1" /></div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".product-quantity").keyup(function() {
                var qty = $('#qty').val();
            });
        })
    </script>
@endsection
