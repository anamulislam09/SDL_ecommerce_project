<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index method 
    public function index(Request $request)
    {
        // $category = Category::all();
        // $brand = Brand::all();
        // $warehouse = Subcategory::all();
        
            $query = DB::table('products')->leftJoin('categories', 'products.category_id', 'categories.id')->leftJoin('subcategories', 'products.subcategory_id', 'subcategories.id')->leftJoin('brands', 'products.brand_id', 'brands.id');

            // if ($request->category_id) {
            //     $query->where('products.category_id', $request->category_id);
            // }
            // if ($request->brand_id) {
            //     $query->where('products.brand_id', $request->brand_id);
            // }
            // if ($request->warehouse_id) {
            //     $query->where('products.warehouse', $request->warehouse_id);
            // }
            // if($request->status==1){
            //     $query->where('products.status',1);
            // }elseif($request->status==0){
            //     $query->where('products.status',0);
            // }

            $data = $query->select('products.*', 'categories.category_name', 'subcategories.sub_category_name', 'brands.brand_name')->get();

        return view('admin.products.index', compact('data'));
    }

}
