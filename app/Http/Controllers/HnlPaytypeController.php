<?php

namespace App\Http\Controllers;

use App\Payday;
use App\Payitem1;
use App\Payitem2;
use App\Payitem3;
use App\Payitem4;
use App\Paytime;
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
        $payday = Payday::all(); // 포괄일당제 명칭
        $paytimes = Paytime::all(); // 포괄시급제 명칭


        if(Sentinel::check())

            return view('hnl.basicinfo.paytype', compact('paymonth1','paymonth2','paymonth3','paymonth4','payday','paytimes'));

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

    public function paydaycheck(Request $request)
    {
        $id = $request->id;
        try {

            $pday = Payday::findOrFail($id);

            if($pday->is_check == 0){
                $pday->is_check = 1;
            }else{
                $pday->is_check = 0;
            }

        } catch (GroupNotFoundException $e) {

            return Redirect::route('paytype')->with('error', compact('id'));

        }

        // Was the group updated?
        if ($pday->save()) {
            // Redirect to the group page
            return Redirect::route('paytype')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('paytype', $id)->with('error', Lang::get('groups/message.error.update'));
        }

    }

    public function clickcheck($id, Request $request)
    {

        try {
            $re = $request->get('paytype');
            $res = $request->get('pay');

            if($re === 'a'){

                if($res === 'a'){

                    $pitem = Payitem1::findOrFail($id);

                    if($pitem->use_this == 0){
                        $pitem->use_this = 1;
                    }else{
                        $pitem->use_this = 0;
                    }

                }elseif($res === 'a1'){

                    $pitem = Payitem2::findOrFail($id);

                    if($pitem->use_this == 0){
                        $pitem->use_this = 1;
                    }else{
                        $pitem->use_this = 0;
                    }

                }elseif($res === 'a2'){

                    $pitem = Payitem3::findOrFail($id);

                    if($pitem->use_this == 0){
                        $pitem->use_this = 1;
                    }else{
                        $pitem->use_this = 0;
                    }

                }elseif($res === 'a3'){

                    $pitem = Payitem4::findOrFail($id);

                    if($pitem->use_this == 0){
                        $pitem->use_this = 1;
                    }else{
                        $pitem->use_this = 0;
                    }

                }

            }elseif($re === 'b'){

                if($res === 'a'){

                    $pitem = Payitem1::findOrFail($id);

                    if($pitem->use_this1 == 0){
                        $pitem->use_this1 = 1;
                    }else{
                        $pitem->use_this1 = 0;
                    }

                }elseif($res === 'a1'){

                    $pitem = Payitem2::findOrFail($id);

                    if($pitem->use_this1 == 0){
                        $pitem->use_this1 = 1;
                    }else{
                        $pitem->use_this1 = 0;
                    }

                }elseif($res === 'a2'){

                    $pitem = Payitem3::findOrFail($id);

                    if($pitem->use_this1 == 0){
                        $pitem->use_this1 = 1;
                    }else{
                        $pitem->use_this1 = 0;
                    }

                }elseif($res === 'a3'){

                    $pitem = Payitem4::findOrFail($id);

                    if($pitem->use_this1 == 0){
                        $pitem->use_this1 = 1;
                    }else{
                        $pitem->use_this1 = 0;
                    }

                }

            }elseif($re === 'c'){
                $pitem = Payitem3::findOrFail($id);

                if($res === 'a'){

                    if($pitem->use_this2 == 0){
                        $pitem->use_this2 = 1;
                    }else{
                        $pitem->use_this2 = 0;
                    }

                }elseif($res === 'a1'){

                    if($pitem->use_this2 == 0){
                        $pitem->use_this2 = 1;
                    }else{
                        $pitem->use_this2 = 0;
                    }

                }elseif($res === 'a2'){

                    if($pitem->use_this2 == 0){
                        $pitem->use_this2 = 1;
                    }else{
                        $pitem->use_this2 = 0;
                    }

                }elseif($res === 'a3'){

                    if($pitem->use_this2 == 0){
                        $pitem->use_this2 = 1;
                    }else{
                        $pitem->use_this2 = 0;
                    }

                }

            }elseif($re === 'd'){
                $pitem = Payitem4::findOrFail($id);

                if($res === 'a'){

                    if($pitem->use_this3 == 0){
                        $pitem->use_this3 = 1;
                    }else{
                        $pitem->use_this3 = 0;
                    }

                }elseif($res === 'a1'){

                    if($pitem->use_this3 == 0){
                        $pitem->use_this3 = 1;
                    }else{
                        $pitem->use_this3 = 0;
                    }

                }elseif($res === 'a2'){

                    if($pitem->use_this3 == 0){
                        $pitem->use_this3 = 1;
                    }else{
                        $pitem->use_this3 = 0;
                    }

                }elseif($res === 'a3'){

                    if($pitem->use_this3 == 0){
                        $pitem->use_this3 = 1;
                    }else{
                        $pitem->use_this3 = 0;
                    }

                }

            }

        } catch (GroupNotFoundException $e) {

            return Redirect::route('paytype')->with('error', compact('id'));

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
