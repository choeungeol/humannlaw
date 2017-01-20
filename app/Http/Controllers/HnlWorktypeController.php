<?php
//기본정보등록 - 근무유형
namespace App\Http\Controllers;

use App\Calctable;
use App\Worktype;
use App\Worktypes1;
use App\Worktypes1Calc;
use App\Worktypes2;
use App\Worktypes2Calc;
use App\Worktypes3;
use App\Worktypes3Calc;
use App\Worktypes4;
use App\Worktypes4Calc;
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
        $worknum = array('없음','매주','격주','월1회','월2회','월3회','월4회');
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

        if(Sentinel::check())

            return view('hnl.basicinfo.worktype', compact('days','worknum','worktype','typename','calctotal'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    public function index1()
    {


        $worktype = Worktypes1::all();
        $calctotal = Worktypes1Calc::all();
        $alpha = array('A','B','C','D','E','F','G','H','I','J');

        for($i=0; $i < count($alpha); $i++){
            $calc[] =  Worktypes1Calc::where('type', '=', $alpha[$i])->get();
        }

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]] = Worktypes1::where('type', '=', $alpha[$i])->get();
        }

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]][] = $calc[$i];
        }

        if(Sentinel::check())

        return view('hnl.basicinfo.worktype1',compact('typename','calctotal'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function index2()
    {
        $alpha = array('A','B','C','D','E','F','G','H','I','J');
        $worktype = Worktypes2::all();
        $calctotal = Worktypes2Calc::all();

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]] = Worktypes2::where('type','=',$alpha[$i])->get();
        }

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]][] = $calctotal[$i];
        }

        if(Sentinel::check())

            return view('hnl.basicinfo.worktype2', compact('typename'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function index3()
    {
        $alpha = array('A','B','C','D','E','F','G','H','I','J');
        $calctotal = Worktypes3Calc::all();

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]] = Worktypes3::where('type','=',$alpha[$i])->get();
        }


        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]][] = $calctotal[$i];
        }

        if(Sentinel::check())

            return view('hnl.basicinfo.worktype3', compact('typename'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function index4()
    {

        $alpha = array('A','B','C','D','E','F','G','H','I','J');
        $calctotal = Worktypes4Calc::all();

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]] = Worktypes4::where('type','=',$alpha[$i])->get();
        }


        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]][] = $calctotal[$i];
        }

        if(Sentinel::check())

            return view('hnl.basicinfo.worktype4',compact('typename'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function typeInsert(Request $request)
    {

        $type = $request->type;
        $isnextday = array(
            0 => $request->is_next_day0,
            1 => $request->is_next_day1,
            2 => $request->is_next_day2,
            3 => $request->is_next_day3,
            4 => $request->is_next_day4,
            5 => $request->is_next_day5,
            6 => $request->is_next_day6,
        );


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

        $sbtime1 = array(

            0 => $request->break_stime10,
            1 => $request->break_stime11,
            2 => $request->break_stime12,
            3 => $request->break_stime13,
            4 => $request->break_stime14,
            5 => $request->break_stime15,
            6 => $request->break_stime16
        );

        $ebtime1 = array(

            0 => $request->break_etime10,
            1 => $request->break_etime11,
            2 => $request->break_etime12,
            3 => $request->break_etime13,
            4 => $request->break_etime14,
            5 => $request->break_etime15,
            6 => $request->break_etime16
        );

        $sbtime2 = array(

            0 => $request->break_stime20,
            1 => $request->break_stime21,
            2 => $request->break_stime22,
            3 => $request->break_stime23,
            4 => $request->break_stime24,
            5 => $request->break_stime25,
            6 => $request->break_stime26
        );

        $ebtime2 = array(

            0 => $request->break_etime20,
            1 => $request->break_etime21,
            2 => $request->break_etime22,
            3 => $request->break_etime23,
            4 => $request->break_etime24,
            5 => $request->break_etime25,
            6 => $request->break_etime26
        );

        $sbtime3 = array(

            0 => $request->break_stime30,
            1 => $request->break_stime31,
            2 => $request->break_stime32,
            3 => $request->break_stime33,
            4 => $request->break_stime34,
            5 => $request->break_stime35,
            6 => $request->break_stime36
        );

        $ebtime3 = array(

            0 => $request->break_etime30,
            1 => $request->break_etime31,
            2 => $request->break_etime32,
            3 => $request->break_etime33,
            4 => $request->break_etime34,
            5 => $request->break_etime35,
            6 => $request->break_etime36
        );

        $worktype = array($request->worktype_0, $request->worktype_1, $request->worktype_2, $request->worktype_3, $request->worktype_4, $request->worktype_5, $request->worktype_6);

        $worknum = array($request->now_0, $request->now_1, $request->now_2, $request->now_3, $request->now_4, $request->now_5, $request->now_6);

        $workstart = str_replace(':','',$workstart);    //업무시작시간 : 표시 없애기
        $workend = str_replace(':','',$workend);        //업무종료시간 : 표시 없애기
        $sbtime1 = str_replace(':','',$sbtime1);    //휴식시작시간1 : 표시 없애기
        $ebtime1 = str_replace(':','',$ebtime1);    //휴식종료시간1 : 표시 없애기
        $sbtime2 = str_replace(':','',$sbtime2);    //휴식시작시간2 : 표시 없애기
        $ebtime2 = str_replace(':','',$ebtime2);    //휴식종료시간2 : 표시 없애기
        $sbtime3 = str_replace(':','',$sbtime3);    //휴식시작시간3 : 표시 없애기
        $ebtime3 = str_replace(':','',$ebtime3);    //휴식종료시간3 : 표시 없애기

        $scount = count($workstart);
        $ecount = count($workend);
        $sbcount = count($sbtime1);
        $ebcount = count($ebtime1);
        $sbcount2 = count($sbtime2);
        $ebcount2 = count($ebtime2);
        $sbcount3 = count($sbtime3);
        $ebcount3 = count($ebtime3);

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

        for($i=0; $i < $sbcount; $i++){
            if(in_array(null,$sbtime1)){
                $count1 = array_search(null,$sbtime1);
                array_splice($sbtime1,$count1,1,"0");
            }
        } // 휴게시작시간1 입력값이 비어있으면 0

        for($i=0; $i < $ebcount; $i++){
            if(in_array(null,$ebtime1)){
                $count1 = array_search(null,$ebtime1);
                array_splice($ebtime1,$count1,1,"0");
            }
        } // 휴게종료시간1 입력값이 비어있으면 0

        for($i=0; $i < $sbcount2; $i++){
            if(in_array(null,$sbtime2)){
                $count1 = array_search(null,$sbtime2);
                array_splice($sbtime2,$count1,1,"0");
            }
        } // 휴게시작시간2 입력값이 비어있으면 0

        for($i=0; $i < $ebcount2; $i++){
            if(in_array(null,$ebtime2)){
                $count1 = array_search(null,$ebtime2);
                array_splice($ebtime2,$count1,1,"0");
            }
        } // 휴게종료시간2 입력값이 비어있으면 0

        for($i=0; $i < $sbcount3; $i++){
            if(in_array(null,$sbtime3)){
                $count1 = array_search(null,$sbtime3);
                array_splice($sbtime3,$count1,1,"0");
            }
        } // 휴게시작시간3 입력값이 비어있으면 0

        for($i=0; $i < $ebcount3; $i++){
            if(in_array(null,$ebtime3)){
                $count1 = array_search(null,$ebtime3);
                array_splice($ebtime3,$count1,1,"0");
            }
        } // 휴게종료시간3 입력값이 비어있으면 0

        //1주소정근로시간
        $ONEWEEKWORKTIME = sprintf('%02.2f', floor(4000 * 100) / 10000);
        $BASICWORK = sprintf('%02.2f', floor(800 * 100) / 10000);
        //계산
        for($i=0; $i < 7; ++$i){


            if($isnextday[$i] === 'on'){
                $weekwork[] = sprintf('%02.2f', floor((2400 + $workend[$i] - $workstart[$i]) * 100) / 10000);   //업무종료시간 - 업무시작시간 = 총 근로시간;
            }else{
                $weekwork[] = sprintf('%02.2f', floor(($workend[$i] - $workstart[$i]) * 100) / 10000);  //업무종료시간 - 업무시작시간 = 총 근로시간;
            }
            $break1[] = sprintf('%02.2f', floor(($ebtime1[$i] - $sbtime1[$i]) * 100) / 10000);       //휴게종료시간1 - 휴게시작시간1
            $break2[] = sprintf('%02.2f', floor(($ebtime2[$i] - $sbtime2[$i]) * 100) / 10000);       //휴게종료시간2 - 휴게시작시간2
            $break3[] = sprintf('%02.2f', floor(($ebtime3[$i] - $sbtime3[$i]) * 100) / 10000);       //휴게종료시간3 - 휴게시작시간3
            $break[] = $break1[$i] + $break2[$i] + $break3[$i];      // 휴게시간123 합
            $totalwork[] = sprintf('%02.2f', floor($weekwork[$i] - $break[$i]));                    //실근로시간
            $workending[] =  sprintf('%02.2f', floor($workend[$i] * 100) / 10000);                  //근로종료시간

            if($worknum[$i] === '매주'){

                //기본 근로시간
                if($totalwork[$i] > 8.00){
                    $realworktime[] = $BASICWORK;
                }else{
                    $realworktime[] = $totalwork[$i];
                } //기본 근로시간 끝

                //1주소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = $BASICWORK;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = $BASICWORK;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = $totalwork[$i];
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = $totalwork[$i];
                    }else{
                        $realwtime[] = '0.00';
                    }
                }// 근무일의 기본근로시간

                //1일 소정 근로시간
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        $realwtimeone[] = $BASICWORK;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일'){
                        $realwtimeone[] = $totalwork[$i];
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }// 1일 소정근로시간

                //8시간 초과시 연장근로 시간
                //무급휴무일이면 근무일로 선택된 요일의 합계
                //무급휴무일의 실근로시간 합계 합친것에 -40을 해준다.


                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        //연장근로시간
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5);
                    }elseif($worktype[$i] === '유급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5);
                    }elseif($worktype[$i] === '무급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5);
                    }elseif($worktype[$i] === '무급휴무일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5);
                    }
                }else{
                    $extendwork[] = 0.00 * 1.5;
                } //연장근로시간

                //근무일에 기본근로시간+ 무급휴무일의 실근로시간 의 합산에서 1주 소정근로시간을 뺀 다음 * 1.5

                //야간 근로시간
                $night = sprintf('%02.2f', floor(2200 * 100) / 10000);

                if($workending[$i] > $night){

                    if($worktype[$i] === '근무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork)* 0.5);
                    }elseif($worktype[$i] === '유급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork) * 0.5);
                    }elseif($worktype[$i] === '무급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork) *0.5);
                    }elseif($worktype[$i] === '무급휴무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork) * 0.5);
                    }

                }else{
                    $nightwork[] = '0.00';
                } // 야간근로시간 끝

            } elseif($worknum[$i] === '격주'){

                //기본 근로시간
                if($totalwork[$i] > 8.00){
                    $realworktime[] = $BASICWORK / 2;
                }else{
                    $realworktime[] = $totalwork[$i] / 2;
                } //기본 근로시간 끝

                //1주소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = $BASICWORK / 2;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = $BASICWORK / 2;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = $totalwork[$i] / 2;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = $totalwork[$i] / 2;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }// 근무일의 기본근로시간

                //1일 소정 근로시간
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        $realwtimeone[] = $BASICWORK / 2;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일'){
                        $realwtimeone[] = $totalwork[$i] /2 ;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }// 1일 소정근로시간

                //8시간 초과시 연장근로 시간
                //무급휴무일이면 근무일로 선택된 요일의 합계
                //무급휴무일의 실근로시간 합계 합친것에 -40을 해준다.

                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        //연장근로시간
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5) / 2;
                    }elseif($worktype[$i] === '유급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5)/ 2;
                    }elseif($worktype[$i] === '무급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5) / 2;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  sprintf('%02.2f', floor($extend) * 1.5) / 2;
                    }
                }else{
                    $extendwork[] = 0.00 * 1.5;
                } //연장근로시간

                //야간 근로시간
                $night = sprintf('%02.2f', floor(2200 * 100) / 10000);

                if($workending[$i] > $night){

                    if($worktype[$i] === '근무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork)* 0.5) / 2;
                    }elseif($worktype[$i] === '유급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork) * 0.5) / 2;
                    }elseif($worktype[$i] === '무급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork) *0.5) / 2;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork) * 0.5) / 2;
                    }

                }else{
                    $nightwork[] = '0.00';
                } // 야간근로시간 끝


            }elseif($worknum[$i] === '월1회'){
                //기본 근로시간
                if($totalwork[$i] > 8.00){
                    $realworktime[] = ($BASICWORK * 1) / 4.345;
                }else{
                    $realworktime[] = ($totalwork[$i] * 1) / 4.345;
                } //기본 근로시간 끝

                //1주소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($BASICWORK * 1) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 1) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($totalwork[$i] * 1) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($totalwork[$i] * 1) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }// 근무일의 기본근로시간

                //1일소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($BASICWORK * 1) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($totalwork[$i] * 1) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }// 근무일의 기본근로시간


                //8시간 초과시 연장근로 시간
                //무급휴무일이면 근무일로 선택된 요일의 합계
                //무급휴무일의 실근로시간 합계 합친것에 -40을 해준다.

                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        //연장근로시간
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 1) / 4.345;
                    }elseif($worktype[$i] === '유급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 1) / 4.345;
                    }elseif($worktype[$i] === '무급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 1) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $extendwork[] =  (sprintf('%02.2f', floor($totalwork[$i]) *1.5) * 1) / 4.345;
                    }
                }else{
                    $extendwork[] = (0.00 * 1.5) / 4.345;
                } //연장근로시간

                //야간 근로시간
                $night = sprintf('%02.2f', floor(2200 * 100) / 10000);

                if($workending[$i] > $night){

                    if($worktype[$i] === '근무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork)* 0.5) * 1) / 4.345;
                    }elseif($worktype[$i] === '유급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) * 0.5) * 1) / 4.345;
                    }elseif($worktype[$i] === '무급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) *0.5) * 1) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) * 0.5) * 1) / 4.345;
                    }

                }else{
                    $nightwork[] = '0.00';
                } // 야간근로시간 끝

            }elseif($worknum[$i] === '월2회'){
                //기본 근로시간
                if($totalwork[$i] > 8.00){
                    $realworktime[] = ($BASICWORK * 2) / 4.345;
                }else{
                    $realworktime[] = ($totalwork[$i] * 2) / 4.345;
                } //기본 근로시간 끝


                //1주소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($BASICWORK * 2) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 2) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($totalwork[$i] * 2) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($totalwork[$i] * 2) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }// 근무일의 기본근로시간

                //1일소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($BASICWORK * 2) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($totalwork[$i] * 2) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }// 근무일의 기본근로시간



                //8시간 초과시 연장근로 시간
                //무급휴무일이면 근무일로 선택된 요일의 합계
                //무급휴무일의 실근로시간 합계 합친것에 -40을 해준다.

                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        //연장근로시간
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 2) / 4.345;
                    }elseif($worktype[$i] === '유급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 2) / 4.345;
                    }elseif($worktype[$i] === '무급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 2) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 2) / 4.345;
                    }
                }else{
                    $extendwork[] = (0.00 * 1.5) / 4.345;
                } //연장근로시간

                //야간 근로시간
                $night = sprintf('%02.2f', floor(2200 * 100) / 10000);

                if($workending[$i] > $night){

                    if($worktype[$i] === '근무일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork)* 0.5) * 2) / 4.345;

                    }elseif($worktype[$i] === '유급휴일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) * 0.5) * 2) / 4.345;

                    }elseif($worktype[$i] === '무급휴일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) *0.5) * 2) / 4.345;

                    }elseif($worktype[$i] === '무급휴무일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = sprintf('%02.2f', floor($nwork) * 0.5) * 2;

                    }

                }else{

                    $nightwork[] = '0.00';

                } // 야간근로시간 끝

            }elseif($worknum[$i] === '월3회'){
                //기본 근로시간
                if($totalwork[$i] > 8.00){
                    $realworktime[] = ($BASICWORK * 3) / 4.345;
                }else{
                    $realworktime[] = ($totalwork[$i] * 3) / 4.345;
                } //기본 근로시간 끝


                //1주소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($BASICWORK * 3) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 3) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($totalwork[$i] * 3) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($totalwork[$i] * 3) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }// 근무일의 기본근로시간

                //1일소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($BASICWORK * 3) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($totalwork[$i] * 3) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }// 근무일의 기본근로시간


                //8시간 초과시 연장근로 시간
                //무급휴무일이면 근무일로 선택된 요일의 합계
                //무급휴무일의 실근로시간 합계 합친것에 -40을 해준다.

                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        //연장근로시간
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 3) / 4.345;
                    }elseif($worktype[$i] === '유급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 3) / 4.345;
                    }elseif($worktype[$i] === '무급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 3) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 3) / 4.345;
                    }
                }else{

                    $extendwork[] = ((0.00 * 1.5) * 3) / 4.345;

                } //연장근로시간

                //야간 근로시간
                $night = sprintf('%02.2f', floor(2200 * 100) / 10000);

                if($workending[$i] > $night){

                    if($worktype[$i] === '근무일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork)* 0.5) * 3) / 4.345;

                    }elseif($worktype[$i] === '유급휴일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) * 0.5) * 3) / 4.345;

                    }elseif($worktype[$i] === '무급휴일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) *0.5) * 3) / 4.345;

                    }elseif($worktype[$i] === '무급휴무일'){

                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) * 0.5) * 3)/ 4.345;

                    }

                }else{
                    $nightwork[] = '0.00';
                } // 야간근로시간 끝

            }elseif($worknum[$i] === '월4회'){
                //기본 근로시간
                if($totalwork[$i] > 8.00){
                    $realworktime[] = ($BASICWORK * 4) / 4.345;
                }else{
                    $realworktime[] = ($totalwork[$i] * 4) / 4.345;
                } //기본 근로시간 끝

                //1주소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($BASICWORK * 4) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 4) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtime[] = ($totalwork[$i] * 4) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($totalwork[$i] * 4) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }// 근무일의 기본근로시간

                //1일소정근로시간 구하기 위한 조건
                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($BASICWORK * 4) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일') {
                        $realwtimeone[] = ($totalwork[$i] * 4) / 4.345;
                    }else{
                        $realwtimeone[] = '0.00';
                    }
                }// 근무일의 기본근로시간


                //8시간 초과시 연장근로 시간
                //무급휴무일이면 근무일로 선택된 요일의 합계
                //무급휴무일의 실근로시간 합계 합친것에 -40을 해준다.

                if($totalwork[$i] > 8.00){
                    if($worktype[$i] === '근무일'){
                        //연장근로시간
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 4) / 4.345;
                    }elseif($worktype[$i] === '유급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 4) / 4.345;
                    }elseif($worktype[$i] === '무급휴일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 4) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $extend = $totalwork[$i] - $BASICWORK;
                        $extendwork[] =  (sprintf('%02.2f', floor($extend) * 1.5) * 4) / 4.345;
                    }
                }else{
                    $extendwork[] = ((0.00 * 1.5) *3) / 4.345;
                } //연장근로시간

                //야간 근로시간
                $night = sprintf('%02.2f', floor(2200 * 100) / 10000);

                if($workending[$i] > $night){

                    if($worktype[$i] === '근무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork)* 0.5) * 4) / 4.345;
                    }elseif($worktype[$i] === '유급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) * 0.5) * 4) / 4.345;
                    }elseif($worktype[$i] === '무급휴일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) *0.5) * 4) / 4.345;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $nwork = $workending[$i] - $night;
                        $nightwork[] = (sprintf('%02.2f', floor($nwork) * 0.5) * 4)/ 4.345;
                    }

                }else{
                    $nightwork[] = '0.00';
                } // 야간근로시간 끝

            }elseif($worknum[$i] === '없음'){
                $nightwork[] = '0.00';
                $extendwork[] = '0.00';
                $realworktime[] = '0.00';

            }//근무횟수 if 끝

            //1주 소정 근로시간
            $weekworktime = sprintf('%02.2f', array_sum($realwtime));

            if(count($totalwork) === 7){

                if($weekworktime > $ONEWEEKWORKTIME){

                    $minusworktime = sprintf('%02.2f', floor($weekworktime)) - $ONEWEEKWORKTIME;
                    $weekworktime = $ONEWEEKWORKTIME;

                }else{

                    $minusworktime = '0.00';
                    $weekworktime = $weekworktime;

                }//1주 소정근로시간이 40시간 기준

                if(count($totalwork) === 7) {
                    $basicw = $realwtimeone;
                    for ($i = 0; $i < count($basicw); $i++) {
                        if (array_search('0.00', $basicw)) {
                            $one = array_search('0.00', $basicw);
                            array_splice($basicw, $one, 1);
                        }
                    }
                    $countone = count($basicw);
                }

                //1일 소정 근로시간
                $onedayworktime = sprintf('%02.2f', array_sum($basicw) / $countone);  // 1주일분 기본근로시간 / 근무일로 선택된 수
                $TEST = '';
                //1주 연장 근로시간
                //근무일 무급휴무일 합산
                for($i=0; $i < count($worktype); $i++) {

                    if ($worktype[$i] === '근무일') {
                        $works[] = $extendwork[$i];
                    } else {
                        $works[] = '0.00';
                    }
                    if ($worktype[$i] === '무급휴무일') {
                        $workss[] = $extendwork[$i];
                    } else {
                        $workss[]  = '0.00';
                    }
                }
                $weekExtend = sprintf('%02.2f', floor(array_sum($works) + array_sum($workss))+ ($minusworktime * 1.5));

                //1주 야간근로시간
                //근무일 무급휴무일 합산
                for($i=0; $i < count($worktype); $i++) {
                    //1주 야간 근로시간
                    if ($worktype[$i] === '근무일') {
                        $nights[] = $nightwork[$i];
                    } else {
                        $nights[] = '0.00';
                    }
                    if ($worktype[$i] === '무급휴무일') {
                        $nightss[] = $nightwork[$i];
                    } else {
                        $nightss[] = '0.00';
                    }
                }
                $weeknight = sprintf('%02.2f', floor(array_sum($nights) + array_sum($nightss)));

                //1주 휴일 근로시간
                for($i=0; $i < count($worktype); $i++) {
                    if ($worktype[$i] === '유급휴일') {
                        $holiday[] = $realworktime[$i];
                    } else {
                        $holiday[] = '0.00';
                    }
                    if ($worktype[$i] === '무급휴일') {
                        $holidays[] = $realworktime[$i];
                    } else {
                        $holidays[] = '0.00';
                    }
                }
                $weekweekend = array_sum($holiday) + array_sum($holidays);
                $weekweekend = sprintf('%02.2f', floor($weekweekend) * 1.5) ;

                //1주 휴일 연장시간
                for($i=0; $i < count($worktype); $i++) {
                    if ($worktype[$i] === '유급휴일') {
                        $worksno[] = $extendwork[$i];
                    } else {
                        $worksno[] = '0.00';
                    }

                    if ($worktype[$i] === '무급휴일') {
                        $workssno[] = $extendwork[$i];
                    } else {
                        $workssno[] = '0.00';
                    }
                }
                $weekweekendover = array_sum($worksno) + array_sum($workssno);
                $weekweekendover = $weekweekendover / 1.5;
                $weekweekendover = sprintf('%02.2f', floor($weekweekendover) * 2);

                for($i=0; $i < count($worktype); $i++) {
                    //1주 휴일 야간시간
                    if($worktype[$i] === '유급휴일'){
                        $worksnos[] = $nightwork[$i];
                    }else{
                        $worksnos[] = '0.00';
                    }

                    if($worktype[$i] === '무급휴일'){
                        $workssnos[] = $nightwork[$i];
                    }else{
                        $workssnos[]   = '0.00';
                    }

                }
                $weekweekendnight = array_sum($worksnos) + array_sum($workssnos);
                //1달 소정 근로시간
                $totalWorkTime = $weekworktime * 4.345;
                $totalWorkTime = sprintf('%02.2f', $totalWorkTime);

                //1달 주휴시간
                $totalBreakTime = $onedayworktime * 4.345;
                $totalBreakTime = sprintf('%02.2f', $totalBreakTime);
                //1달 연장시간
                $totalWeekExtend = $weekExtend * 4.345;
                $totalWeekExtend = sprintf('%02.2f', $totalWeekExtend);
                //1달 야간 근로시간
                $totalNightTime = $weeknight * 4.345;
                $totalNightTime = sprintf('%02.2f', $totalNightTime);
                //1달 휴일 근로시간
                $totalWeekendWorkTime = $weekweekend * 4.345;
                $totalWeekendWorkTime = sprintf('%02.2f', $totalWeekendWorkTime);
                //1달 휴일 초과 근로시간
                $totalWeekendOverTime = $weekweekendover * 4.345;
                $totalWeekendOverTime = sprintf('%02.2f', $totalWeekendOverTime);
                //1달 휴일 야간 근로시간
                $totalWeekendnightTime = $weekweekendnight * 4.345;
                $totalWeekendnightTime = sprintf('%02.2f', $totalWeekendnightTime);
                //월 연차시간
                $monthannualleave = ($onedayworktime * 15) / 12;
                $monthannualleave = sprintf('%02.2f',$monthannualleave);

                $total = $totalWorkTime + $totalBreakTime + $totalWeekExtend + $totalNightTime + $totalWeekendWorkTime + $totalWeekendOverTime + $totalWeekendnightTime + $monthannualleave;

            }//실근로시간 값이 전부 들어왔을때


        } //계산 for문 끝

        for($i=0; $i<7; $i++){
            $types = Worktype::where('type', '=', $type)->where('sortnum', '=', $i)->first();
            $types->type = $type;
            $types->worknum = $worknum[$i];
            $types->worktype = $worktype[$i];
            $types->sworktime = $workstart[$i];
            $types->eworktime = $workend[$i];
            $types->sbtime1 = $sbtime1[$i];
            $types->ebtime1 = $ebtime1[$i];
            $types->sbtime2 = $sbtime2[$i];
            $types->ebtime2 = $ebtime2[$i];
            $types->sbtime3 = $sbtime3[$i];
            $types->ebtime3 = $ebtime3[$i];
            if($isnextday[$i] === 1){
                $types->isnextday = 1;
            }else{
                $types->isnextday = 0;

            }
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

    public function typeInsert1(Request $request)
    {

    }

    public function typeInsert2(Request $request)
    {

        $type = $request->type;
        $workstart = $request->work_start_time;
        $workend = $request->work_end_time;
        $sbtime1 = $request->break_stime1;
        $ebtime1 = $request->break_etime1;
        $sbtime2 = $request->break_stime2;
        $ebtime2 = $request->break_etime2;
        $sbtime3 = $request->break_stime3;
        $ebtime3 = $request->break_etime3;
        $sbtime4 = $request->break_stime4;
        $ebtime4 = $request->break_etime4;

        if($workstart == null){
            $workstart = '00:00';
        } // 시작 시간 입력값이 비어있으면 0

        if($workend == null){
            $workend = '00:00';
        } // 끝 시간 입력값이 비어있으면 0

        if($sbtime1 == null){
            $sbtime1 = '00:00';
        } // 휴게시작시간1 입력값이 비어있으면 0

        if($ebtime1 == null){
           $ebtime1 = '00:00';
        } // 휴게종료시간1 입력값이 비어있으면 0

        if($sbtime2 == null){
            $sbtime2 = '00:00';
        } // 휴게시작시간2 입력값이 비어있으면 0

        if($ebtime2 == null){
            $ebtime2 = '00:00';
        } // 휴게종료시간2 입력값이 비어있으면 0

        if($sbtime3 == null){
            $sbtime3 = '00:00';
        } // 휴게시작시간3 입력값이 비어있으면 0

        if($ebtime3 == null){
            $ebtime3 = '00:00';
        } // 휴게종료시간3 입력값이 비어있으면 0

        if($sbtime4 == null){
            $sbtime4 = '00:00';
        } // 휴게시작시간4 입력값이 비어있으면 0

        if($ebtime4 == null){
            $ebtime4 = '00:00';
        } // 휴게종료시간4 입력값이 비어있으면 0

        $workstart = str_replace(':','',$workstart);    //업무시작시간 : 표시 없애기
        $workend = str_replace(':','',$workend);        //업무종료시간 : 표시 없애기
        $sbtime1 = str_replace(':','',$sbtime1);    //휴식시작시간1 : 표시 없애기
        $ebtime1 = str_replace(':','',$ebtime1);    //휴식종료시간1 : 표시 없애기
        $sbtime2 = str_replace(':','',$sbtime2);    //휴식시작시간2 : 표시 없애기
        $ebtime2 = str_replace(':','',$ebtime2);    //휴식종료시간2 : 표시 없애기
        $sbtime3 = str_replace(':','',$sbtime3);    //휴식시작시간3 : 표시 없애기
        $ebtime3 = str_replace(':','',$ebtime3);    //휴식종료시간3 : 표시 없애기
        $sbtime4 = str_replace(':','',$sbtime4);    //휴식시작시간3 : 표시 없애기
        $ebtime4 = str_replace(':','',$ebtime4);    //휴식종료시간3 : 표시 없애기

        $btime1 = ((float)$ebtime1 - (float)$sbtime1);    // 휴게시간1
/*        if($btime1 == 30){
            $btime1 = 50;
        }elseif($btime1 == 15){
            $btime1 = 25;
        }elseif($btime1 == 45){
            $btime1 = 75;
        }*/

        $btime2 = (float)$ebtime2 - (float)$sbtime2;    // 휴게시간2
        $btime3 = (float)$ebtime3 - (float)$sbtime3;    // 휴게시간3
        $btime4 = (float)$ebtime4 - (float)$sbtime4;    // 휴게시간4
        $allbtime = $btime1 + $btime2 + $btime3 + $btime4;

        $worktime = $workend - $workstart;
        $worktime = $worktime - $allbtime; // 실 근무시간

        $BASICWORK = "0800";
        $NIGHT = "2200";

        if($worktime > $BASICWORK){
            $wtime = $BASICWORK;
        }else{
            $wtime = $worktime;
        }   // 소정근로시간

        $etime = ($worktime - $BASICWORK) * 1.5; //연장근로시간

        if($workend > $NIGHT){
            $ntime = ($workend - $NIGHT) * 0.5;
        }else{
            $ntime = "0000";
        }   // 야간근로시간

        $weekwtime = ($wtime * 7) / 2; //1주 소정근로시간
        $weeketime = ($etime * 7) / 2; //1주 연장근로시간
        $weekntime = ($ntime * 7) / 2; //1주 야간근로시간

        $total = $weekwtime + $weeketime + $weekntime; //1주 총합

        $night = sprintf('%02.2f', floor(2200 * 100) / 10000);

        $monthwtime = sprintf('%02.2f',(($weekwtime * 100) / 10000) * 4.345); //1달 소정근로시간
        $monthetime = sprintf('%02.2f',(($weeketime * 100) / 10000) * 4.345); //1달 연장근로시간
        $monthbtime =  sprintf('%02.2f',(($weekntime * 100) / 10000) * 4.345); //1달 야간근로시간
        $monthbreak =  sprintf('%02.2f',(($wtime * 100) / 10000) * 4.345);        //1달 주휴부여시간
        $monthwbreak =  sprintf('%02.2f',(($wtime * 15) / 12 * 100) / 10000);        //1달 주휴부여시간
        $mtotal = $monthwtime + $monthetime + $monthbtime + $monthbreak + $monthbreak + $monthwbreak;


        $types = Worktypes2::where('type', '=', $type)->first();
        $types->type = $type;
        $types->sworktime = $workstart;
        $types->eworktime = $workend;
        $types->sbtime1 = $sbtime1;
        $types->ebtime1 = $ebtime1;
        $types->sbtime2 = $sbtime2;
        $types->ebtime2 = $ebtime2;
        $types->sbtime3 = $sbtime3;
        $types->ebtime3 = $ebtime3;
        $types->sbtime4 = $sbtime4;
        $types->ebtime4 = $ebtime4;
        $types->save();

        $totals = Worktypes2Calc::where('type', '=', $type)->first();
        $totals->type = $type;
        $totals->mtotal = $monthwtime;
        $totals->mover = $monthetime;
        $totals->mnight = $monthbtime;
        $totals->mbreak = $monthbreak;
        $totals->mwbt = $monthwbreak;
        $totals->total = $mtotal;
        $totals->save();


        return Redirect::to('hnl/basicinfo/worktype2')->with('success');

    }

    public function typeInsert3(Request $request)
    {

        $type = $request->type;
        $workstart = $request->work_start_time;
        $workend = $request->work_end_time;
        $nextdaytime = $request->is_next_time;
        $sbtime1 = $request->break_stime1;
        $ebtime1 = $request->break_etime1;
        $sbtime2 = $request->break_stime2;
        $ebtime2 = $request->break_etime2;
        $sbtime3 = $request->break_stime3;
        $ebtime3 = $request->break_etime3;
        $sbtime4 = $request->break_stime4;
        $ebtime4 = $request->break_etime4;

        if($workstart == null){
            $workstart = '00:00';
        } // 시작 시간 입력값이 비어있으면 0

        if($workend == null){
            $workend = '00:00';
        } // 끝 시간 입력값이 비어있으면 0

        if($sbtime1 == null){
            $sbtime1 = '00:00';
        } // 휴게시작시간1 입력값이 비어있으면 0

        if($ebtime1 == null){
            $ebtime1 = '00:00';
        } // 휴게종료시간1 입력값이 비어있으면 0

        if($sbtime2 == null){
            $sbtime2 = '00:00';
        } // 휴게시작시간2 입력값이 비어있으면 0

        if($ebtime2 == null){
            $ebtime2 = '00:00';
        } // 휴게종료시간2 입력값이 비어있으면 0

        if($sbtime3 == null){
            $sbtime3 = '00:00';
        } // 휴게시작시간3 입력값이 비어있으면 0

        if($ebtime3 == null){
            $ebtime3 = '00:00';
        } // 휴게종료시간3 입력값이 비어있으면 0

        if($sbtime4 == null){
            $sbtime4 = '00:00';
        } // 휴게시작시간4 입력값이 비어있으면 0

        if($ebtime4 == null){
            $ebtime4 = '00:00';
        } // 휴게종료시간4 입력값이 비어있으면 0

        $workstart = str_replace(':','',$workstart);    //업무시작시간 : 표시 없애기
        $workend = str_replace(':','',$workend);        //업무종료시간 : 표시 없애기
        $sbtime1 = str_replace(':','',$sbtime1);    //휴식시작시간1 : 표시 없애기
        $ebtime1 = str_replace(':','',$ebtime1);    //휴식종료시간1 : 표시 없애기
        $sbtime2 = str_replace(':','',$sbtime2);    //휴식시작시간2 : 표시 없애기
        $ebtime2 = str_replace(':','',$ebtime2);    //휴식종료시간2 : 표시 없애기
        $sbtime3 = str_replace(':','',$sbtime3);    //휴식시작시간3 : 표시 없애기
        $ebtime3 = str_replace(':','',$ebtime3);    //휴식종료시간3 : 표시 없애기
        $sbtime4 = str_replace(':','',$sbtime4);    //휴식시작시간4 : 표시 없애기
        $ebtime4 = str_replace(':','',$ebtime4);    //휴식종료시간4 : 표시 없애기

        $btime1 = (float)$ebtime1 - (float)$sbtime1;    // 휴게시간1
        $btime2 = (float)$ebtime2 - (float)$sbtime2;    // 휴게시간2
        $btime3 = (float)$ebtime3 - (float)$sbtime3;    // 휴게시간3
        $btime4 = (float)$ebtime4 - (float)$sbtime4;    // 총 야간 휴게시간
        $allbtime = $btime1 + $btime2 + $btime3 + $btime4;

        if($nextdaytime === 'on'){
            $exittime = 2400 + $workend;
        }else{
            $exittime = $workend;
        }// 익일 체크시 + 2400


        $worktime = $exittime - $workstart;  // 근로시간

        $BASIC = "0800";
        $NIGHT = "2200";

        if($exittime > $NIGHT){
            $nightw = $exittime - $NIGHT;
        }else{
            $nightw = 0;
        }// 퇴근시간 - 야간기준시간

        if($sbtime4 < $NIGHT){
            $nightwork = $btime4 - ($NIGHT - $sbtime4);
        }else{
            $nightwork = 0;
        }// 야간기준시간 - 야간 휴게 시작시간

        $anightwork = $nightw - $nightwork;     //야간근로

        $work = $worktime - $allbtime; // 실 근무시간

        $monthworktime = ceil((($work * 100) / 10000) * 7 * 4.345 / 2); // 1달 소정근로시간
        $monthnworktime = ceil((($anightwork * 100) / 10000) * 0.5 * 7 * 4.345 / 2); // 1달 야간근로시간

        if($work >$BASIC){
            $monthbwt = sprintf('%02.2f',floor(($BASIC * 15) /12) * 100) /10000;
        }else{
            $monthbwt =  sprintf('%02.2f',floor(($work * 15) /12) * 100) /10000;
        }   //  월 연차시간

        $alltotal = $monthworktime + $monthnworktime + $monthbwt ; // 총 근로시간

        $types = Worktypes3::where('type', '=', $type)->first();
        $types->type = $type;
        $types->sworktime = $workstart;
        $types->eworktime = $workend;
        $types->nextdaytime = $nextdaytime;
        $types->sbtime1 = $sbtime1;
        $types->ebtime1 = $ebtime1;
        $types->sbtime2 = $sbtime2;
        $types->ebtime2 = $ebtime2;
        $types->sbtime3 = $sbtime3;
        $types->ebtime3 = $ebtime3;
        $types->sbtime4 = $sbtime4;
        $types->ebtime4 = $ebtime4;
        $types->save();

        $totals = Worktypes3Calc::where('type', '=', $type)->first();
        $totals->type = $type;
        $totals->mtotal = $monthworktime;
        $totals->mnight = $monthnworktime;
        $totals->mwbt = $monthbwt;
        $totals->total = $alltotal;
        $totals->save();



        return Redirect::to('hnl/basicinfo/worktype3')->with('success');

    }

    public function typeInsert4(Request $request)
    {
        $type = $request->type;
        $workstart = $request->work_start_time;
        $workend = $request->work_end_time;
        $sbtime1 = $request->break_stime1;
        $ebtime1 = $request->break_etime1;
        $sbtime2 = $request->break_stime2;
        $ebtime2 = $request->break_etime2;
        $sbtime3 = $request->break_stime3;
        $ebtime3 = $request->break_etime3;
        $sbtime4 = $request->break_stime4;
        $ebtime4 = $request->break_etime4;
        $daypay = $request->daypay;
        $workday = $request->workday;

        if($workstart == null){
            $workstart = '00:00';
        } // 시작 시간 입력값이 비어있으면 0

        if($workend == null){
            $workend = '00:00';
        } // 끝 시간 입력값이 비어있으면 0

        if($sbtime1 == null){
            $sbtime1 = '00:00';
        } // 휴게시작시간1 입력값이 비어있으면 0

        if($ebtime1 == null){
            $ebtime1 = '00:00';
        } // 휴게종료시간1 입력값이 비어있으면 0

        if($sbtime2 == null){
            $sbtime2 = '00:00';
        } // 휴게시작시간2 입력값이 비어있으면 0

        if($ebtime2 == null){
            $ebtime2 = '00:00';
        } // 휴게종료시간2 입력값이 비어있으면 0

        if($sbtime3 == null){
            $sbtime3 = '00:00';
        } // 휴게시작시간3 입력값이 비어있으면 0

        if($ebtime3 == null){
            $ebtime3 = '00:00';
        } // 휴게종료시간3 입력값이 비어있으면 0

        if($sbtime4 == null){
            $sbtime4 = '00:00';
        } // 휴게시작시간4 입력값이 비어있으면 0

        if($ebtime4 == null){
            $ebtime4 = '00:00';
        } // 휴게종료시간4 입력값이 비어있으면 0

        $workstart = str_replace(':','',$workstart);    //업무시작시간 : 표시 없애기
        $workend = str_replace(':','',$workend);        //업무종료시간 : 표시 없애기
        $sbtime1 = str_replace(':','',$sbtime1);    //휴식시작시간1 : 표시 없애기
        $ebtime1 = str_replace(':','',$ebtime1);    //휴식종료시간1 : 표시 없애기
        $sbtime2 = str_replace(':','',$sbtime2);    //휴식시작시간2 : 표시 없애기
        $ebtime2 = str_replace(':','',$ebtime2);    //휴식종료시간2 : 표시 없애기
        $sbtime3 = str_replace(':','',$sbtime3);    //휴식시작시간3 : 표시 없애기
        $ebtime3 = str_replace(':','',$ebtime3);    //휴식종료시간3 : 표시 없애기
        $sbtime4 = str_replace(':','',$sbtime4);    //휴식시작시간3 : 표시 없애기
        $ebtime4 = str_replace(':','',$ebtime4);    //휴식종료시간3 : 표시 없애기


        $btime1 = ((float)$ebtime1 - (float)$sbtime1);    // 휴게시간1
        $btime2 = (float)$ebtime2 - (float)$sbtime2;    // 휴게시간2
        $btime3 = (float)$ebtime3 - (float)$sbtime3;    // 휴게시간3
        $btime4 = (float)$ebtime4 - (float)$sbtime4;    // 휴게시간4
        $allbtime = $btime1 + $btime2 + $btime3 + $btime4;  //총휴게시간

        $worktime = $workend - $workstart;
        $worktime = $worktime - $allbtime; // 실 근로시간

        $BASICWORK = "0800";
        $NIGHT = "2200";

        if($worktime > $BASICWORK){
            $wtime = $BASICWORK;
        }else{
            $wtime = $worktime;
        }   //1일 소정근로시간

        if($worktime > $BASICWORK){
            $etime = ($worktime - $BASICWORK) * 1.5;
        }else{
            $etime = '0000' * 1.5;
        }  //1일 연장근로


        if($workend > $NIGHT){
            $ntime = ($workend - $NIGHT) * 0.5;
        }else{
            $ntime = "0000";
        }   // 1일 야간근로

        if($wtime * 5 == 4000){
            $weekwtime = '4000';
        }else{
            $weekwtime = $wtime * 5;
        }  //1주 소정근로

        $weeketime = ($worktime * 6) - 4000; //1주 연장근로
        $weekntime = ($ntime * 5) + ($ntime * 2);  //1주 야간근로
        $weekendwtime = ($wtime  * 1.5);   //1주 휴일수당
        $weekendetime = $etime; //1주 휴일연장
        $weekendntime = $ntime * 2; //1주 휴일야간
        $weekbreak = $wtime; //주휴일
        $yearpay = ($wtime * 15) / 12;  //연차수당


        $etc1 = ((4000 * 4.345) *100) / 10000;
        $etc2 = (32 * 1.5) * 4.345;
        $etc3 = (6 * 1.5) * 4.345;
        $etc4 = (12 * 1.5) * 4.345;
        $etc5 = (4 * 0.5) * 4.345;
        $etc6 = (1 * 0.5) * 4.345;
        $etc7 = 8 * 4.345;
        $etc8 = ($yearpay *100) / 10000;
        $etctotal = $etc1 + $etc2 + $etc3 + $etc4 + $etc5 + $etc6 + $etc7 + $etc8;

        $percent1 = sprintf('%02.2f',($etc1 / $etctotal) * 100);
        $percent2 = sprintf('%02.2f',($etc2 / $etctotal) * 100);
        $percent3 = sprintf('%02.2f',($etc3 / $etctotal) * 100);
        $percent4 = sprintf('%02.2f',($etc4 / $etctotal) * 100);
        $percent5 = sprintf('%02.2f',($etc5 / $etctotal) * 100);
        $percent6 = sprintf('%02.2f',($etc6 / $etctotal) * 100);
        $percent7 = sprintf('%02.2f',($etc7 / $etctotal) * 100);
        $percent8 = sprintf('%02.2f',($etc8 / $etctotal) * 100);

        $ptotal = $percent1 + $percent2 + $percent3 + $percent4 + $percent5 + $percent6 + $percent7 + $percent8;


        $types = Worktypes4::where('type', '=', $type)->first();
        $types->type = $type;
        $types->sworktime = $workstart;
        $types->eworktime = $workend;
        $types->sbtime1 = $sbtime1;
        $types->ebtime1 = $ebtime1;
        $types->sbtime2 = $sbtime2;
        $types->ebtime2 = $ebtime2;
        $types->sbtime3 = $sbtime3;
        $types->ebtime3 = $ebtime3;
        $types->sbtime4 = $sbtime4;
        $types->ebtime4 = $ebtime4;
        $types->save();

        $totals = Worktypes4Calc::where('type', '=', $type)->first();
        $totals->type = $type;
        $totals->mtotal = $percent1;
        $totals->mover = $percent2;
        $totals->mnight = $percent3;
        $totals->mwwork = $percent4;
        $totals->mwover = $percent5;
        $totals->mwnight = $percent6;
        $totals->mbreak = $percent7;
        $totals->mwbt = $percent8;
        $totals->total = $ptotal;
        $totals->daypay = $daypay;
        $totals->workday = $workday;
        $totals->save();

        return Redirect::to('hnl/basicinfo/worktype4')->with('success');

    }

}
