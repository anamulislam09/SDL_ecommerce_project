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
                          <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Add</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="product-details.html"><img src="{{ asset('frontend/img/shop/product/product-1.jpg')}}" alt=""></a></td>
                                    <td class="product-name"><a href="product-details.html">Bakix Furniture</a></td>
                                    <td class="product-price"><span class="amount">$130.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus">
                                            <form action="#">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="1">
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                    <td> <button class="t-y-btn t-y-btn-grey" type="submit">Add TO Cart</button></td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="product-details.html"><img src="{{ asset('frontend/img/shop/product/product-2.jpg')}}" alt=""></a></td>
                                    <td class="product-name"><a href="product-details.html">Sujon Chair Set</a></td>
                                    <td class="product-price"><span class="amount">$120.50</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus">
                                            <form action="#">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="1">
                                                    {{-- <div class="dec qtybutton"></div> --}}
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$120.50</span></td>
                                    <td> <button class="t-y-btn t-y-btn-grey" type="submit">Add TO Cart</button></td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Cart Area End-->
@endsection