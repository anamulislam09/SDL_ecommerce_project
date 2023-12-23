<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;

class SliderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $data = Slider::get();
        return view('admin.settings.slider.index', compact('data'));
    }

    // create slider 
    public function create(){
        return view('admin.settings.slider.create');
    }

    // Store slider 
      // store category 
      public function store(Request $request){
        $request->validate([
            'slider_name' => 'required|unique:sliders|max:100',
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $slider_slug = Str::slug($request->slider_name, '-');
        // Image upload start here
        $image = $request->image;
        $image_name = $slider_slug . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('files/slider'), $image_name);
        $image_url = 'files/slider/' . $image_name;

        Slider::insert([
            'slider_name' => $request->slider_name,
            'image' => $image_url,
            'link' => $request->link,
            'status' => $request->status,
        ]);
        $notification = array('message' => 'Slider added successfully.', 'alert_type' => 'success');
        return redirect()->route('slider.index')->with($notification);
    }

        // edit slider 
        public function edit($id){
            $data =  Slider::findOrFail($id);
            // dd($data);
            return view('admin.settings.slider.edit', compact('data'));
         }

}
