<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // shoe productdetails 

    public function productDetails($slug)
    {
        $data = Product::where('product_slug', $slug)->first();
        return view('frontend.products.product-details' , compact('data'));

    }
}
