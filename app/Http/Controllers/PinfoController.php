<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class PinfoController extends Controller
{
    public function showPinfo()
    {
        if(Sentinel::check())
            return view('hnl.pinfo.pinfo');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPayinfo()
    {
        if(Sentinel::check())
            return view('hnl.pinfo.payinfo');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPcard()
    {
        if(Sentinel::check())
            return view('hnl.pinfo.pcard');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
