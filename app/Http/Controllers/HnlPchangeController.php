<?php

namespace App\Http\Controllers;

use App\Jobtitle;
use App\Monthsalaryvalue;
use App\Payinfo;
use App\Payitem1;
use App\Payitem2;
use App\Payitem3;
use App\Payitem4;
use App\Pinfo;
use App\Postitle;
use Sentinel;
use Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;

class HnlPchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinfo = Pinfo::all();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();
        $searchp = array();
        $payinfo = array();
        $payitem1 = Payitem1::All();
        $payitem2 = Payitem2::All();
        $payitem3 = Payitem3::All();
        $payitem4 = Payitem4::All();
        $getp = array();
        $id = '';
        $nw = array();
        $sa = array();
        $bf = array();
        $ca = array();


        if(Sentinel::check())
            return view('hnl.pay.pchange', compact('pinfo','jobtitle','position','searchp','payinfo','payitem1','payitem2','payitem3','payitem4','id','nw','sa','bf','ca','getp'));
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
        $payinfo = Payinfo::findOrFail($id);
        $searchp = Pinfo::findOrFail($id);

        $payitem1 = Payitem1::All();
        $payitem2 = Payitem2::All();
        $payitem3 = Payitem3::All();
        $payitem4 = Payitem4::All();


        $getpitems = Monthsalaryvalue::where('pinfo_id','=', $id)->orderBy('created_at', 'desc')->first();
        $nw = json_decode($getpitems->normal_wage);
        $sa = json_decode($getpitems->statutory_allowance);
        $bf = json_decode($getpitems->benefits);
        $ca = json_decode($getpitems->commit_allowance);

        $getpa = Monthsalaryvalue::where('pinfo_id','=',$id)->get();

        for($i=0; $i<count($getpa); $i++){
            $nw_array[] = $getpa[$i]->normal_wage;
            $sa_array[] = $getpa[$i]->statutory_allowance;
            $bf_array[] = $getpa[$i]->benefits;
            $ca_array[] = $getpa[$i]->commit_allowance;
        }

        if(Sentinel::check())

            return view('hnl.pay.pchange', compact('pinfo','jobtitle','position','searchp','payinfo','payitem1','payitem2','payitem3','payitem4','id','nw','sa','bf','ca','getp'));

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
