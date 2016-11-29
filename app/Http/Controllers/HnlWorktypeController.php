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

        for($i=0; $i < count($alpha); $i++){
            $calc[] =  Calctable::where('type', '=', $alpha[$i])->get();
        }

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]] = Worktype::where('type', '=', $alpha[$i])->get();
        }

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]][] = $calc[$i];
        }
/*        $acalc = Calctable::where('type', '=', 'A')->get();
        $bcalc = Calctable::where('type', '=', 'B')->get();
        $ccalc = Calctable::where('type', '=', 'C')->get();
        $dcalc = Calctable::where('type', '=', 'D')->get();
        $ecalc = Calctable::where('type', '=', 'E')->get();
        $fcalc = Calctable::where('type', '=', 'F')->get();
        $gcalc = Calctable::where('type', '=', 'G')->get();
        $hcalc = Calctable::where('type', '=', 'H')->get();
        $icalc = Calctable::where('type', '=', 'I')->get();
        $jcalc = Calctable::where('type', '=', 'J')->get();

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
        $typename['J'] = $jtypes;*/
/*        $typename['A']['7'] = $acalc;
        $typename['B']['7'] = $bcalc;
        $typename['C']['7'] = $ccalc;
        $typename['D']['7'] = $dcalc;
        $typename['E']['7'] = $ecalc;
        $typename['F']['7'] = $fcalc;
        $typename['G']['7'] = $gcalc;
        $typename['H']['7'] = $hcalc;
        $typename['I']['7'] = $icalc;
        $typename['J']['7'] = $jcalc;*/


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
        } // 시작 시간 입력값이 비어있으면 0

        for($i=0; $i < $ecount; $i++){
            if(in_array(null,$workend)){
                $count1 = array_search(null,$workend);
                array_splice($workend,$count1,1,"0");
            }
        } // 끝 시간 입력값이 비어있으면 0

        for($i=0; $i < $bcount; $i++){
            if(in_array(null,$breaktime)){
                $count1 = array_search(null,$breaktime);
                array_splice($breaktime,$count1,1,"0");
            }
        } // 휴게시간 입력값이 비어있으면 0

        //계산
        for($i=0; $i < 7; ++$i){
            if($worktype[$i] === '무급휴무일'){

                $weekwork[] = (integer)$workend[$i] - (integer)$workstart[$i];
                //실근로시간
                $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];

            }elseif($worktype[$i] === '근무일'){
                $weekwork[] = (integer)$workend[$i] - (integer)$workstart[$i];

                if($worknum[$i] === '매주'){

                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $basicwork[] = $weekwork[$i];


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){

                        $extend[] = $totalwork[$i] - 800;
                        $extendwork[] = $extend[$i] * 1.5;

                    }else{

                        $extendwork[] = 0;

                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nw[] = $nwork[$i] * 24;
                        $nightwork[] = $nw[$i] * 0.5;

                    }else{

                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $weekend[] = '';
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                    }

                    //휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime[] = '';
                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }
                    //휴일 야간 근로시간
                    $weekendnighttime[] = '';
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }



                } elseif($worknum[$i] === '격주'){

                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $basicwork[] = $weekwork[$i] / 2;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){

                        $extend[] = $totalwork[$i] - 800;
                        $ex[] = $extend[$i]  * 1.5;
                        $extendwork[] = $ex[$i] / 2;

                    }else{

                        $extendwork[] = 0;

                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nw[] = $nwork[$i] * 24;
                        $ngwork[] = $nw[$i] * 0.5;
                        $nightwork[] = $ngwork[$i] / 2;

                    }else{

                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $weekend[] = '';
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                    }

                    //휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime[] = '';
                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }
                    //휴일 야간 근로시간
                    $weekendnighttime[] = '';
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }

                }elseif($worknum[$i] === '월1회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 1;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){


                        $e[] = $totalwork[$i] - 800;
                        $ex[] = $e[$i] * 1.5;
                        $ext[] = $ex[$i] * 1;
                        $extendwork[] = $ext[$i] / 4.345;

                    }else{

                        $extendwork[] = 0;

                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nw[] = $nwork[$i] * 24;
                        $niw[] = $nw[$i] * 0.5;
                        $nightw[] = $niw[$i] * 1;
                        $nightwork[] = $nightw[$i] / 4.345;

                    }else{

                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $weekend[] = '';
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                    }

                    //휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime[] = '';
                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }
                    //휴일 야간 근로시간
                    $weekendnighttime[] = '';
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }

                }elseif($worknum[$i] === '월2회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 2;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){


                        $e[] = $totalwork[$i] - 800;
                        $ex[] = $e[$i] * 1.5;
                        $ext[] = $ex[$i] * 2;
                        $extendwork[] = $ext[$i] / 4.345;

                    }else{

                        $extendwork[] = 0;

                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nw[] = $nwork[$i] * 24;
                        $niw[] = $nw[$i] * 0.5;
                        $nightw[] = $niw[$i] * 2;
                        $nightwork[] = $nightw[$i] / 4.345;

                    }else{

                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $weekend[] = '';
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                    }

                    //휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime[] = '';
                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }
                    //휴일 야간 근로시간
                    $weekendnighttime[] = '';
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }
                }elseif($worknum[$i] === '월3회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 3;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){


                        $e[] = $totalwork[$i] - 800;
                        $ex[] = $e[$i] * 1.5;
                        $ext[] = $ex[$i] * 3;
                        $extendwork[] = $ext[$i] / 4.345;

                    }else{

                        $extendwork[] = 0;

                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nw[] = $nwork[$i] * 24;
                        $niw[] = $nw[$i] * 0.5;
                        $nightw[] = $niw[$i] * 3;
                        $nightwork[] = $nightw[$i] / 4.345;

                    }else{

                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $weekend[] = '';
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                    }

                    //휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime[] = '';
                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }
                    //휴일 야간 근로시간
                    $weekendnighttime[] = '';
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }
                }elseif($worknum[$i] === '월4회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 4;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){


                        $e[] = $totalwork[$i] - 800;
                        $ex[] = $e[$i] * 1.5;
                        $ext[] = $ex[$i] * 4;
                        $extendwork[] = $ext[$i] / 4.345;

                    }else{

                        $extendwork[] = 0;

                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nw[] = $nwork[$i] * 24;
                        $niw[] = $nw[$i] * 0.5;
                        $nightw[] = $niw[$i] * 4;
                        $nightwork[] = $nightw[$i] / 4.345;

                    }else{

                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $weekend[] = '';
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                    }

                    //휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime[] = '';
                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }
                    //휴일 야간 근로시간
                    $weekendnighttime[] = '';
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }
                }elseif($worknum[$i] === '월5회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 5;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){


                        $e[] = $totalwork[$i] - 800;
                        $ex[] = $e[$i] * 1.5;
                        $ext[] = $ex[$i] * 5;
                        $extendwork[] = $ext[$i] / 4.345;

                    }else{

                        $extendwork[] = 0;

                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nw[] = $nwork[$i] * 24;
                        $niw[] = $nw[$i] * 0.5;
                        $nightw[] = $niw[$i] * 5;
                        $nightwork[] = $nightw[$i] / 4.345;

                    }else{

                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $weekend[] = '';
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                    }

                    //휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime[] = '';
                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }
                    //휴일 야간 근로시간
                    $weekendnighttime[] = '';
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }
                }elseif($worknum[$i] === '없음'){

                    $breaktime[] = 0;
                    $nightwork[] = 0;
                    $extendwork[] = 0;
                    $basicwork[] = 0;

                }//근무횟수 if 끝

                //1주 소정 근로시간
                $weekworktime = array_sum($basicwork);

                if(count($basicwork) === 7){

                    if($weekworktime > 4000){

                        $minusworktime = $weekworktime - 4000;
                        $weekworktime = 4000;

                    }else{

                        $weekworktime = $weekworktime;

                    }//1주 소정근로시간이 40시간 기준 if

                    //1일 소정 근로시간
                    $onedayworktime = $weekworktime / count($basicwork);
                    $onedayworktime = floor($onedayworktime * 100) / 100;
                    //1주 주휴시간
                    $weekbreaktime = array_sum($breaktime);
                    //1주 연장 근로시간
                    $weekExtend = array_sum($extendwork);
                    $minuswtime = $minusworktime;
                    //1주 야간 근로시간
                    $weeknightwork = array_sum($nightwork);
                    //1주 휴일 근로시간
                    $weekweekend = array_sum($weekend);
                    //1주 휴일 연장시간
                    $weekweekendover = array_sum($weekendovertime);
                    //1주 휴일 야간시간
                    $weekweekendnight = array_sum($weekendnighttime);

                    //1달 소정 근로시간
                    $totalWorkTime = $weekworktime * 4.345;
                    $totalWorkTime = floor($totalWorkTime * 100) / 100;
                    //1달 주휴시간
                    $totalBreakTime = $weekbreaktime * 4.345;
                    $totalBreakTime = floor($totalBreakTime * 100) / 100;
                    //1달 연장시간
                    $totalWeekExtend = $minuswtime * 4.345;
                    $totalWeekExtend = floor($totalWeekExtend * 100) / 100;
                    //1달 야간 근로시간
                    $totalNightTime = $weeknightwork * 4.345;
                    $totalNightTime = floor($totalNightTime * 100) / 100;
                    //1달 휴일 근로시간
                    $totalWeekendWorkTime = $weekweekend * 4.345;
                    $totalWeekendWorkTime = floor($totalWeekendWorkTime * 100) / 100;
                    //1달 휴일 초과 근로시간
                    $totalWeekendOverTime = $weekweekendover * 4.345;
                    $totalWeekendOverTime = floor($totalWeekendOverTime * 100) / 100;
                    //1달 휴일 야간 근로시간
                    $totalWeekendnightTime = $weekweekendnight * 4.345;
                    $totalWeekendnightTime = floor($totalWeekendnightTime * 100) / 100;
                    //월 연차시간
                    $monthannualleave = 7 * 15;
                    $monthannualleave = $monthannualleave / 12;

                }//실근로시간 값이 전부 들어왔을때




            }//근무타입 if 끝

            $total = $totalWorkTime + $totalBreakTime + $totalWeekExtend + $totalNightTime + $totalWeekendWorkTime + $totalWeekendOverTime + $totalWeekendnightTime + $monthannualleave;


        } //계산 for문 끝

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

            for($i=0; $i<7; $i++){
                $calcs = Calctable::where('type', '=', $type)->first();
                $calcs->mtotal = $totalWorkTime ;
                $calcs->mbreak = $totalBreakTime;
                $calcs->mover = $totalWeekExtend ;
                $calcs->mnight = $totalNightTime;
                $calcs->mwwork = $totalWeekendWorkTime;
                $calcs->mwover = $totalWeekendOverTime;
                $calcs->mwnight = $totalWeekendnightTime;
                $calcs->mwbt = $monthannualleave;
                $calcs->total = $total;
                $calcs->save();
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
