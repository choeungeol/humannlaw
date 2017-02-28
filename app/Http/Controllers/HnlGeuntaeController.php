<?php

namespace App\Http\Controllers;

use App\Extraworkadd;
use App\Geuntaeadd;
use App\Jobtitle;
use App\Pinfo;
use App\Postitle;
use Sentinel;
use Redirect;
use App\Addextrawork;
use App\Geuntaededuct;
use App\Vacation;
use Illuminate\Http\Request;

use App\Http\Requests;

class HnlGeuntaeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinfo = Pinfo::all();
        $geuntae = Geuntaededuct::all();
        $addextrawork = Addextrawork::all();
        $vacation = Vacation::all();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();


        $geuntaeadd = array();
        $extraworkadd = array();
        $vacationadd = array();
        $id = '';
        $searchp = array();

        if(Sentinel::check())
            return view('hnl.work.addwork', compact('geuntae','addextrawork','vacation','geuntaeadd','extraworkadd','vacationadd','searchp','id','pinfo','jobtitle','position'));
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

        $id = $request->id;

        if($request->get('papply') === null) {
            $papply = 0;
        }else{
            $papply = $request->get('papply');
        }

        $gaddtable = new Geuntaeadd([
            'pinfo_id' => $request->id,
            'geuntae_title' => $request->get('gtitle'),
            'use_date' => $request->get('udate'),
            'pay_apply' => $papply,
            'minus_timepay' => $request->get('mpaytime'),
            'minus_time' => $request->get('mtime'),
            'minus_pay' => $request->get('mpay'),
        ]);
        $gaddtable->save();

        $test = '';

        if (Sentinel::check())

            return Redirect::route('addwork_view', $id);

        else

            return Redirect::to('admin/signin')->with('error', 'You must be logged in!');

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
        $geuntae = Geuntaededuct::all();
        $addextrawork = Addextrawork::all();
        $vacation = Vacation::all();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();

        $searchp = Pinfo::findOrFail($id);
        $geuntaeadd = Geuntaeadd::where('pinfo_id','=',$id)->get();
/*        $extraworkadd = Extraworkadd::where('pinfo_id','=',$id)->get();
        $vacationadd = Vacation::where('pinfo_id','=',$id)->get();*/

        if(Sentinel::check())
            return view('hnl.work.addwork', compact('geuntae','addextrawork','vacation','geuntaeadd','extraworkadd','vacationadd','searchp','id','pinfo','jobtitle','position'));
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
