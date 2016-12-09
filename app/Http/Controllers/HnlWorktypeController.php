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

        $test = array_sum(array(1));

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
        $sbtime1 = str_replace(':','',$sbtime1);    //휴식시작시간 : 표시 없애기
        $ebtime1 = str_replace(':','',$ebtime1);    //휴식종료시간 : 표시 없애기

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

            $weekwork[] = sprintf('%02.2f', floor(($workend[$i] - $workstart[$i]) * 100) / 10000);  //업무종료시간 - 업무시작시간 = 총 근로시간;
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
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = ($BASICWORK * 1) / 4.345 ;
                    }elseif($totalwork[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 1) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    $realwtime[] = ($totalwork[$i] * 1) / 4.345;
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
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = ($BASICWORK * 2) / 4.345 ;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 2) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = ($totalwork[$i] * 2) / 4.345 ;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($totalwork[$i] * 2) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
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
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = ($BASICWORK * 3) / 4.345 ;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 3) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = ($totalwork[$i] * 3) / 4.345 ;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($totalwork[$i] * 3) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                    $realwtime[] = ($totalwork[$i] * 3) / 4.345;
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
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = ($BASICWORK * 4) / 4.345 ;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($BASICWORK * 4) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
                    }
                }else{
                    if($worktype[$i] === '근무일'){
                        $realwtime[] = ($totalwork[$i] * 4) / 4.345 ;
                    }elseif($worktype[$i] === '무급휴무일'){
                        $realwtime[] = ($totalwork[$i] * 4) / 4.345 ;
                    }else{
                        $realwtime[] = '0.00';
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
                    $basicw = $realwtime;
                    for ($i = 0; $i < count($basicw); $i++) {
                        if (array_search('0.00', $basicw)) {
                            $one = array_search('0.00', $basicw);
                            array_splice($basicw, $one, 1);
                        }
                    }
                    $countone = count($basicw);
                }

                //1일 소정 근로시간
                $onedayworktime = sprintf('%02.2f', array_sum($realwtime) / $countone);  // 1주일분 기본근로시간 / 근무일로 선택된 수
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

}
