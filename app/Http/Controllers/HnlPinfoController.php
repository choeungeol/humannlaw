<?php

namespace App\Http\Controllers;

use App\CompanyBasicinfo;
use App\Jobtitle;
use App\Pinfo;
use App\Worktype;
use Illuminate\Http\Request;

use Sentinel;
use Redirect;
use Lang;

use App\Http\Requests;

class HnlPinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $jobtitle = Jobtitle::All();
        $position = Jobtitle::findOrFail(1)->postitles;
        $worktype = Worktype::All();
        $companypinfo = CompanyBasicinfo::find($id)->person_infos;


        if(Sentinel::check())
            return view('hnl.pinfo.pinfo',compact('worktype','jobtitle','position','companypinfo','id'));
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sbtimes = str_replace(':','',$request->get('sbtime'));    //휴게시작시간 : 표시 없애기
        $ebtimes = str_replace(':','',$request->get('ebtime'));    //휴게종료시간 : 표시 없애기
        $btimes = (((int)$ebtimes - (int)$sbtimes) * 100) / 10000 ;     //총휴게시간

        switch($request->paytype){
            case 'A':
                $paytype = '연봉';
                break;

            case 'B':
                $paytype = '월급';
                break;

            case 'C':
                $paytype = '일당';
                break;

            case 'D':
                $paytype = '시급';
                break;
        }   //급여형태

        switch($request->first_pay){
            case 'A':
                $first_pay = '해당없음';
                break;

            case 'B':
                $first_pay = '90%';
                break;

            case 'C':
                $first_pay = '80%';
                break;

            case 'D':
                $first_pay = '70%';
                break;

            case 'E':
                $first_pay = '60%';
                break;

            case 'F':
                $first_pay = '50%';
                break;

        }   //수습급여비율

        switch($request->work_condition){
            case 'A':
                $work_condition = '정상';
                break;

            case 'B':
                $work_condition = '퇴직';
                break;

        }   //근무상태

        switch($request->employee_type){
            case 'A':
                $employee_type = '정규직';
                break;

            case 'B':
                $employee_type = '계약직%';
                break;

            case 'C':
                $employee_type = '단시간';
                break;

            case 'D':
                $employee_type = '일용직';
                break;

        }   //채용형태

        $test = $request->isveterans;
        $cbid = $request->get('id');
        $pinfo = new Pinfo([
            'company_basicinfo_id' => $cbid,
            'employee_num' => $request->get('employee_num'),
            'employee_post' => $request->get('employee_post'),
            'employee_addr1' => $request->get('employee_addr1'),
            'employee_addr2' => $request->get('employee_addr2'),
            'work_condition' => $work_condition,
            'name' => $request->get('name'),
            'tel' => $request->get('tel'),
            'join_day' => $request->get('join_day'),
            'country' => $request->get('country'),
            'regi_no' => $request->get('regi_no'),
            'email' => $request->get('email'),
            'exit_day' => $request->get('exit_day'),
            'payday' => $request->get('payday'),
            'job' => $request->get('job'),
            'employee_type' => $employee_type,
            'contract' => $request->get('contract'),
            'renewal' => $request->get('renewal'),
            'worktype' => $request->get('worktype'),
            'location' => $request->get('location'),
            'position' => $request->get('position'),
            'paytype' => $paytype,
            'first_pay' => $first_pay,
            'swtime' => $request->get('swtime'),
            'ewtime' => $request->get('ewtime'),
            'workplace' => $request->get('workplace'),
            'active_partner' => $request->get('active_partner'),
            'sbtime' => $request->get('sbtime'),
            'ebtime' => $request->get('ebtime'),
            'btime' => $btimes,
            'last_ability' => $request->get('last_ability'),
            'ismarried' => $request->get('ismarried'),
            'blood' => $request->get('blood'),
            'speciality' => $request->get('speciality'),
            'pay_bank' => $request->get('pay_bank'),
            'isveterans' => $request->get('isveterans'),
            'height' => $request->get('height'),
            'faith' => $request->get('faith'),
            'medical_history' => $request->get('medical_history'),
            'account_num' => $request->get('account_num'),
            'isdisabled' => $request->get('isdisabled'),
            'weight' => $request->get('weight'),
            'hobby' => $request->get('hobby'),
            'have_family' => $request->get('have_family'),
            'account_name' => $request->get('account_name'),
        ]);
        $pinfo->save();

        return Redirect::to('hnl/pinfo/pinfo/'.$cbid)->with('success', Lang::get('users/message.success.create'));

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
