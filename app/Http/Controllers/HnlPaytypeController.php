<?php

namespace App\Http\Controllers;

use Redirect;
use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class HnlPaytypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $paymonth1 = array('기본급','주휴수당','직책수당','근속수당','가족수당'); // 포괄연봉제,월급제 명칭1
        $paymonth2 = array('연장수당','야간수당','휴일수당','휴일연장','휴일야간'.'연차수당'); // 포괄연봉제,월급제 명칭2
        $paymonth3 = array('식대','차량유지비','육아수당','연구활동비'); // 포괄연봉제,월급제 명칭3
        $paymonth4 = array('상여금','특별성과금','특근수당','특별수당'); // 포괄연봉제,월급제 명칭4
        $payday = array('기본급','주휴수당','연장수당','야간수당'.'휴일수당','휴일연장','휴일야간','연차수당'); // 포괄일당제 명칭


        if(Sentinel::check())

            return view('hnl.basicinfo.paytype', compact('paymonth1','paymonth2','paymonth3','paymonth4','payday'));

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
