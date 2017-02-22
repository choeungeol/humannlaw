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
use App\Salary2;
use App\Salary3;
use App\Salary4;
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
        $payinfo = Payinfo::findOrFail($id);
        $searchp = Pinfo::findOrFail($id);

        $payitem1 = Payitem1::All();
        $payitem2 = Payitem2::All();
        $payitem3 = Payitem3::All();
        $payitem4 = Payitem4::All();

/*        $deletedRows = Salary1::where('pinfo_id', 1)->delete();
        $deletedRows = Salary2::where('pinfo_id', 1)->delete();
        $deletedRows = Salary3::where('pinfo_id', 1)->delete();
        $deletedRows = Salary4::where('pinfo_id', 1)->delete();*/
        if(Sentinel::check())

            return view('hnl.pinfo.payinfo', compact('pinfo','jobtitle','position','searchp','payinfo','payitem1','payitem2','payitem3','payitem4'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    public function insert_month_pay(Request $request)
    {
        $id = $request->id;
        $paymonth = $request->get('mpay');
        $non_taxable = $request->get('non_taxable');
        $tax_deduction = $request->get('tax_deduction');

        $payitem1 = Payitem1::All();
        $payitem2 = Payitem2::All();
        $payitem3 = Payitem3::All();
        $payitem4 = Payitem4::All();

        for ($i = 0; $i < count($payitem1); $i++) {
            $payitem_id1[] = $payitem1[$i]->id;
            $payitem_title1[] = $payitem1[$i]->title;
        }
        for ($i = 0; $i < count($payitem2); $i++) {
            $payitem_id2[] = $payitem2[$i]->id;
            $payitem_title2[] = $payitem2[$i]->title;
        }
        for ($i = 0; $i < count($payitem3); $i++) {
            $payitem_id3[] = $payitem3[$i]->id;
            $payitem_title3[] = $payitem3[$i]->title;
        }
        for ($i = 0; $i < count($payitem4); $i++) {
            $payitem_id4[] = $payitem4[$i]->id;
            $payitem_title4[] = $payitem4[$i]->title;
        }

        $pinfos = Pinfo::find($id);
        $worktype = $pinfos->worktype;

        $calcs[$worktype] = Calctable::where('type', '=', $worktype)->get();

        if ($calcs[$worktype][0]->total) {
            $caltotal = $calcs[$worktype][0]->total;
        } else {
            $caltotal = 0;
        }

        if ($caltotal == 0) {
            $normalpay = '';
        } else {
            $normalpay = $paymonth / $caltotal;
        }//통상시급

        if ($calcs[$worktype][0]->mtotal) {
            $cal = $calcs[$worktype][0]->mtotal;
        } else {
            $cal = 0;
        }

        $normal = $normalpay * $cal; //rlqht


        $pinfo = Pinfo::findOrFail($id)->payinfos;
        $pinfo->paymonth = $paymonth;
        $pinfo->non_taxable = $non_taxable;
        $pinfo->tax_deduction = $tax_deduction;
        $pinfo->overseas_taxable = $request->get('overseas_taxable');
        $pinfo->hour_pay = $normalpay;
        $pinfo->save();

        $sal1 = Salary1::where('pinfo_id','=',$id)->get();


        $test1 = $sal1[0]->title;
        $test2 = '';

 /*           for ($i = 0; $i < count($payitem_id1); $i++) {
                $salary1 = new Salary1([
                    'pinfo_id' => $id,
                    'payitem_id' => $payitem_id1[$i],
                    'title' => $payitem_title1[$i],
                ]);
                $salary1->save();
            }



        for ($i = 0; $i < count($payitem_id2); $i++) {
            $salary2 = new Salary2([
                'pinfo_id' => $id,
                'payitem_id' => $payitem_id2[$i],
                'title' => $payitem_title2[$i],
            ]);
            $salary2->save();
        }
        for ($i = 0; $i < count($payitem_id3); $i++) {
            $salary3 = new Salary3([
                'pinfo_id' => $id,
                'payitem_id' => $payitem_id3[$i],
                'title' => $payitem_title3[$i],
            ]);
            $salary3->save();
        }
        for ($i = 0; $i < count($payitem_id4); $i++) {
            $salary4 = new Salary4([
                'pinfo_id' => $id,
                'payitem_id' => $payitem_id4[$i],
                'title' => $payitem_title4[$i],
            ]);
            $salary4->save();
        }*/

            if (Sentinel::check())

                return Redirect::route('payinfo_view', $id)->with('success', Lang::get('groups/message.success.update'));

            else

                return Redirect::to('admin/signin')->with('error', 'You must be logged in!');

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
