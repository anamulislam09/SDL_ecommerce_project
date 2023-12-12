<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        return view('admin.category.index',compact('data'));
    }

    // create category 
    public function create(){
        return view('admin.category.create');
    }

    // store category 
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories|max:100',
            'category_image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $category_slug = Str::slug($request->category_name, '-');
        // Image upload start here
        $category_image = $request->category_image;
        $image_name = $category_slug . '.' . $category_image->getClientOriginalExtension();
        $category_image->move(public_path('files/category'), $image_name);
        $image_url = 'files/product/' . $image_name;

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => $category_slug,
            'category_image' => $image_url,
        ]);
        $notification = array('message' => 'Category added successfully.', 'alert_type' => 'success');
        return redirect()->route('category.index')->with($notification);
    }


}
