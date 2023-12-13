<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Show all Brand 
    public function index(){
        $data = Brand::orderBy('id', 'DESC')->get();
        return view('admin.categories.brand.index',compact('data'));
    }

    // Show all Brand 
    public function create(){
        return view('admin.categories.brand.create');
    }


       // store Brand 
       public function store(Request $request){
        $request->validate([
            'brand_name' => 'required|unique:brands|max:100',
            'brand_image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $brand_slug = Str::slug($request->brand_name, '-');
        // Image upload start here
        $image = $request->brand_image;
        $image_name = $brand_slug . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('files/brand'), $image_name);
        $image_url = 'files/brand/' . $image_name;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => $brand_slug,
            'brand_image' => $image_url,
        ]);
        $notification = array('message' => 'Brand added successfully.', 'alert_type' => 'success');
        return redirect()->route('brand.index')->with($notification);
    }

     // edit Brand 
     public function edit($id){
        $data =  Brand::findOrFail($id);
        return view('admin.categories.brand.edit', compact('data'));
     }
 
     // Update Brand 
      // Update category 
    public function update(Request $request){
        $id = $request->id;
        // Using Querybuilder
        $data = Brand::findOrFail($id);
        $data['brand_name'] = $request->brand_name;
        $data['brand_image'] = $request->brand_image;;
        $data['brand_slug'] = Str::slug($request->brand_name, '-');
      
        if ($request->brand_image) {
            if (File::exists($request->old_image)) {
                unlink($request->old_image);
            }
            $slug = Str::slug($request->brand_name, '-');
            $image = $request->brand_image;
            $img_name = $slug . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('files/brand'), $img_name);
            $img_url = 'files/brand/' . $img_name;
            $data['brand_image'] = $img_url;
        } else {
            $data['brand_image'] = $request->old_image;
        }
        $data->save();
        $notification = array('message' => 'Brand updated successfully.', 'alert_type' => 'success');
        return redirect()->route('brand.index')->with($notification);
    }

     // Brand delete
     public function destroy($id){
        $data =  Brand::findOrFail($id);
        $data->delete();

        $notification = array('message' => 'Brand deleted successfully.', 'alert_type' => 'warning');
        return redirect()->route('brand.index')->with($notification);

     }


}
