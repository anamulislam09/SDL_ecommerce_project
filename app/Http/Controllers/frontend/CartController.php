<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function myCart(){
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('frontend.products.cart', compact('cart'));
    }

    // add to cart for quick view 
    public function addToCart(Request $request)
    {
        if (Auth::check()) {
        Cart::insert([
            'user_id' => Auth::id(),
            'product_id' => $request->id,
            'quantity' => $request->qty,
            'price' => $request->price,
           'size' => $request->size, 
           'color' => $request->color,
        ]);
        return response()->json('Add to cart Successfully!');
  } else {
            $notification = array('message' => 'Please login first !', 'alert_type' => 'error');
            return redirect()->back()->with($notification);
        }
    }

    public function destroy($id){
        $data =  Cart::findOrFail($id);
        $data->delete();
        $notification = array('message' => 'Remove product from cart successfully !', 'alert_type' => 'error');
        return redirect()->back()->with($notification);
    }

}
