<?php

namespace App\Http\Controllers;

use App\Jobtitle;
use App\Pinfo;
use App\Postitle;
use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class HnlWorkdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pinfo = Pinfo::all();
        $searchp = array();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();

        if(Sentinel::check())
            return view('hnl.work.workaday', compact('searchp','pinfo','jobtitle','position'));
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
        $searchp = Pinfo::findOrFail($id);
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();




        if(Sentinel::check())
            return view('hnl.work.workaday', compact('searchp','pinfo','jobtitle','position'));
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
