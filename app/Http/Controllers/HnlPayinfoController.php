<?php

namespace App\Http\Controllers;

use App\Calctable;
use App\Jobtitle;
use App\Payinfo;
use App\Payitem1;
use App\Payitem2;
use App\Payitem3;
use App\Payitem4;
use App\Pinfo;
use App\Postitle;
use App\Salary1;
use Illuminate\Support\Facades\Lang;
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


        if(Sentinel::check())
            return view('hnl.pinfo.payinfo', compact('pinfo','jobtitle','position','searchp','payinfo','payitem1','payitem2','payitem3','payitem4'));
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
        $salary1 = Salary1::findOrFail($id);
        $payinfo = Payinfo::findOrFail($id);
        $searchp = Pinfo::findOrFail($id);

        $payitem1 = Payitem1::All();
        $payitem2 = Payitem2::All();
        $payitem3 = Payitem3::All();
        $payitem4 = Payitem4::All();

        if(Sentinel::check())

            return view('hnl.pinfo.payinfo', compact('pinfo','jobtitle','position','searchp','payinfo','payitem1','payitem2','payitem3','payitem4','salary1'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    public function insert_month_pay(Request $request)
    {
        $id = $request->id;
        $paymonth = $request->get('mpay');
        $non_taxable = $request->get('non_taxable');
        $tax_deduction = $request->get('tax_deduction');

        $pinfos = Pinfo::find($id);
        $worktype = $pinfos->worktype;

        $calcs[$worktype] = Calctable::where('type','=',$worktype)->get();

        if($calcs[$worktype][0]->total){
            $caltotal = $calcs[$worktype][0]->total;
        }else{
            $caltotal = 0;
        }

        $salary1 = Salary1::where('pinfo_id', '===', $id);
        if($caltotal == 0){
            $normalpay = '';
        }else{
            $normalpay = $paymonth / $caltotal;
        }

        $pinfo = Pinfo::findOrFail($id)->payinfos;
        $pinfo->paymonth = $paymonth;
        $pinfo->non_taxable = $non_taxable;
        $pinfo->tax_deduction = $tax_deduction;
        $pinfo->overseas_taxable = $request->get('overseas_taxable');
        $pinfo->hour_pay = $normalpay;
        $pinfo->save();


        if(Sentinel::check())

            return Redirect::route('payinfo_view',$id)->with('success', Lang::get('groups/message.success.update'));

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
