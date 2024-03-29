@extends('layouts.app')
@section('frontend_content')

<!-- checkout-area start -->
<section class="checkout-area pb-70">
    <div class="container">
        <h3 class="py-3 text-center px-3 "> <caption>Billing Information</caption></h3>
        <form action="{{route('cart.placeorder')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
               <div class="card">
                <div class="card-body">
                        <div class="checkbox-form">
                            <h3>Shipping address</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Full Name <span class="required">*</span></label>
                                        <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Enter your full name" required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select name="country" required>
                                            <option value="" selected disabled>Select once</option>
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="algeria">Algeria</option>
                                            <option value="afghanistan">Afghanistan</option>
                                            <option value="ghana">Ghana</option>
                                            <option value="albania">Albania</option>
                                            <option value="bahrain">Bahrain</option>
                                            <option value="colombia">Colombia</option>
                                            <option value="dominican republic">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <textarea name="address" id="" class="form-control" placeholder=" House no./ street/ area" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input type="text" name="apportment" placeholder="Apartment or unit (optional)" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>District <span class="required">*</span></label>
                                        <input type="text" name="district" placeholder="District"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Upozilla <span class="required">*</span></label>
                                        <input type="text" name="upozilla" placeholder="Upozilla" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" name="postcode" placeholder="Postcode / Zip" required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" name="email" value="{{Auth::user()->email}}" placeholder="Enter Valid email" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="phone1" placeholder="Enter valid phone number" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Another Phone(optional) <span class="required"></span></label>
                                        <input type="text" name="phone2" placeholder="Phone number 2" />
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <div id="cbox_info" class="checkout-form-list create-account">
                                        <p>Create an account by entering the information below. If you are a returning
                                            customer please login at the top of the page.</p>
                                        <label>Account password <span class="required">*</span></label>
                                        <input type="password" placeholder="password" />
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Ship to a different address?</label>
                                        <input id="ship-box" type="checkbox" />
                                    </h3>
                                </div>
                                <div id="ship-box-info">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                    <option value="volvo">bangladesh</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
               </div>
                <div class="col-lg-6">
                    <div class="your-order mb-30 ">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead> 
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">{{$total_price}}</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="shipping" />
                                                    <label>
                                                        Flat Rate: <span class="amount">$7.00</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="shipping" />
                                                    <label>Free Shipping:</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">{{$total_price}}</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="payment-method">
                           <div class="row">
                            <div class="form-group col-md-4">
                                <label for="">Hand cash</label>
                                <input type="radio" name="payment_type" value="Hand cash" id="" checked>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="">Paypal</label>
                                <input type="radio" name="payment_type" value="Paypal" id="" >
                        </div>
                        <div class="form-group col-md-4">
                                <label for="">sslcommerz</label>
                                <input type="radio" name="payment_type" value="sslcommerz" id="">
                        </div>
                           </div>
                            <div class="order-button-payment mt-20">
                            <button type="submit" class="t-y-btn t-y-btn-grey">Place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- checkout-area end -->

@endsection