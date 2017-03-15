<?php

namespace App\Http\Controllers;

use App\Calctable;
use App\Jobtitle;
use App\Monthsalaryvalue;
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
use Carbon\Carbon;
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
        $mtotal = '';
        $mbreak = '';
        $mover = '';
        $mnight = '';
        $mwwork = '';
        $mwover = '';
        $mwnight = '';
        $mwbt = '';
        $id = '';
        $nw = array();
        $sa = array();
        $bf = array();
        $ca = array();
        $test = '';


        if(Sentinel::check())
            return view('hnl.pinfo.payinfo', compact('pinfo','jobtitle','position','searchp','payinfo','payitem1','payitem2','payitem3','payitem4','mtotal','mbreak','id','nw','sa','bf','ca','mover','mnight','mwwork','mwover','mwnight','mwbt','test'));
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

        $getsession = (array)$GLOBALS['request']->session()->all();

        if(count($getsession) > 5){
            $mtotal = $getsession['mtotal'];
            $mbreak = $getsession['mbreak'];
            $mover = $getsession['mover'];
            $mnight = $getsession['mnight'];
            $mwwork = $getsession['mwwork'];
            $mwover = $getsession['mwover'];
            $mwnight = $getsession['mwnight'];
            $mwbt = $getsession['mwbt'];

        }else{
            $mtotal = '';
            $mbreak = '';
            $mover = '';
            $mnight = '';
            $mwwork = '';
            $mwover = '';
            $mwnight = '';
            $mwbt = '';
        }

        $getpitems = Monthsalaryvalue::where('pinfo_id','=', $id)->orderBy('created_at', 'desc')->first();

        $test = json_decode($getpitems->normal_wage);

        $nw = (object)json_decode($getpitems->normal_wage);
        $sa = (object)json_decode($getpitems->statutory_allowance);
        $bf = (object)json_decode($getpitems->benefits);
        $ca = (object)json_decode($getpitems->commit_allowance);


        /*        $deletedRows = Salary1::where('pinfo_id', 1)->delete();
                $deletedRows = Salary2::where('pinfo_id', 1)->delete();
                $deletedRows = Salary3::where('pinfo_id', 1)->delete();
                $deletedRows = Salary4::where('pinfo_id', 1)->delete();*/

        if(Sentinel::check())

            return view('hnl.pinfo.payinfo', compact('pinfo','jobtitle','position','searchp','payinfo','payitem1','payitem2','payitem3','payitem4','mtotal','mbreak','id','nw','sa','bf','ca','mover','mnight','mwwork','mwover','mwnight','mwbt','test'));

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

        $calc = array();

        for($i=0; $i < count($calcs); $i++){
            $calc[] = $calcs[$worktype][0]->mtotal;
            $calc[] = $calcs[$worktype][0]->mbreak;
            $calc[] = $calcs[$worktype][0]->mover;
            $calc[] = $calcs[$worktype][0]->mnight;
            $calc[] = $calcs[$worktype][0]->mwwork;
            $calc[] = $calcs[$worktype][0]->mwover;
            $calc[] = $calcs[$worktype][0]->mwnight;
            $calc[] = $calcs[$worktype][0]->mwbt;
        }

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

        for($i=0; $i < count($calc); $i++){
            $paycalc[] = $normalpay * $calc[$i];
        }


        $mtotal = $normalpay * $calc[0]; //기본급
        $mbreak = $normalpay * $calc[1]; //주휴수당
        $mover = $normalpay * $calc[2]; // 연장수당
        $mnight = $normalpay * $calc[3]; // 야간수당
        $mwwork = $normalpay * $calc[4]; // 휴일수당
        $mwover = $normalpay * $calc[5]; // 휴일연장
        $mwnight = $normalpay * $calc[6]; // 휴일야간
        $mwbt = $normalpay * $calc[7]; // 연차수당

        $pinfo = Pinfo::findOrFail($id)->payinfos;
        $pinfo->paymonth = $paymonth;
        $pinfo->non_taxable = $non_taxable;
        $pinfo->tax_deduction = $tax_deduction;
        $pinfo->overseas_taxable = $request->get('overseas_taxable');
        $pinfo->hour_pay = $normalpay;
        $pinfo->save();

            if (Sentinel::check())

                return Redirect::route('payinfo_view', $id)
                    ->with('mtotal',$mtotal)
                    ->with('mbreak',$mbreak)
                    ->with('mover',$mover)
                    ->with('mnight',$mnight)
                    ->with('mwwork',$mwwork)
                    ->with('mwover',$mwover)
                    ->with('mwnight',$mwnight)
                    ->with('mwbt',$mwbt)
                    ->with('id',$id);

            else

                return Redirect::to('admin/signin')->with('error', 'You must be logged in!');

    }

    public function insert_payitem(Request $request){

        $id = $request->id;
        $pchange = $request->is_another;

        $payitem1 = Payitem1::All();
        $payitem2 = Payitem2::All();
        $payitem3 = Payitem3::All();
        $payitem4 = Payitem4::All();

         for($i=0; $i < count($payitem1); $i++){

             $atype[] = $request->get('inputA'.$payitem1[$i]->id);

             $payitem_id1[] = $payitem1[$i]->id;
             $payitem_title1[] = $payitem1[$i]->title;

             if($payitem1[$i]->use_this === '0'){
/*                 $a[] = $atype[$i] + ;*/
             }else{

             }

             $arra[] = array('payitem_id' => $payitem_id1[$i] ,'title' => $payitem_title1[$i], 'price' => $atype[$i]);

        };

        $sal1 = json_encode($arra);

        for($i=0; $i < count($payitem2); $i++){

            $btype[] = $request->get('inputB'.$payitem2[$i]->id);

            $payitem_id2[] = $payitem2[$i]->id;
            $payitem_title2[] = $payitem2[$i]->title;

            $arrb[] = array('payitem_id' => $payitem_id2[$i] ,'title' => $payitem_title2[$i], 'price' => $btype[$i]);

        }

        $sal2 = json_encode($arrb);

        for($i=0; $i < count($payitem3); $i++){

           $ctype[] = $request->get('inputC'.$payitem3[$i]->id);

           $payitem_id3[] = $payitem3[$i]->id;
           $payitem_title3[] = $payitem3[$i]->title;

           $arrc[] = array('payitem_id' => $payitem_id3[$i] ,'title' => $payitem_title3[$i], 'price' => $ctype[$i]);

        }

        $sal3 = json_encode($arrc);

        for($i=0; $i < count($payitem4); $i++){

           $dtype[] = $request->get('inputD'.$payitem4[$i]->id);

           $payitem_id4[] = $payitem4[$i]->id;
           $payitem_title4[] = $payitem4[$i]->title;

           $arrd[] = array('payitem_id' => $payitem_id4[$i] ,'title' => $payitem_title4[$i], 'price' => $dtype[$i]);

        }

        $sal4 = json_encode($arrd);


        $pitems1 = new Monthsalaryvalue([
           'pinfo_id' => $id,
           'normal_wage' => $sal1,
           'statutory_allowance' => $sal2,
           'benefits' => $sal3,
           'commit_allowance' => $sal4,
        ]);
        $pitems1->save();


        if ($pchange === 'pchange'){

            if (Sentinel::check())

                return Redirect::route('pchange_view', $id);

            else

                return Redirect::to('admin/signin')->with('error', 'You must be logged in!');

        }else{

            if (Sentinel::check())

                return Redirect::route('payinfo_view', $id);

            else

                return Redirect::to('admin/signin')->with('error', 'You must be logged in!');

        }



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
