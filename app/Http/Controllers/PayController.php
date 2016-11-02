<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class PayController extends Controller
{
    public function showPayManager()
    {
        if(Sentinel::check())
            return view('hnl.pay.pmanage');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
