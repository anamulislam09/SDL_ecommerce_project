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
        return view('frontend.pages.cart', compact('cart'));
    }

    // add to cart for quick view 
    public function addToCart(Request $request)
    {
        if (Auth::check()) {
        Cart::insert([
            'user_id' => Auth::id(),
            'product_id' => $request->id,
            'product_name' => $request->product_name,
            'quantity' => $request->qty,
            'price' => $request->price,
           'size' => $request->size, 
           'color' => $request->color,
        ]);
        return response()->json('Add to cart Successfully!');
  } else {
            return response()->json('Please login first !');
        }
    }

    // clear cart 
    public function clearCartItem(){
        $userId = Auth()->id();
        Cart::where('user_id', $userId)->delete();
        $notification = array('message' => 'Cart empty successfully !', 'alert_type' => 'error');
        return redirect()->back()->with($notification);
    }
    
    // delete cart 
    public function destroy($id){
        $data =  Cart::findOrFail($id);
        $data->delete();
        $notification = array('message' => 'Remove product from cart successfully !', 'alert_type' => 'error');
        return redirect()->back()->with($notification);
    }

}
