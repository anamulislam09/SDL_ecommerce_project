<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function AddToCart($id)
    {
        if (Auth::check()) {
            // $check = DB::table('wishlists')->where('product_id',$id)->where('user_id', Auth::id())->first();
            $check = Cart::where('product_id', $id)->where('user_id', Auth::id())->first();
            if ($check) {
                $notification = array('message' => 'Already have it on your wishlist !', 'alert_type' => 'error');
                return redirect()->back()->with($notification);
            } else {
                // $product = Product::find($request->id);
                Cart::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $id
                ]);
                // $notification = array('message' => 'Product added on wishlist !', 'alert_type' => 'success');
                return response()->json('Add to cart Successfully!');

                // return redirect()->back()->with($notification);
            }
        } else {
            $notification = array('message' => 'Please login first !', 'alert_type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
