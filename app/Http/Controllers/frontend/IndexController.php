<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function logout(){
        Auth()->logout();
        $notification = array('message'=>'You are logout out','alert_type'=>'danger');
        return redirect()->back()->with($notification);
    }
}
