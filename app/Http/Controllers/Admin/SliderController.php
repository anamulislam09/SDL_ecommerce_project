<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Slider::get();
        return view('admin.settings.slider.index', compact('data'));
    }

    // create slider 
    public function create()
    {
        return view('admin.settings.slider.create');
    }

    // Store slider 
    // store category 
    public function store(Request $request)
    {
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
    public function edit($id)
    {
        $data =  Slider::findOrFail($id);
        return view('admin.settings.slider.edit', compact('data'));
    }

    //  update slider 
    public function update(Request $request)
    {
        // using eloquent orm
        $id = $request->id;
        $data = Slider::findOrFail($id);
        $data['slider_name'] = $request->slider_name;
        $data['link'] = $request->link;
        $data['status'] = $request->status;

        // Image upload start here
        if ($request->image) {
            if (File::exists($request->old_image)) {
                unlink($request->old_image);
            }
            $slug = Str::slug($request->slider_name, '-');
            $image = $request->image;
            $img_name = $slug . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('files/slider'), $img_name);
            $img_url = 'files/slider/' . $img_name;
            $data['image'] = $img_url;
        } else {
            $data['image'] = $request->old_image;
        }
        // dd($data);
        $data->save();

        $notification = array('message' => 'Slider Updated successfully.', 'alert_type' => 'success');
        return redirect()->route('slider.index')->with($notification);
    }

    // delete slider 

    public function destroy($id){
        $data = Slider::findOrFail($id);
        $data->delete();

        $notification = array('message' => 'Slider deleted successfully.', 'alert_type' => 'warning');
        return redirect()->route('slider.index')->with($notification);
    
    }
}
