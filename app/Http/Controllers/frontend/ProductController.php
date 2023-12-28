<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Review;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // show productdetails 
    public function productDetails($slug)
    {
        $data = Product::where('product_slug', $slug)->first();
        $review = Review::where('product_id', $data->id)->orderBy('id', 'DESC')->get();
        $reletedProduct = Product::where('category_id', $data->category_id)->orderBy('id', 'DESC')->limit(10)->get();
        $brand = Brand::get();
        return view('frontend.products.product-details' , compact('data', 'review', 'reletedProduct','brand'));
    }

    // show productQuickView 
    public function productQuickView($id)
    {
        $data = Product::where('id', $id)->first();
        // return json_decode('dskfg');
        $review = Review::where('product_id', $id)->orderBy('id', 'DESC')->get();
        return view('frontend.products.quickview', compact('data', 'review'));
    }

    // AddWishlist route 
    public function AddWishlist($id)
    {
        if (Auth::check()) {
            // $check = DB::table('wishlists')->where('product_id',$id)->where('user_id', Auth::id())->first();
            $check = Wishlist::where('product_id', $id)->where('user_id', Auth::id())->first();
            if ($check) {
                $notification = array('message' => 'Already have it on your wishlist !', 'alert_type' => 'error');
                return redirect()->back()->with($notification);
            } else {
                // $data=array();
                // $data['product_id'] = $id;
                // $data['user_id'] = Auth::id();
                // DB::table('wishlists')->insert($data);
   
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $id
                ]);
   
                $notification = array('message' => 'Product added on wishlist !', 'alert_type' => 'success');
                return redirect()->back()->with($notification);
            }
        } else {
            $notification = array('message' => 'Please login first !', 'alert_type' => 'error');
            return redirect()->back()->with($notification);
        }

    }
}
