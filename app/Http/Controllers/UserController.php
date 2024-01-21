<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // dashboard 
    public function Index(){
        $user_id=Auth::id();
        $orders = Order::where('user_id',$user_id)->get();
        return view('frontend.customer_dashboard.dashboard', compact('orders'));
    }
}
