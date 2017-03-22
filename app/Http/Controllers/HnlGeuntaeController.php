<?php

namespace App\Http\Controllers;

use App\Extraworkadd;
use App\Geuntaeadd;
use App\Jobtitle;
use App\Pinfo;
use App\Postitle;
use App\Vacationadd;
use Illuminate\Support\Facades\Lang;
use Sentinel;
use Redirect;
use App\Addextrawork;
use App\Geuntaededuct;
use App\Vacation;
use Illuminate\Http\Request;

use App\Http\Requests;

class HnlGeuntaeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinfo = Pinfo::all();
        $geuntae = Geuntaededuct::all();
        $addextrawork = Addextrawork::all();
        $vacation = Vacation::all();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();


        $geuntaeadd = array();
        $extraworkadd = array();
        $vacationadd = array();
        $id = '';
        $searchp = array();

        if(Sentinel::check())
            return view('hnl.work.addwork', compact('geuntae','addextrawork','vacation','geuntaeadd','extraworkadd','vacationadd','searchp','id','pinfo','jobtitle','position'));
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


        if($request->get('where') === 'geuntae'){

        $id = $request->id;

        if($request->get('papply') === null) {
            $papply = 0;
        }else{
            $papply = $request->get('papply');
        }

        $gaddtable = new Geuntaeadd([
            'pinfo_id' => $request->id,
            'geuntae_title' => $request->get('gtitle'),
            'use_date' => $request->get('udate'),
            'pay_apply' => $papply,
            'minus_timepay' => $request->get('mpaytime'),
            'minus_time' => $request->get('mtime'),
            'minus_pay' => $request->get('mpay'),
        ]);
        $gaddtable->save();

        }elseif($request->get('where') === 'addwork'){

            $id = $request->id;

            if($request->get('papply') === null) {
                $papply = 0;
            }else{
                $papply = $request->get('papply');
            }

            $eworadd = new Extraworkadd([
                'pinfo_id' => $request->id,
                'extrawork_title' => $request->get('etitle'),
                'use_date' => $request->get('udate'),
                'pay_apply' => $papply,
                'add_time' => $request->get('ex_worktime'),
                'add_pay' => $request->get('ex_workpay'),
            ]);
            $eworadd->save();

        }elseif($request->get('where') === 'vacation'){

            $id = $request->id;

            if($request->get('papply') === null) {
                $papply = 0;
            }else{
                $papply = $request->get('papply');
            }

            $gaddtable = new Vacationadd([
                'pinfo_id' => $request->id,
                'vacation_title' => $request->get('vtitle'),
                'use_date' => $request->get('udate'),
                'pay_apply' => $papply,
                'use_dates' => $request->get('apply_date'),
            ]);
            $gaddtable->save();


        }

        $test = '';

        if (Sentinel::check())

            return Redirect::route('addwork_view', $id);

        else

            return Redirect::to('admin/signin')->with('error', 'You must be logged in!');

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
        $geuntae = Geuntaededuct::all();
        $addextrawork = Addextrawork::all();
        $vacation = Vacation::all();
        $jobtitle = Jobtitle::All();
        $position = Postitle::All();

        $searchp = Pinfo::findOrFail($id);
        $geuntaeadd = Geuntaeadd::where('pinfo_id','=',$id)->get();
        $extraworkadd = Extraworkadd::where('pinfo_id','=',$id)->get();
        $vacationadd = Vacationadd::where('pinfo_id','=',$id)->get();

        if(Sentinel::check())
            return view('hnl.work.addwork', compact('geuntae','addextrawork','vacation','geuntaeadd','extraworkadd','vacationadd','searchp','id','pinfo','jobtitle','position'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');


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


    public function getModalDelete1($id = null){

        $model = '공제근태 내역';

        $confirm_route = $error = null;

        try {
            // Get group information
            $gadd = Geuntaeadd::findOrFail($id);

            $name = $gadd->geuntae_title;
            $confirm_route = route('delete/ework1', ['id' => $gadd->id]);
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        }
    }

    public function getModalDelete2($id = null){

        $model = '추가근무 내역';

        $confirm_route = $error = null;

        try {
            // Get group information
            $eadd = Extraworkadd::findOrFail($id);

            $name = $eadd->extrawork_title;
            $confirm_route = route('delete/ework2', ['id' => $eadd->id]);
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        }
    }


    public function getModalDelete3($id = null){

        $model = '휴가휴직 내역';

        $confirm_route = $error = null;

        try {
            // Get group information
            $vadd = Vacationadd::findOrFail($id);

            $name = $vadd->vacation_title;
            $confirm_route = route('delete/ework3', ['id' => $vadd->id]);
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy1($id)
    {
        try {
            $gadd = Geuntaeadd::findOrFail($id);

            $gadd->delete();

            // Redirect to the group management page
            return Redirect::route('addwork_view')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('addwork_view')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }

    public function destroy2($id)
    {
        try {

            $eadd = Extraworkadd::findOrFail($id);

            $eadd->delete();

            // Redirect to the group management page
            return Redirect::route('addwork_view')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('addwork_view')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }


    public function destroy3($id)
    {
        try {
            $vadd = Vacationadd::findOrFail($id);

            $vadd->delete();

            // Redirect to the group management page
            return Redirect::route('addwork_view')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('addwork_view')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }
}
