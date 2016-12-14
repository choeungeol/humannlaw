<?php

namespace App\Http\Controllers;

use App\CompanyBasicinfo;
use Illuminate\Support\Facades\Lang;
use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class HnlBasicinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Sentinel::check()){


            $allcompany = CompanyBasicinfo::All();
            // Show the page
            return view('hnl.basicinfo.basicinfo')->with('allcompany', $allcompany);

        }else{
            return Redirect::to('admin/signin')->with('error','You must be logged in!');

        }
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
        $cbascicinfo = new CompanyBasicinfo([
            'co_name' => $request->get('company_name'),
            'co_no' => $request->get('company_no'),
            'corp_regino' => $request->get('corporation_regino'),
            'repre_name' => $request->get('representative_name'),
            'repre_phone' => $request->get('representative_phone'),
            'repre_regino' => $request->get('representative_regino'),
            'repre_post' => $request->get('representative_post'),
            'repre_addr1' => $request->get('representative_addr1'),
            'repre_addr2' => $request->get('representative_addr2'),
            'co_post' => $request->get('company_post'),
            'co_addr1' => $request->get('company_addr1'),
            'co_addr2' => $request->get('company_addr2'),
            'tel_no' => $request->get('tel_no'),
            'fax_no' => $request->get('fax_no'),
            'co_email' => $request->get('company_email'),
            'pic_name' => $request->get('PIC_name'),
            'pic_telno' => $request->get('PIC_tel_no'),
            'b_type' => $request->get('business_type'),
            'b_condition' => $request->get('business_condition'),
            'pay_basicdate' => $request->get('pay_basic_date'),
            'pay_day' => $request->get('pay_day'),
            'b_cal_manner' => $request->get('business_calc_manner'),
        ]);
        $cbascicinfo->save();

        return Redirect::to('hnl/basicinfo/basicinfo')->with('success', Lang::get('users/message.success.create'));
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
