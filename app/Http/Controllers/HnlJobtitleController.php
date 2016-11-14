<?php

namespace App\Http\Controllers;

use App\Jobtitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class HnlJobtitleController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
            $jobtitles = new Jobtitle([
                'jobcode' => $request->get('jobcode'),
                'code' => $request->get('code'),
                'name' => $request->get('name'),
                'use' => $request->get('use'),
                'memo' => $request->get('memo'),
            ]);

            $jobtitles->save();

            return Redirect::to('hnl/basicinfo/jobtitle')->with('success', Lang::get('users/message.success.create'));


    }

}
