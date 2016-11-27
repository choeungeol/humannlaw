<?php

namespace App\Http\Controllers;

use App\Calctable;
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
        $calctotal = Calctable::all();

        $days = array('월요일','화요일','수요일','목요일','금요일','토요일','일요일');
        $worknum = array('없음','매주','격주','월1회','월2회','월3회','월4회','월5회');
        $worktype = array('근무일','유급휴일','무급휴일','무급휴무일');

        $alpha = array('A','B','C','D','E','F','G','H','I','J');

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


        if(Sentinel::check())

            return view('hnl.basicinfo.worktype', compact('days','worknum','worktype','typename','calctotal'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    public function typeInsert(Request $request)
    {

        $type = $request->type;
        $workstart = array(
            0 => $request->work_start_time0,
            1 => $request->work_start_time1,
            2 => $request->work_start_time2,
            3 => $request->work_start_time3,
            4 => $request->work_start_time4,
            5 => $request->work_start_time5,
            6 => $request->work_start_time6
        );
        $workend = array(
            0 => $request->work_end_time0,
            1 => $request->work_end_time1,
            2 => $request->work_end_time2,
            3 => $request->work_end_time3,
            4 => $request->work_end_time4,
            5 => $request->work_end_time5,
            6 => $request->work_end_time6
        );
        $breaktime = array(
            0 => $request->break_time0,
            1 => $request->break_time1,
            2 => $request->break_time2,
            3 => $request->break_time3,
            4 => $request->break_time4,
            5 => $request->break_time5,
            6 => $request->break_time6
        );
        $worktype = array($request->worktype_0, $request->worktype_1, $request->worktype_2, $request->worktype_3, $request->worktype_4, $request->worktype_5, $request->worktype_6);
        $worknum = array($request->now_0, $request->now_1, $request->now_2, $request->now_3, $request->now_4, $request->now_5, $request->now_6);

            $scount = count($workstart);
            $ecount = count($workend);
            $bcount = count($breaktime);

        for($i=0; $i < $scount; $i++){
            if(in_array(null,$workstart)){
                $count1 = array_search(null,$workstart);
                array_splice($workstart,$count1,1,"0");
            }
        }

        for($i=0; $i < $ecount; $i++){
            if(in_array(null,$workend)){
                $count1 = array_search(null,$workend);
                array_splice($workend,$count1,1,"0");
            }
        }

        for($i=0; $i < $bcount; $i++){
            if(in_array(null,$breaktime)){
                $count1 = array_search(null,$breaktime);
                array_splice($breaktime,$count1,1,"0");
            }
        }
        //계산
        for($i=0; $i < 7; $i++){
            $weekwork[] = (integer)$workend[$i] - (integer)$workstart[$i];
            $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];

            if($totalwork[$i] > 800){

                $overwork[] = $totalwork[$i] - 800 * 1.5;

            }
        }


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

    public function typecalc()
    {

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

        $count = count($alpha);
        for($i=0; $i < $count; $i++){
            $index = $alpha[$i];
            $swt[] = $typename[$index]->implode('sworktime',',');
            $ewt[] = $typename[$index]->implode('eworktime',',');
            $bt[] = $typename[$index]->implode('breaktime',',');
        }

        for($i=0; $i < $count; $i++){
            $index = $alpha[$i];
            $worknums[] = $typename[$index]->implode('worknum',',');
            $worktypes[] = $typename[$index]->implode('worktype',',');
        }

        for($i=0; $i < $count; $i++){
            $index = $alpha[$i];

            $sexp[$index] = explode(',',$swt[$i]);
            $eexp[$index] = explode(',',$ewt[$i]);
            $bexp[$index] = explode(',',$bt[$i]);
            $wnum[$index] = explode(',',$worknums[$i]);
            $wtype[$index] = explode(',',$worktypes[$i]);

        }

        for($i=0; $i < $count; $i++){
            $index = $alpha[$i];
            for($j=0; $j < 7; $j++){
                $ws[$i] = (int)$sexp[$index][$j];
                $we[$i] = (int)$eexp[$index][$j];
                $b[$i] = (int)$bexp[$index][$j];
                $wn[$i] = $wnum[$index][$j];
                $wt[$i] = $wtype[$index][$j];


                //근로시간
                $minusval[$i] =$we[$i] - $ws[$i];
                //실 근로시간 = 근로시간 - 휴식시간
                $minusbreakval[$i] = $minusval[$i] - $b[$i];

                $minusbreakval[$i];
            }



            if($minusbreakval[$i] > 800){
                for($j=0; $j < 7; $j++){
                    $overwork[$i] = $minusbreakval[$i] - 800;
                    $totaloverwork[$index][$j] = $overwork[$i];
                }
            }

            for($j=0; $j < 7; $j++){
                $worktimeminus[$index] = $minusval[$i];
                $totalminus[$index][$j] = $minusbreakval[$i];

            }
        }


     $test ='';


        return Redirect::to('hnl/basicinfo/worktype')->with('success');
    }
}
