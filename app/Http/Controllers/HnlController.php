<?php

namespace App\Http\Controllers;

use App\Jobtitle;
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
        if(Sentinel::check()){

            $jobtitles = Jobtitle::All();

            // Show the page
            return view('hnl.basicinfo.jobtitle', compact('jobtitles'));

        }else{
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
        }

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

        $days = array('월요일','화요일','수요일','목요일','금요일','토요일','일요일');
        $worknum = array('없음','매주','격주','월?회');
        $worktype = array('근무일','유급휴일','무급휴일','무급휴무일');

        if(Sentinel::check())

            return view('hnl.basicinfo.worktype', compact('days','worknum','worktype'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showTest()
    {


        if(Sentinel::check())
            return view('hnl.test') ;
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

}
