<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

use App\Http\Requests;

class HnlWorktypeController extends Controller
{
    public function index()
    {
        $days = array('월요일','화요일','수요일','목요일','금요일','토요일','일요일');
        $worknum = array('없음','매주','격주','월?회');
        $worktype = array('근무일','유급휴일','무급휴일','무급휴무일');
        $tabs = array([
            'title' => 'D',

        ]);
        $alphabet = array('D','E','F','G','H'.'I','J');

        $al = $alphabet;


        if(Sentinel::check())

            return view('hnl.basicinfo.worktype', compact('days','worknum','worktype'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
