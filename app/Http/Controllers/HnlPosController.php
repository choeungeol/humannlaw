<?php

namespace App\Http\Controllers;

use App\Jobtitle;
use App\Postitle;
use Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class HnlPosController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $postitles = new Postitle([
            'pos_code' => $request->get('pos_code'),
            'pos_div_code' => $request->get('pos_div_code'),
            'pos_name' => $request->get('pos_name'),
            'pos_use' => $request->get('pos_use'),
            'pos_memo' => $request->get('pos_memo'),
        ]);
        //test
        $postitles->save();

        return Redirect::to('hnl/basicinfo/jobtitle')->with('success', Lang::get('users/message.success.create'));


    }

    public function edit($id = null)
    {
        $model = '직위';

        $confirm_route = $error = null;

        try {
            // Get postitle information
            $pos = Postitle::findOrFail($id);

            /*$pos = Postitle::where('job_id',$id)->get();*/
            $jobtitles = Jobtitle::all();
            /* $posjobid = $pos->job_id;
             $jobtitles = Jobtitle::where('id','=',$posjobid)->get();
             $jcount = Jobtitle::get(['name'])->count();*/

            $confirm_route = route('update/postitle', ['id' => $pos->id]);
            return view('hnl.basicinfo.postitle_edit', compact('error', 'model', 'pos',  'jobtitles', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = '오류입니다.';
            return view('hnl.basicinfo.postitle_edit', compact('error', 'model', 'pos',  'jobtitles', 'confirm_route'));
        }
    }

    public function update($id = null, Request $request)
    {
        try {
            // Get the postitle information
            $pos = Postitle::findOrFail($id);

        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Rediret::route('jobtitle')->with('error', compact('id'));
        }

        // Update the group data
        $pos->job_id = $request->get('job_id');
        $pos->pos_code = $request->get('pos_code');
        $pos->pos_div_code = $request->get('pos_div_code');
        $pos->pos_name = $request->get('pos_name');
        $pos->pos_use = $request->get('pos_use');
        $pos->pos_memo = $request->get('pos_memo');

        // Was the group updated?
        if ($pos->save()) {
            // Redirect to the group page
            return Redirect::route('jobtitle')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('update/postitle', $id)->with('error', Lang::get('groups/message.error.update'));
        }

    }


    public function getModalDelete($id = null)
    {
        $model = '직위';

        $confirm_route = $error = null;

        try {
            // Get postitle information
            $pos = Postitle::findOrFail($id);

            $name = $pos->pos_name;
            $confirm_route = route('delete/postitle', ['id' => $pos->id]);
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        }
    }

    public function destroy($id = null)
    {
        try {
            // Get postitle information
            $pos = Postitle::findOrFail($id);

            // Delete the group
            $pos->delete();

            // Redirect to the group management page
            return Redirect::route('jobtitle')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('jobtitle')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }
}
