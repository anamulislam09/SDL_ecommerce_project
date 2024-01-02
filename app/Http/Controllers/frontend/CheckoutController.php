<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // dd($request);
        if (Auth::check()) {
           $order = Order::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'address' => $request->address,
                'country' => $request->country,
                'apportment' => $request->apportment,
                'district' => $request->district,
                'upozilla' => $request->upozilla,
                'post_code' => $request->postcode,
                'phone1' => $request->phone1,
                'phone2' => $request->phone2,
                'email' => $request->email,
                //    'message' => $request->color,
                'tracking_no' => 'anam' . rand(1111, 9999),

            ]);

            $cartItem = Cart::where('user_id', Auth::id())->get();
            foreach ($cartItem as $item) {
                OrderItem::insert([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'color' => $item->color,
                    'size' => $item->size,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                ]);
            }

            $cartItem = Cart::where('user_id', Auth::id())->delete();

            $notification = array('message' => 'Order place successfully !', 'alert_type' => 'success');
            return redirect()->back()->with($notification);
        }

        else{
            
        }
    }
}
