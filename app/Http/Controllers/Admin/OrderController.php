<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show all orders
    public function index(){
        $query = DB::table('orders')->leftJoin('order_items', 'order_items.order_id', 'orders.id');

        $data = $query->select('orders.*','order_items.product_id','order_items.quantity', 'order_items.order_id','order_items.price')->get();
        // dd($data);
        return view('admin.orders.index', compact( 'data'));
    }
}
