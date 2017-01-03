<?php

namespace App\Http\Controllers;

use App\Payitem1;
use App\Payitem2;
use App\Payitem3;
use App\Payitem4;
use Illuminate\Http\Request;

use App\Http\Requests;
use Sentinel;
use Redirect;

class HnlPayItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $paycalc = array('일수계산', '전액계산');
        $colapply = array('해당없음', '90%', '80%', '70%', '60%', '50%');
        $exitpay = array('3개월', '해당없음', '12개월');
        $istexfree = array('해당금액', '비과세한도액');
        $inbasicpay = array('YES', 'NO');
        $normalpay = array('기본급','주휴수당');

        $payitem1 = Payitem1::all();
        $payitem2 = Payitem2::all();
        $payitem3 = Payitem3::all();
        $payitem4 = Payitem4::all();

        if(Sentinel::check())

            return view('hnl.basicinfo.payitem', compact('paycalc', 'colapply', 'exitpay', 'istexfree', 'inbasicpay','$normalpay','payitem1','payitem2','payitem3','payitem4'));

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
    public function store1(Request $request)
    {
        $payitem1 = new Payitem1([
            'title' => $request->get('i_title'),
            'paycalc' => $request->get('i_paycalc'),
            'probaion' => $request->get('i_probaion'),
            'is_severance_pay' => $request->get('i_is_severance_pay'),
            'is_taxfree' => $request->get('i_is_taxfree'),
        ]);

        $payitem1->save();

        return Redirect::to('hnl/basicinfo/payitem')->with('success');

    }

    public function store2(Request $request)
    {
        //
    }


    public function store3(Request $request)
    {
        //
    }


    public function store4(Request $request)
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
