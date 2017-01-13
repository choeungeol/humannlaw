<?php

namespace App\Http\Controllers;

use App\Payitem1;
use App\Payitem2;
use App\Payitem3;
use App\Payitem4;
use Illuminate\Support\Facades\Lang;
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

        $paymonth1 = Payitem1::all();
        $paymonth2 = Payitem2::all();
        $paymonth3 = Payitem3::all();
        $paymonth4 = Payitem4::all();
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

    public function clickcheck($id, Request $request)
    {


        try {
            $re = $request->get('pay');

            if($re === 'a'){
                $pitem = Payitem1::findOrFail($id);
            }elseif($re === 'b'){
                $pitem = Payitem2::findOrFail($id);
            }elseif($re === 'c'){
                $pitem = Payitem3::findOrFail($id);
            }elseif($re === 'd'){
                $pitem = Payitem4::findOrFail($id);
            }

        } catch (GroupNotFoundException $e) {

            return Redirect::route('paytype')->with('error', compact('id'));
        }

        if($pitem->use_this == 0){
            $pitem->use_this = 1;
        }else{
            $pitem->use_this = 0;
        }

        // Was the group updated?
        if ($pitem->save()) {
            // Redirect to the group page
            return Redirect::route('paytype')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('paytype', $id)->with('error', Lang::get('groups/message.error.update'));
        }


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
