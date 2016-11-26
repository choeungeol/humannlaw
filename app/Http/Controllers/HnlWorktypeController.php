<?php

namespace App\Http\Controllers;

use App\Worktype;
use Illuminate\Http\Request;
use Sentinel;
use Redirect;

use App\Http\Requests;

class HnlWorktypeController extends Controller
{
    public function index()
    {

        $worktypes = Worktype::all();
        $col = collect($worktypes);
        $chunk = $col->chunk(7);
        $array = $chunk->toArray();
        $at[] = $array;
        $test[][] = '';

        $atypes = Worktype::where('type', '=', 'A')->get();
        $btypes = Worktype::where('type', '=', 'B')->get();
        $ctypes = Worktype::where('type', '=', 'C')->get();
        $dtypes = Worktype::where('type', '=', 'D')->get();
        $etypes = Worktype::where('type', '=', 'E')->get();
        $ftypes = Worktype::where('type', '=', 'F')->get();
        $gtypes = Worktype::where('type', '=', 'G')->get();
        $htypes = Worktype::where('type', '=', 'H')->get();
        $itypes = Worktype::where('type', '=', 'I')->get();
        $jtypes = Worktype::where('type', '=', 'J')->get();

        $typename['A'] = $atypes;
        $typename['B'] = $btypes;
        $typename['C'] = $ctypes;
        $typename['D'] = $dtypes;
        $typename['E'] = $etypes;
        $typename['F'] = $ftypes;
        $typename['G'] = $gtypes;
        $typename['H'] = $htypes;
        $typename['I'] = $itypes;
        $typename['J'] = $jtypes;

        $days = array('월요일','화요일','수요일','목요일','금요일','토요일','일요일');
        $worknum = array('없음','매주','격주','월1회','월2회','월3회','월4회','월5회');
        $worktype = array('근무일','유급휴일','무급휴일','무급휴무일');

        if(Sentinel::check())

            return view('hnl.basicinfo.worktype', compact('days','worknum','worktype','atypes','btypes','ctypes','dtypes','etypes','ftypes','gtypes','htypes','itypes','jtypes','typename'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    public function typeInsert(Request $request)
    {

        $type = $request->type;
        $workstart = array($request->work_start_time0,$request->work_start_time1, $request->work_start_time2, $request->work_start_time3, $request->work_start_time4, $request->work_start_time5, $request->work_start_time6);
        $workend = array($request->work_end_time0,$request->work_end_time1, $request->work_end_time2, $request->work_end_time3, $request->work_end_time4, $request->work_end_time5, $request->work_end_time6);
        $breaktime = array($request->break_time0,$request->break_time1, $request->break_time2, $request->break_time3, $request->break_time4, $request->break_time5, $request->break_time6);
        $worktype = array($request->worktype_0, $request->worktype_1, $request->worktype_2, $request->worktype_3, $request->worktype_4, $request->worktype_5, $request->worktype_6);
        $worknum = array($request->now_0, $request->now_1, $request->now_2, $request->now_3, $request->now_4, $request->now_5, $request->now_6);




            for($i=0; $i<7; $i++){
                $types = Worktype::where('type', '=', $type)->where('sortnum', '=', $i)->first();
                $types->type = $type;
                $types->worknum = $worknum[$i];
                $types->worktype = $worktype[$i];
                $types->sworktime = $workstart[$i];
                $types->eworktime = $workend[$i];
                $types->breaktime = $breaktime[$i];

                $types->save();
            }


        return Redirect::to('hnl/basicinfo/worktype')->with('success');

    }
}
