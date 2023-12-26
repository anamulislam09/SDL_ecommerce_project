<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Show all category 
    public function index(){
        $data = Category::orderBy('id', 'DESC')->get();
        return view('admin.categories.category.index',compact('data'));
    }

    // create category 
    public function create(){
        return view('admin.categories.category.create');
    }

    // store category 
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories|max:100',
            'category_image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $category_slug = Str::slug($request->category_name, '-');
        // Image upload start here
        $image = $request->category_image;
        $image_name = $category_slug . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('files/category'), $image_name);
        $image_url = 'files/category/' . $image_name;

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => $category_slug,
            'category_image' => $image_url,
        ]);
        $notification = array('message' => 'Category added successfully.', 'alert_type' => 'success');
        return redirect()->route('category.index')->with($notification);
    }

    // create category 
    public function edit($id){
       $data =  Category::findOrFail($id);
       return view('admin.categories.category.edit', compact('data'));
    }

    // Update category 
    public function update(Request $request){
        $id = $request->id;
        // Using Querybuilder
        $data = Category::findOrFail($id);
        $data['category_name'] = $request->category_name;
        $data['category_image'] = $request->category_image;;
        $data['category_slug'] = Str::slug($request->category_name, '-');
      
        if ($request->category_image) {
            if (File::exists($request->old_image)) {
                unlink($request->old_image);
            }
            $slug = Str::slug($request->category_name, '-');
            $image = $request->category_image;
            $img_name = $slug . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('files/category'), $img_name);
            $img_url = 'files/category/' . $img_name;
            $data['category_image'] = $img_url;
        } else {
            $data['category_image'] = $request->old_image;
        }
        $data->save();
        $notification = array('message' => 'Category updated successfully.', 'alert_type' => 'success');
        return redirect()->route('category.index')->with($notification);
    }

    // create category 
    public function destroy($id){
        $data =  Category::findOrFail($id);
        $data->delete();

        $notification = array('message' => 'Category deleted successfully.', 'alert_type' => 'warning');
        return redirect()->route('category.index')->with($notification);

     }
    


}
