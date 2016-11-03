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

    public function showPayChange()
    {
        if(Sentinel::check())
            return view('hnl.pay.pchange');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPayList()
    {
        if(Sentinel::check())
            return view('hnl.pay.plist');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPayReceipt()
    {
        if(Sentinel::check())
            return view('hnl.pay.preceipt');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPayChangeConfirm()
    {
        if(Sentinel::check())
            return view('hnl.pay.pchangec');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
