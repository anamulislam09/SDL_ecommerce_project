<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pickuppoint;
use Illuminate\Http\Request;

class PickuppointController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  //  index pickup 
  public function index()
  {
    $data = Pickuppoint::orderBy('id', 'DESC')->get();
      return view('admin.pickup_point.index', compact('data'));
  }

    
    //  create pickup 
    public function create()
    {
        return view('admin.pickup_point.create');
    }

    //  store pickup 
    public function store(Request $request)
    {

        // using eloquent orm
        Pickuppoint::insert([
            'pickup_point_name' => $request->pickup_point_name,
            'pickup_point_address' => $request->pickup_point_address,

            'pickup_point_phone' => $request->pickup_point_phone,
            'pickup_point_phone_two' => $request->pickup_point_phone_two,
        ]);
        $notification = array('message' => 'Pickup added successfully.', 'alert_type' => 'success');
        return redirect()->route('pickup_point.index')->with($notification);
    }

    //  edit pickup 
    public function edit($id)
    {
        $data = Pickuppoint::findOrFail($id);
        return view('admin.pickup_point.edit', compact('data'));
    }

      //  Update pickup 
      public function update(Request $request)
      {
         $id = $request->id;
         $data = Pickuppoint::findOrFail($id);
          // using eloquent orm
          $data->update([
              'pickup_point_name' => $request->pickup_point_name,
              'pickup_point_address' => $request->pickup_point_address,
  
              'pickup_point_phone' => $request->pickup_point_phone,
              'pickup_point_phone_two' => $request->pickup_point_phone_two,
          ]);
          $notification = array('message' => 'Pickup updated successfully.', 'alert_type' => 'success');
          return redirect()->route('pickup_point.index')->with($notification);
      }

      public function destroy($id){
        $data = Pickuppoint::findOrFail($id);
        $data->delete();

        $notification = array('message' => 'Pickup_point deleted successfully.', 'alert_type' => 'success');
        return redirect()->route('pickup_point.index')->with($notification);
      }

}
