<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show all orders
    public function index(Request $request)
    {
        // $query = DB::table('orders')->leftJoin('order_items', 'order_items.order_id', 'orders.id');

        // $data = $query->select('orders.*','order_items.product_id','order_items.quantity', 'order_items.order_id','order_items.price')->get();

        if ($request->ajax()) {
            $data = "";
            $query = DB::table('orders')->orderBy('id', 'DESC');

            if ($request->date) {
                $order_date = date('d-m-y', strtotime($request->date));
                $query->where('date', $order_date);
            }

            if ($request->status == 0) {
                $query->where('status', 0);
            } elseif ($request->status == 1) {
                $query->where('status', 1);
            } elseif ($request->status == 2) {
                $query->where('status', 2);
            } elseif ($request->status == 3) {
                $query->where('status', 3);
            } elseif ($request->status == 4) {
                $query->where('status', 4);
            }else{
               $query = DB::table('orders')->orderBy('id', 'DESC');
            }
            $data = $query->get();
            return DataTables::of($data)
                ->addIndexColumn()
                //status column start here
                ->editColumn('status', function ($row) {
                    if ($row->status == 0) {
                        return ' <span class="badge badge-secondary">pending</span>';
                    } elseif ($row->status == 1) {
                        return ' <span class="badge badge-secondary" >Received</span>';
                    } elseif ($row->status == 2) {
                        return ' <span class="badge badge-warning" >Shipped</span>';
                    } elseif ($row->status == 3) {
                        return ' <span class="badge badge-success" >Done</span>';
                    } elseif ($row->status == 4) {
                        return ' <span class="badge badge-secondary" >Return</span>';
                    } else {
                        return ' <span class="badge badge-danger" >Cancel</span>';
                    }
                })         //status column ends here
                ->addColumn('action', function ($row) {
                    $actionbtn = '
                    <a href="" class="btn btn-sm btn-primary" ><i class="fas fa-eye"></i></a> 
                    <a href="#" class="btn btn-sm btn-info edit" data-id="' . $row->id . '" data-toggle="modal" data-target="#editOrderModel"><i class="fas fa-edit"></i></a>
                    ';
                    return $actionbtn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        return view('admin.orders.index');
    }




    // edit order method 
    public function editOrder($id)
    {
        $data = DB::table('orders')->where('id', $id)->first();
        return view('admin.orders.edit', compact('data'));
    }

    // edit order method 
    public function updateStatus(Request $request)
    {
        $data = array();
        $data['status'] = $request->status;
        DB::table('orders')->where('id', $request->id)->update($data);

          $notification = array('message' => 'Order status successfully.', 'alert_type' => 'warning');
        return redirect()->route('order.index')->with($notification);
    }
}
