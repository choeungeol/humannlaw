<?php

namespace App\Http\Controllers;

use App\Payitem1;
use App\Payitem2;
use App\Payitem3;
use App\Payitem4;
use App\TaxDeduction;
use Illuminate\Http\Request;

use App\Http\Requests;
use Sentinel;
use Redirect;
use Lang;

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

        $tdeduction = TaxDeduction::all();

        if(Sentinel::check())

            return view('hnl.basicinfo.payitem', compact('paycalc', 'colapply', 'exitpay', 'istexfree', 'inbasicpay','$normalpay','payitem1','payitem2','payitem3','payitem4','tdeduction'));

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
        $payitem2 = new Payitem2([
            'title' => $request->get('i_title'),
            'paycalc' => $request->get('i_paycalc'),
            'probaion' => $request->get('i_probaion'),
            'is_severance_pay' => $request->get('i_is_severance_pay'),
            'is_taxfree' => $request->get('i_is_taxfree'),
        ]);

        $payitem2->save();

        return Redirect::to('hnl/basicinfo/payitem')->with('success');
    }


    public function store3(Request $request)
    {
        $payitem3 = new Payitem3([
            'title' => $request->get('i_title'),
            'paycalc' => $request->get('i_paycalc'),
            'probaion' => $request->get('i_probaion'),
            'is_severance_pay' => $request->get('i_is_severance_pay'),
            'is_taxfree' => $request->get('i_is_taxfree'),
        ]);

        $payitem3->save();

        return Redirect::to('hnl/basicinfo/payitem')->with('success');
    }


    public function store4(Request $request)
    {
        $payitem4 = new Payitem4([
            'title' => $request->get('i_title'),
            'paycalc' => $request->get('i_paycalc'),
            'probaion' => $request->get('i_probaion'),
            'is_severance_pay' => $request->get('i_is_severance_pay'),
            'is_taxfree' => $request->get('i_is_taxfree'),
        ]);

        $payitem4->save();

        return Redirect::to('hnl/basicinfo/payitem')->with('success');
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

    public function clickcheck($id)
    {

        try {

            $tdeduction = TaxDeduction::findOrFail($id);

        } catch (GroupNotFoundException $e) {

            return Redirect::route('payitem')->with('error', compact('id'));
        }

        if($tdeduction->is_check == 0){
            $tdeduction->is_check = 1;
        }else{
            $tdeduction->is_check = 0;
        }

        // Was the group updated?
        if ($tdeduction->save()) {
            // Redirect to the group page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('payitem', $id)->with('error', Lang::get('groups/message.error.update'));
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

    public function getModalDelete($id = null)
    {
        $model = '통상임금';

        $confirm_route = $error = null;

        try {
            // Get group information
            $pitem = Payitem1::findOrFail($id);

            $title = $pitem->title;
            $confirm_route = route('delete/payitem', ['id' => $pitem->id]);
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model','title', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model' ,'title','confirm_route'));
        }
    }

    public function getModalDelete2($id = null)
    {
        $model = '법정수당';

        $confirm_route = $error = null;

        try {
            // Get group information
            $pitem = Payitem2::findOrFail($id);

            $title = $pitem->title;
            $confirm_route = route('delete/payitem2', ['id' => $pitem->id]);
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model','title', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model' ,'title','confirm_route'));
        }
    }

    public function getModalDelete3($id = null)
    {
        $model = '복리후생';

        $confirm_route = $error = null;

        try {
            // Get group information
            $pitem = Payitem3::findOrFail($id);

            $title = $pitem->title;
            $confirm_route = route('delete/payitem3', ['id' => $pitem->id]);
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model','title', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model' ,'title','confirm_route'));
        }
    }

    public function getModalDelete4($id = null)
    {
        $model = '약정수당';

        $confirm_route = $error = null;

        try {
            // Get group information
            $pitem = Payitem4::findOrFail($id);

            $title = $pitem->title;
            $confirm_route = route('delete/payitem4', ['id' => $pitem->id]);
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model','title', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation_payitem', compact('error', 'model' ,'title','confirm_route'));
        }
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
        try {
            // Get the jobtitle information
            $pay = Payitem1::findOrFail($id);

        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Redirect::route('payitem')->with('error', compact('id'));
        }

        // Update the group data
        $pay->title = $request->get('title');
        $pay->paycalc = $request->get('paycalc');
        $pay->probaion = $request->get('probaion');
        $pay->is_severance_pay = $request->get('is_severance_pay');
        $pay->is_taxfree = $request->get('is_taxfree');
        if($request->get('in_basicpay') == null){

        }else{
            $pay->in_basicpay = $request->get('in_basicpay');
        }

        // Was the group updated?
        if ($pay->save()) {
            // Redirect to the group page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('payitem', $id)->with('error', Lang::get('groups/message.error.update'));
        }
    }

    public function update2(Request $request, $id)
    {
        try {
            // Get the jobtitle information
            $pay = Payitem2::findOrFail($id);

        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Redirect::route('payitem')->with('error', compact('id'));
        }

        // Update the group data
        $pay->title = $request->get('title');
        $pay->paycalc = $request->get('paycalc');
        $pay->probaion = $request->get('probaion');
        $pay->is_severance_pay = $request->get('is_severance_pay');
        $pay->is_taxfree = $request->get('is_taxfree');

        // Was the group updated?
        if ($pay->save()) {
            // Redirect to the group page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('payitem', $id)->with('error', Lang::get('groups/message.error.update'));
        }
    }

    public function update3(Request $request, $id)
    {
        try {
            // Get the jobtitle information
            $pay = Payitem3::findOrFail($id);

        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Redirect::route('payitem')->with('error', compact('id'));
        }

        // Update the group data
        $pay->title = $request->get('title');
        $pay->paycalc = $request->get('paycalc');
        $pay->probaion = $request->get('probaion');
        $pay->is_severance_pay = $request->get('is_severance_pay');
        $pay->is_taxfree = $request->get('is_taxfree');

        // Was the group updated?
        if ($pay->save()) {
            // Redirect to the group page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('payitem', $id)->with('error', Lang::get('groups/message.error.update'));
        }
    }

    public function update4(Request $request, $id)
    {
        try {
            // Get the jobtitle information
            $pay = Payitem4::findOrFail($id);

        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Redirect::route('payitem')->with('error', compact('id'));
        }

        // Update the group data
        $pay->title = $request->get('title');
        $pay->paycalc = $request->get('paycalc');
        $pay->probaion = $request->get('probaion');
        $pay->is_severance_pay = $request->get('is_severance_pay');
        $pay->is_taxfree = $request->get('is_taxfree');

        // Was the group updated?
        if ($pay->save()) {
            // Redirect to the group page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('payitem', $id)->with('error', Lang::get('groups/message.error.update'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $pitem = Payitem1::findOrFail($id);

            $pitem->delete();

            // Redirect to the group management page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('payitem')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }
    public function destroy2($id)
    {
        try {
            $pitem = Payitem2::findOrFail($id);

            $pitem->delete();

            // Redirect to the group management page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('payitem')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }
    public function destroy3($id)
    {
        try {
            $pitem = Payitem3::findOrFail($id);

            $pitem->delete();

            // Redirect to the group management page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('payitem')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }

    public function destroy4($id)
    {
        try {
            $pitem = Payitem4::findOrFail($id);

            $pitem->delete();

            // Redirect to the group management page
            return Redirect::route('payitem')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('payitem')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }
}
