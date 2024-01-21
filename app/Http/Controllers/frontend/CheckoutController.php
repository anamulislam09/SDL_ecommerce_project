<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // checkout 
    public function checkout()
    {
        $cart = Cart::where('user_id', Auth::id())->get();
        $total_price = 0;
        foreach ($cart as $item) {

            $total_price = $total_price + $item->price * $item->quantity;
        }
        return view('frontend.pages.checkout', compact('total_price'));
    }

    // place-order
    public function placeOrder(Request $request)
    {

        $cart = Cart::where('user_id', Auth::id())->get();
        $total_price = 0;
        foreach ($cart as $item) {

            $total_price = $total_price + $item->price * $item->quantity;
        }
        if (Auth::check()) {
            $order = array();
            $order['user_id'] = Auth::id();
            $order['name'] = $request->name;
            $order['address'] = $request->address;
            $order['country'] = $request->country;
            $order['apportment'] = $request->apportment;
            $order['district'] = $request->district;
            $order['upozilla'] = $request->upozilla;
            $order['post_code'] = $request->postcode;
            $order['phone1'] = $request->phone1;
            $order['phone2'] = $request->phone2;
            $order['email'] = $request->email;
            $order['subtotal'] = $total_price;
            $order['total'] = $total_price;
            $order['payment_type'] = $request->payment_type;
            $order['order_id'] = rand(10000, 999999);
            $order['date'] = date('d-m-y');
            $order['month'] = date('F');
            $order['year'] = date('Y');

            $order_id = DB::table('orders')->insertGetId($order);


                $cartItem = Cart::where('user_id', Auth::id())->get();
                $details= array();
                foreach ($cartItem as $item) {

                        $details['order_id'] = $order_id;
                        $details['product_id'] = $item->product_id;
                        $details['product_name'] = $item->product_name;
                        $details['color'] = $item->color;
                        $details['size'] = $item->size;
                        $details['quantity'] = $item->quantity;
                        $details['single_price'] = $item->price;
                        $details['subtotal_price'] = $item->price*$item->quantity;
                    DB::table('order_items')->insert($details);
                }

                $cartItem = Cart::where('user_id', Auth::id())->delete();

                $notification = array('message' => 'Order place successfully !', 'alert_type' => 'success');
                return redirect()->route('index')->with($notification);
            }

            else{

        }
    }
}
