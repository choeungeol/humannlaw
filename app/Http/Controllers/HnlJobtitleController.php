<?php

namespace App\Http\Controllers;

use App\Jobtitle;
use App\Postitle;
use Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class HnlJobtitleController extends Controller
{
    public function index()
    {
        if(Sentinel::check()){

            $jobtitles = Jobtitle::All();

            $postitles = Jobtitle::join('postitles', 'postitles.jobtitle_id', '=', 'jobtitles.id')
                ->Paginate(10);

          /*  $postitles = Postitle::All();*/

            // Show the page
            return view('hnl.basicinfo.jobtitle')
                ->with('jobtitles', $jobtitles)
                ->with('postitles', $postitles);

        }else{
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
        }
    }

    public function store(Request $request)
    {
            $jobtitles = new Jobtitle([
                'jobcode' => $request->get('jobcode'),
                'code' => $request->get('code'),
                'name' => $request->get('name'),
                'use' => $request->get('use'),
                'memo' => $request->get('memo'),
            ]);
            //test
            $jobtitles->save();

            return Redirect::to('hnl/basicinfo/jobtitle')->with('success', Lang::get('users/message.success.create'));


    }

    public function edit($id = null)
    {
        $model = '부서';

        $confirm_route = $error = null;

        try {
            // Get group information
            $job = Jobtitle::findOrFail($id);

            $confirm_route = route('update/jobtitle', ['id' => $job->id]);
            return view('hnl.basicinfo.jobtitle_edit', compact('error', 'model', 'job', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = '오류입니다.';
            return view('hnl.basicinfo.jobtitle_edit', compact('error', 'model', 'job', 'confirm_route'));
        }
    }

    public function update($id = null, Request $request)
    {
        try {
            // Get the jobtitle information
            $job = Jobtitle::findOrFail($id);

        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Redirect::route('jobtitle')->with('error', compact('id'));
        }

        // Update the group data
        $job->jobcode = $request->get('jobcode');
        $job->code = $request->get('code');
        $job->name = $request->get('name');
        $job->use = $request->get('use');
        $job->memo = $request->get('memo');

        // Was the group updated?
        if ($job->save()) {
            // Redirect to the group page
            return Redirect::route('jobtitle')->with('success', Lang::get('groups/message.success.update'));
        } else {
            // Redirect to the group page
            return Redirect::route('update/jobtitle', $id)->with('error', Lang::get('groups/message.error.update'));
        }

    }


    public function getModalDelete($id = null)
    {
        $model = '부서';

        $confirm_route = $error = null;

        try {
            // Get group information
            $job = Jobtitle::findOrFail($id);

            $name = $job->name;
            $confirm_route = route('delete/jobtitle', ['id' => $job->id]);
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = Lang::get('admin/groups/message.group_not_found', compact('id'));
            return view('hnl.layouts.modal_confirmation', compact('error', 'model', 'name', 'confirm_route'));
        }
    }

    public function destroy($id = null)
    {
        try {
            // Get group information

            $job = Jobtitle::findOrFail($id);
            /*$pos = Postitle::findJobidById($id);*/
            /*$pos = Jobtitle::join('postitles', 'postitles.job_id', '=', 'jobtitles.id')
                ->where('job_id', $id)->get();*/
            $pos = Postitle::where('job_id', $id)->count();

            if($pos > 0) {
                return Redirect::route('jobtitle')->with('error', '직위 정보를 삭제후 다시 시도해주세요.');

            }else {
                // Delete the group
                $job->delete();
            }

            // Redirect to the group management page
            return Redirect::route('jobtitle')->with('success', Lang::get('groups/message.success.delete'));
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('jobtitle')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }
    }


}
