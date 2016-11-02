<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class WorkController extends Controller
{
    public function showAddwork()
    {
        if(Sentinel::check())
            return view('hnl.work.addwork');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showWorkADay()
    {
        if(Sentinel::check())
            return view('hnl.work.workaday');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showWorkATime()
    {
        if(Sentinel::check())
            return view('hnl.work.workatime');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showYearOff()
    {
        if(Sentinel::check())
            return view('hnl.work.yearoff');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
