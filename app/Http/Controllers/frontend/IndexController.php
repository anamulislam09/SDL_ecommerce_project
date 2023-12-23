<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function logout(){
        Auth()->logout();
        $notification = array('message'=>'You are logout out','alert_type'=>'danger');
        return redirect()->back()->with($notification);
    }

    // index 
    public function index(){
        $cats = Category::get();
        $slide_product = Product::where('product_slider', 1)->get();
        $today_deal = Product::where('today_deal', 1)->get();
        return view('frontend.index', compact('cats','slide_product','today_deal'));
    }

    // wishlist 
    public function wishlist(){
        return view('frontend.pages.wishlist');
    }

    // products 
    public function products(){
        return view('frontend.products.products');
    }

    // blog 
    public function blog(){
        return view('frontend.pages.blog');
    }
    // about 
    public function about(){
        return view('frontend.pages.about');
    }

    // contact 
    public function contact(){
        return view('frontend.pages.contact');
    }


}
