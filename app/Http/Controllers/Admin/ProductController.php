<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Pickuppoint;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
            $query = DB::table('products')->leftJoin('categories', 'products.category_id', 'categories.id')->leftJoin('subcategories', 'products.subcategory_id', 'subcategories.id')->leftJoin('brands', 'products.brand_id', 'brands.id');

            $data = $query->select('products.*', 'categories.category_name', 'subcategories.sub_category_name', 'brands.brand_name')->get();

        return view('admin.products.index', compact('data'));
    }

    public function create(){
        $cats = Category::all();
        $brands = Brand::all();
        $pick_points = Pickuppoint::all();
        $warehouses = Warehouse::all();
        return view('admin.products.create', compact('cats', 'brands','pick_points', 'warehouses'));
    }

    // insert sub category category using ajax request
    public function subcategory(Request $request)
    {
        $categoryid = $request->post('categoryid');
        $subcategory = DB::table('subcategories')->where('category_id',$categoryid)->orderBy('sub_category_name', 'ASC')->get();
        $html = '<option value="" selected disabled>Select One</option>';
        foreach ($subcategory as $list) {
            $html .= '<option value="' . $list->id . '">' . $list->sub_category_name . '</option>';
        }
        echo $html;
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->product_name, '-');
        // Image upload start here
        $thumbnail = $request->product_thumbnail;
        $thumbnail_name = $slug . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('files/product'), $thumbnail_name);
        $thumbnail_url = 'files/product/' . $thumbnail_name;

        // multiple image ulpload 
        $images = array();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imageName = hexdec(uniqid()) . '.' .$image->getClientOriginalExtension();
                $image->move(public_path('files/product'), $imageName);
                array_push($images, $imageName);
            }
        }

        Product::insert([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'product_slug' => Str::slug($request->product_name, '-'),
            'product_code' => $request->product_code,
            'product_unit' => $request->product_unit,
            'product_tags' => $request->product_tags,
            'product_color' => $request->product_color,
            'product_size' => $request->product_size,
            'product_video' => $request->product_video,
            'purchase_price' => $request->purchase_price,
            'selling_price' => $request->selling_price,
            'descount_price' => $request->descount_price,
            'stock_quantity' => $request->stock_quantity,
            'warehouse' => $request->warehouse,
            'short_description' => $request->short_description,
            'product_description' => $request->product_description,
            'product_thumbnail' => $thumbnail_url,
            'images' => json_encode($images),
            'featured' => $request->featured,
            'product_slider' => $request->product_slider,
            'status' => $request->status,
            // 'trendy' => $request->trendy,
            'today_deal' => $request->today_deal,
            'cash_on_delivery' => $request->cash_on_delivery,
            'admin_id' => Auth::id(),
            'pickup_point_id' => $request->pickup_point_id,
            // 'date' => date('d-m-Y'),
            // 'month' => date('F'),

        ]);
        $notification = array('message' => 'Product added successfully.', 'alert_type' => 'success');
        return redirect()->route('product.index')->with($notification);
        // return redirect()->route('product.index')->with($notification);
    }

     // product edit method
     public function edit($id)
     {
         // using eloquent orm
         $data = Product::findOrFail($id);
         $cats = Category::all();
         $subcats = Subcategory::all();
         $brands = Brand::all();
         $pick_points = Pickuppoint::all();
         $warehouses = Warehouse::all();

         return view('admin.products.edit', compact('data', 'cats','subcats', 'brands', 'pick_points', 'warehouses'));
     }

  // Update Product 
  public function update(Request $request)
  {
    // dd($request);
      $id = $request->id;
      $slug = Str::slug($request->product_name, '-');
      // Image upload start here
      $thumbnail = $request->product_thumbnail;
      $thumbnail_name = $slug . '.' . $thumbnail->getClientOriginalExtension();
      $thumbnail->move(public_path('files/product'), $thumbnail_name);
      $thumbnail_url = 'files/product/' . $thumbnail_name;

              // multiple image ulpload 
              $images = array();
              if ($request->hasFile('images')) {
                  foreach ($request->file('images') as $key => $image) {
                      $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                      $image->move(public_path('files/product'), $imageName);
                      array_push($images, $imageName);
                  }
              }

      // Using Querybuilder
      $data = Product::findOrFail($id);
      $data['category_id'] = $request->category_id;
      $data['subcategory_id'] = $request->subcategory_id;
      $data['brand_id'] = $request->brand_id;
      $data['product_name'] = $request->product_name;
      $data['product_slug'] = $slug;
      $data['product_code'] = $request->product_code;
      $data['product_unit'] = $request->product_unit;
      $data['product_tags'] = $request->product_tags;
      $data['product_color'] = $request->product_color;
      $data['product_size'] = $request->product_size;
      $data['product_video'] = $request->product_video;
      $data['purchase_price'] = $request->purchase_price;
      $data['selling_price'] = $request->selling_price;
      $data['descount_price'] = $request->descount_price;
      $data['stock_quantity'] = $request->stock_quantity;
      $data['warehouse'] = $request->warehouse;
      $data['short_description'] = $request->short_description;
      $data['product_description'] = $request->product_description;
      $data['product_thumbnail'] = $thumbnail_url;
      $data['images'] = json_encode($images);
      $data['featured'] = $request->featured;
      $data['product_slider'] = $request->product_slider;
      $data['status'] = $request->status;
      $data['today_deal'] = $request->today_deal;
      $data['cash_on_delivery'] = $request->cash_on_delivery;
      $data['pickup_point_id'] = $request->pickup_point_id;

      $data->save();
      $notification = array('message' => 'Product updated successfully.', 'alert_type' => 'success');
      return redirect()->route('product.index')->with($notification);
  }


      // create category 
    public function destroy($id)
    {
        $data =  Product::findOrFail($id);
        $data->delete();

        $notification = array('message' => 'Product deleted successfully.', 'alert_type' => 'danger');
        return redirect()->route('product.index')->with($notification);
    }
}
