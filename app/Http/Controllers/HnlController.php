<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class HnlController extends Controller
{
    public function showHnl()
    {
        if(Sentinel::check())
            return view('hnl.index');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

}
