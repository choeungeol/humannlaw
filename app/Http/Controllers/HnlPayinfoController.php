<?php

namespace App\Http\Controllers;

use App\Jobtitle;
use App\Pinfo;
use App\Postitle;
use Illuminate\Support\Facades\Redirect;
use Sentinel;
use Illuminate\Http\Request;


use App\Http\Requests;

class HnlPayinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($searchp = null)
    {
        $pinfo = Pinfo::all();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();
        $searchp = $searchp;

        if(Sentinel::check())
            return view('hnl.pinfo.payinfo', compact('pinfo','jobtitle','position','searchp'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pinfo = Pinfo::all();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();
        $searchp = Pinfo::findOrFail($id);

        if(Sentinel::check())

            return view('hnl.pinfo.payinfo', compact('pinfo','jobtitle','position','searchp'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
