<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class RetireController extends Controller
{
    public function showRetireCalc()
    {
        if(Sentinel::check())
            return view('hnl.retire.rcalc');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showRetireinfo()
    {
        if(Sentinel::check())
            return view('hnl.retire.rinfo');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showRetireReceipt()
    {
        if(Sentinel::check())
            return view('hnl.retire.rreceipt');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
