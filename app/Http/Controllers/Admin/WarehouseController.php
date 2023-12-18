<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show warehouse 
    public function index(){
        $data = Warehouse::orderBy('id', 'DESC')->get();
        return view('admin.warehouse.index', compact('data'));
    }

// create warehouse 
    public function create(){
        return view('admin.warehouse.create');
    }

    // store warehouse 
    public function store(Request $request){
        Warehouse::insert([
            'warehouse_name' => $request->warehouse_name,
            'warehouse_address' => $request->warehouse_address,
            'warehouse_phone' => $request->warehouse_phone,
        ]);
        $notification = array('message' => 'warehouse added successfully.', 'alert_type' => 'success');
        return redirect()->route('warehouse.index')->with($notification);
    }

     // edit warehouse
     public function edit($id){
        $data = Warehouse::findOrFail($id);
        return view('admin.warehouse.edit',compact('data'));
    }

     // update warehouse
     public function update(Request $request){
        $id = $request->id;
        $data = Warehouse::findOrFail($id);
        $data->update([
            'warehouse_name' => $request->warehouse_name,
            'warehouse_address' => $request->warehouse_address,
            'warehouse_phone' => $request->warehouse_phone,
        ]);
        $notification = array('message' => 'warehouse updated successfully.', 'alert_type' => 'success');
        return redirect()->route('warehouse.index')->with($notification);
    }

    // warehouse destroy
    public function destroy($id){
        $data = Warehouse::findOrFail($id);
        $data->delete();

        $notification = array('message' => 'warehouse deleted successfully.', 'alert_type' => 'success');
        return redirect()->route('warehouse.index')->with($notification);
    }
}
