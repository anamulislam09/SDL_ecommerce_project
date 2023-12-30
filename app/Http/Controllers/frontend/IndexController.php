<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function logout(){
        Auth()->logout();
        $notification = array('message'=>'You are logout out','alert_type'=>'warning');
        return redirect()->back()->with($notification);
    }

    // index 
    public function index(){
        $cats = Category::get();
        $slider = Slider::where('status', 1)->get();
        $today_deal = Product::where('today_deal', 1)->where('status', 1)->get();
        
        $sales = Product::where('status', 1)->get();
        // $computer = Product::where('category_id', 3)->where('status', 1)->get();
        // $phones = Product::where('category_id', 2)->where('status', 1)->get();
        // $phones_deal = Product::where('category_id', 3)->where('today_deal', 1)->where('status', 1)->first();
        return view('frontend.index', compact('cats','slider','today_deal','sales',));
    }

    // wishlist 
    public function wishlist(){
        return view('frontend.pages.wishlist');
    }

    // show all products 
    public function products()
    {
        $data = Product::where('status', 1)->get();
        return view('frontend.products.products', compact('data'));
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
