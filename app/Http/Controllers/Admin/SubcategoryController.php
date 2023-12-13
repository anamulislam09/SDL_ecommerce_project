<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SubcategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show all category 
    public function index()
    {
        $data = DB::table('subcategories')->leftJoin('categories', 'subcategories.category_id', 'categories.id')->select('subcategories.*', 'categories.category_name')->orderBy('id','DESC')->get();
        return view('admin.categories.subcategory.index', compact('data'));
    }

    // create category 
    public function create()
    {
        $data = Category::get();
        return view('admin.categories.subcategory.create', compact('data'));
    }

    // store category 
    public function store(Request $request)
    {
        $request->validate([
            'sub_category_name' => 'required|unique:subcategories|max:100',
        ]);

        $sub_category_slug = Str::slug($request->sub_category_name, '-');
        Subcategory::insert([
            'category_id' => $request->category_id,
            'sub_category_name' => $request->sub_category_name,
            'sub_category_slug' => $sub_category_slug,
        ]);
        $notification = array('message' => 'SubCategory added successfully.', 'alert_type' => 'success');
        return redirect()->route('subcategory.index')->with($notification);
    }
    // category edit method
    public function edit($id)
    {
        // using eloquent orm
        $data = SubCategory::findOrFail($id);
        $cats = Category::all();
        return view('admin.categories.subcategory.edit', compact('data', 'cats'));
    }

    // Update category 
    public function update(Request $request)
    {
        $id = $request->id;
        // Using Querybuilder
        $data = Subcategory::findOrFail($id);
        $data['category_id'] = $request->category_id;
        $data['sub_category_name'] = $request->sub_category_name;
        $data['sub_category_slug'] = Str::slug($request->sub_category_name, '-');
        $data->save();
        $notification = array('message' => 'SubCategory updated suc
        cessfully.', 'alert_type' => 'success');
        return redirect()->route('subcategory.index')->with($notification);
    }

    // create category 
    public function destroy($id)
    {
        $data =  Subcategory::findOrFail($id);
        $data->delete();

        $notification = array('message' => 'SubCategory deleted successfully.', 'alert_type' => 'warning');
        return redirect()->route('subcategory.index')->with($notification);
    }
}
