<?php

namespace App\Http\Controllers;

use App\Monthsalaryvalue;
use App\Payinfo;
use App\Pinfo;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Redirect;

class HnlPmanageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $payinfo = Payinfo::all();

        $users = DB::table('person_infos')
            ->join('payinfos', 'person_infos.id', '=', 'payinfos.pinfo_id')
            ->get();

        $user_calc = DB::table('person_infos')
            ->join('calc_tables', 'person_infos.worktype', '=', 'calc_tables.type')
            ->get();

        for($i=0; $i < count($user_calc); $i++){

            $obj = new \stdClass();
            $obj->name = $user_calc[$i]->name;
            $obj->mtotal = $user_calc[$i]->mtotal;
            $obj->mbreak = $user_calc[$i]->mbreak;
            $obj->mover = $user_calc[$i]->mover;
            $obj->mnight = $user_calc[$i]->mnight;
            $obj->mwwork = $user_calc[$i]->mwwork;
            $obj->mwover = $user_calc[$i]->mwover;
            $obj->mwnight = $user_calc[$i]->mwnight;
            $obj->mwbt = $user_calc[$i]->mwbt;
            $obj->total = $user_calc[$i]->total;

            $array_calc[] = $obj;

        }   //근로시간구성 객체생성

        $ucalc = (object)$array_calc;       //근로시간구성

        for($i=0; $i < count($users); $i++){
            $getpitemsa = Monthsalaryvalue::where('pinfo_id','=', $users[$i]->id)->orderBy('created_at', 'desc')->first();

            if($getpitemsa){

                $nw = json_decode($getpitemsa->normal_wage);
                $sa = json_decode($getpitemsa->statutory_allowance);
                $bf = json_decode($getpitemsa->benefits);
                $ca = json_decode($getpitemsa->commit_allowance);

            }else{

                $nw = array();
                $sa = array();
                $bf = array();
                $ca = array();
            }

            for($j=0; $j < count($nw); $j++){
                $nw_price[$nw[$j]->title] = $nw[$j]->price;
            }

            for($j=0; $j < count($sa); $j++){
                $sa_price[$sa[$j]->title] = $sa[$j]->price;
            }

            for($j=0; $j < count($bf); $j++){
                $bf_price[$bf[$j]->title] = $bf[$j]->price;
            }

            for($j=0; $j < count($ca); $j++){
                $ca_price[$ca[$j]->title] = $ca[$j]->price;
            }


            $sum_nw = array_sum($nw_price);
            $sum_sa = array_sum($sa_price);
            $sum_bf = array_sum($bf_price);
            $sum_ca = array_sum($ca_price);

            $totalpay = $users[$i]->paymonth - $sum_ca; //임금총액
            $total = $users[$i]->paymonth - $getpitemsa->none_tax_price;    //보수총액

            $obj = new \stdClass();
            $obj->name = $users[$i]->name;
            $obj->paymonth = $users[$i]->paymonth;
            $obj->hour_pay = $users[$i]->hour_pay;
            $obj->sum_nw = $sum_nw;
            $obj->sum_sa = $sum_sa;
            $obj->sum_bf = $sum_bf;
            $obj->sum_ca = $sum_ca;
            $obj->none_tax_price = $getpitemsa->none_tax_price;
            $obj->month_price = $totalpay;
            $obj->total_price = $total;

            $array[] = $obj;

/*            $obj1 = new \stdClass();
            $obj1->name = $users[$i]->name;
            foreach($nw_price as $k => $nw){
                $obj1->$k = $nw;
            }
            foreach($sa_price as $k => $sa){
                $obj1->$k = $sa;
            }
            foreach($bf_price as $k => $bf){
                $obj1->$k = $bf;
            }
            foreach($ca_price as $k => $ca){
                $obj1->$k = $ca;
            }
            $array1[] = $obj1;*/


        }

        $getuserinfo = (object)$array;      //기본총괄표
/*        $payinfo = (object)$array1;     //급여 세부항목*/


        for($i=0; $i < 1; $i++){

        }




        if(Sentinel::check())
            return view('hnl.pay.pmanage', compact('getuserinfo','ucalc','payinfo'));
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
        //
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
