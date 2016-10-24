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

    public function showBasicInfo()
    {
        if(Sentinel::check())
            return view('hnl.basicinfo.basicinfo');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showJobtitle()
    {
        if(Sentinel::check())
            return view('hnl.basicinfo.jobtitle');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPayitem()
    {
        if(Sentinel::check())
            return view('hnl.basicinfo.payitem');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPaytype()
    {
        if(Sentinel::check())
            return view('hnl.basicinfo.paytype');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showWorktype()
    {
        if(Sentinel::check())
            return view('hnl.basicinfo.worktype');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
