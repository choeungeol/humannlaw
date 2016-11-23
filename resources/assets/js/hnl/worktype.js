(function () {
    'use strict';

    var app = angular.module('worktype',[]);

    app.controller('worktypeCtrl', function($scope, $http, $element, $compile) {


        $scope.array = [];

        $scope.add = function(){

            $scope.array = [];
            var obj = {
                name : angular.copy($scope.a_work_start_time1)
            };
            $scope.array.push(obj);

        };
        //A ~ B휴게시간 초기화
        $scope.breaktimes = [];
        $scope.breaktimesb = [];
        $scope.breaktimesc = [];
        $scope.breaktimesd = [];
        $scope.breaktimese = [];
        $scope.breaktimesf = [];
        $scope.breaktimesg = [];
        $scope.breaktimesh = [];
        $scope.breaktimesi = [];
        $scope.breaktimesj = [];

        //A ~ B 휴게시간 카운터
        $scope.counter = 1;
        $scope.counterb = 1;
        $scope.counterc = 1;
        $scope.counterd = 1;
        $scope.countere = 1;
        $scope.counterf = 1;
        $scope.counterg = 1;
        $scope.counterh = 1;
        $scope.counteri = 1;
        $scope.counterj = 1;

        //a 형 선택
        $scope.now_0 = '매주';  // 월 근무횟수
        $scope.now_1 = '매주';  // 화 근무횟수
        $scope.now_2 = '매주';  // 수 근무횟수
        $scope.now_3 = '매주';  // 목 근무횟수
        $scope.now_4 = '매주';  // 금 근무횟수

        $scope.weeknow_0 = '없음';  // 토 근무횟수
        $scope.weeknow_1 = '없음';  // 일 근무횟수

        $scope.worktype_0 = '근무일';
        $scope.worktype_1 = '근무일';
        $scope.worktype_2 = '근무일';
        $scope.worktype_3 = '근무일';
        $scope.worktype_4 = '근무일';
        $scope.worktype_5 = '근무일';
        $scope.worktype_6 = '근무일';

        //b 형 선택
        $scope.bnow_0 = '매주';  // 월 근무횟수
        $scope.bnow_1 = '매주';  // 화 근무횟수
        $scope.bnow_2 = '매주';  // 수 근무횟수
        $scope.bnow_3 = '매주';  // 목 근무횟수
        $scope.bnow_4 = '매주';  // 금 근무횟수

        $scope.bweeknow_0 = '없음';  // 토 근무횟수
        $scope.bweeknow_1 = '없음';  // 일 근무횟수

        $scope.bworktype_0 = '근무일';
        $scope.bworktype_1 = '근무일';
        $scope.bworktype_2 = '근무일';
        $scope.bworktype_3 = '근무일';
        $scope.bworktype_4 = '근무일';
        $scope.bworktype_5 = '근무일';
        $scope.bworktype_6 = '근무일';

        //c형 선택
        $scope.cnow_0 = '매주';  // 월 근무횟수
        $scope.cnow_1 = '매주';  // 화 근무횟수
        $scope.cnow_2 = '매주';  // 수 근무횟수
        $scope.cnow_3 = '매주';  // 목 근무횟수
        $scope.cnow_4 = '매주';  // 금 근무횟수c

        $scope.cweeknow_0 = '없음';  // 토 근무횟수
        $scope.cweeknow_1 = '없음';  // 일 근무횟수

        $scope.cworktype_0 = '근무일';
        $scope.cworktype_1 = '근무일';
        $scope.cworktype_2 = '근무일';
        $scope.cworktype_3 = '근무일';
        $scope.cworktype_4 = '근무일';
        $scope.cworktype_5 = '근무일';
        $scope.cworktype_6 = '근무일';

        //d형 선택
        $scope.dnow_0 = '매주';  // 월 근무횟수
        $scope.dnow_1 = '매주';  // 화 근무횟수
        $scope.dnow_2 = '매주';  // 수 근무횟수
        $scope.dnow_3 = '매주';  // 목 근무횟수
        $scope.dnow_4 = '매주';  // 금 근무횟수

        $scope.dweeknow_0 = '없음';  // 토 근무횟수
        $scope.dweeknow_1 = '없음';  // 일 근무횟수

        $scope.dworktype_0 = '근무일';
        $scope.dworktype_1 = '근무일';
        $scope.dworktype_2 = '근무일';
        $scope.dworktype_3 = '근무일';
        $scope.dworktype_4 = '근무일';
        $scope.dworktype_5 = '근무일';
        $scope.dworktype_6 = '근무일';

        //e형 선택
        $scope.enow_0 = '매주';  // 월 근무횟수
        $scope.enow_1 = '매주';  // 화 근무횟수
        $scope.enow_2 = '매주';  // 수 근무횟수
        $scope.enow_3 = '매주';  // 목 근무횟수
        $scope.enow_4 = '매주';  // 금 근무횟수

        $scope.eweeknow_0 = '없음';  // 토 근무횟수
        $scope.eweeknow_1 = '없음';  // 일 근무횟수

        $scope.eworktype_0 = '근무일';
        $scope.eworktype_1 = '근무일';
        $scope.eworktype_2 = '근무일';
        $scope.eworktype_3 = '근무일';
        $scope.eworktype_4 = '근무일';
        $scope.eworktype_5 = '근무일';
        $scope.eworktype_6 = '근무일';

        //f형 선택

        $scope.fnow_0 = '매주';  // 월 근무횟수
        $scope.fnow_1 = '매주';  // 화 근무횟수
        $scope.fnow_2 = '매주';  // 수 근무횟수
        $scope.fnow_3 = '매주';  // 목 근무횟수
        $scope.fnow_4 = '매주';  // 금 근무횟수

        $scope.fweeknow_0 = '없음';  // 토 근무횟수
        $scope.fweeknow_1 = '없음';  // 일 근무횟수

        $scope.fworktype_0 = '근무일';
        $scope.fworktype_1 = '근무일';
        $scope.fworktype_2 = '근무일';
        $scope.fworktype_3 = '근무일';
        $scope.fworktype_4 = '근무일';
        $scope.fworktype_5 = '근무일';
        $scope.fworktype_6 = '근무일';

        //g형 선택
        $scope.gnow_0 = '매주';  // 월 근무횟수
        $scope.gnow_1 = '매주';  // 화 근무횟수
        $scope.gnow_2 = '매주';  // 수 근무횟수
        $scope.gnow_3 = '매주';  // 목 근무횟수
        $scope.gnow_4 = '매주';  // 금 근무횟수

        $scope.gweeknow_0 = '없음';  // 토 근무횟수
        $scope.gweeknow_1 = '없음';  // 일 근무횟수

        $scope.gworktype_0 = '근무일';
        $scope.gworktype_1 = '근무일';
        $scope.gworktype_2 = '근무일';
        $scope.gworktype_3 = '근무일';
        $scope.gworktype_4 = '근무일';
        $scope.gworktype_5 = '근무일';
        $scope.gworktype_6 = '근무일';

        //h형 선택
        $scope.hnow_0 = '매주';  // 월 근무횟수
        $scope.hnow_1 = '매주';  // 화 근무횟수
        $scope.hnow_2 = '매주';  // 수 근무횟수
        $scope.hnow_3 = '매주';  // 목 근무횟수
        $scope.hnow_4 = '매주';  // 금 근무횟수

        $scope.hweeknow_0 = '없음';  // 토 근무횟수
        $scope.hweeknow_1 = '없음';  // 일 근무횟수

        $scope.hworktype_0 = '근무일';
        $scope.hworktype_1 = '근무일';
        $scope.hworktype_2 = '근무일';
        $scope.hworktype_3 = '근무일';
        $scope.hworktype_4 = '근무일';
        $scope.horktype_5 = '근무일';
        $scope.horktype_6 = '근무일';

        //i형 선택

        $scope.inow_0 = '매주';  // 월 근무횟수
        $scope.inow_1 = '매주';  // 화 근무횟수
        $scope.inow_2 = '매주';  // 수 근무횟수
        $scope.inow_3 = '매주';  // 목 근무횟수
        $scope.inow_4 = '매주';  // 금 근무횟수

        $scope.iweeknow_0 = '없음';  // 토 근무횟수
        $scope.iweeknow_1 = '없음';  // 일 근무횟수

        $scope.iworktype_0 = '근무일';
        $scope.iworktype_1 = '근무일';
        $scope.iworktype_2 = '근무일';
        $scope.iworktype_3 = '근무일';
        $scope.iworktype_4 = '근무일';
        $scope.iworktype_5 = '근무일';
        $scope.iworktype_6 = '근무일';

        //j형 선택
        $scope.jnow_0 = '매주';  // 월 근무횟수
        $scope.jnow_1 = '매주';  // 화 근무횟수
        $scope.jnow_2 = '매주';  // 수 근무횟수
        $scope.jnow_3 = '매주';  // 목 근무횟수
        $scope.jnow_4 = '매주';  // 금 근무횟수

        $scope.jweeknow_0 = '없음';  // 토 근무횟수
        $scope.jweeknow_1 = '없음';  // 일 근무횟수

        $scope.jworktype_0 = '근무일';
        $scope.jworktype_1 = '근무일';
        $scope.jworktype_2 = '근무일';
        $scope.jworktype_3 = '근무일';
        $scope.jworktype_4 = '근무일';
        $scope.jworktype_5 = '근무일';
        $scope.jworktype_6 = '근무일';

        var awst = {};          // A형 근무 시작시간
        var awet = {};          // A형 근무 종료시간
        var abst = {};          // A형 휴게 시작시간
        var abet = {};          // A형 휴게 종료시간

        var bwst = {};          // B형 근무 시작시간
        var bwet = {};          // B형 근무 종료시간
        var bbst = {};          // B형 휴게 시작시간
        var bbet = {};          // B형 휴게 종료시간

        var cwst = {};          // C형 근무 시작시간
        var cwet = {};          // C형 근무 종료시간
        var cbst = {};          // C형 휴게 시작시간
        var cbet = {};          // C형 휴게 종료시간

        var dwst = {};          // D형 근무 시작시간
        var dwet = {};          // D형 근무 종료시간
        var dbst = {};          // D형 휴게 시작시간
        var dbet = {};          // D형 휴게 종료시간

        var ewst = {};          // E형 근무 시작시간
        var ewet = {};          // E형 근무 종료시간
        var ebst = {};          // E형 휴게 시작시간
        var ebet = {};          // E형 휴게 종료시간

        var fwst = {};          // F형 근무 시작시간
        var fwet = {};          // F형 근무 종료시간
        var fbst = {};          // F형 휴게 시작시간
        var fbet = {};          // F형 휴게 종료시간

        var gwst = {};          // G형 근무 시작시간
        var gwet = {};          // G형 근무 종료시간
        var gbst = {};          // G형 휴게 시작시간
        var gbet = {};          // G형 휴게 종료시간

        var hwst = {};          // H형 근무 시작시간
        var hwet = {};          // H형 근무 종료시간
        var hbst = {};          // H형 휴게 시작시간
        var hbet = {};          // H형 휴게 종료시간

        var iwst = {};          // I형 근무 시작시간
        var iwet = {};          // I형 근무 종료시간
        var ibst = {};          // I형 휴게 시작시간
        var ibet = {};          // I형 휴게 종료시간

        var jwst = {};          // J형 근무 시작시간
        var jwet = {};          // J형 근무 종료시간
        var jbst = {};          // J형 휴게 시작시간
        var jbet = {};          // J형 휴게 종료시간

        // A~J형  휴게시간1
        var aabst = {};
        var bbbst = {};
        var ccbst = {};
        var ddbst = {};
        var eebst = {};
        var ffbst = {};
        var ggbst = {};
        var hhbst = {};
        var iibst = {};
        var jjbst = {};

        var aabet = {};
        var bbbet = {};
        var ccbet = {};
        var ddbet = {};
        var eebet = {};
        var ffbet = {};
        var ggbet = {};
        var hhbet = {};
        var iibet = {};
        var jjbet = {};

        var anow = {};
        var aworktype = {};

        var bnow = {};
        var bworktype = {};

        var cnow = {};
        var cworktype = {};

        var dnow = {};
        var dworktype = {};

        var enow = {};
        var eworktype = {};

        var fnow = {};
        var fworktype = {};

        var gnow = {};
        var gworktype = {};

        var hnow = {};
        var hworktype = {};

        var inow = {};
        var iworktype = {};

        var jnow = {};
        var jworktype = {};

        $scope.calc = function() {

            if(abst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{

                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간
                var calcaatypebst = [];      // A형 휴게1 시작종료 시간
                var calcaatypebet = [];      // A형 휴게1 시작종료 시간

                for (var i in awst) {
                    var amondayws = awst[i];
                    if(awst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in awet) {
                    var amondaywe = awet[i];
                    if (awet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in abst) {
                    var amondaybs = abst[i];
                    if (abst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in abet) {
                    var amondaybe = abet[i];
                    if (abet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }

                for (var i in aabst) {
                    var amondaybs = aabst[i];
                    if (aabst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcaatypebst.length < 8){
                        calcaatypebst.push(tbs);
                    }else{
                        var calcaatypebst = [];
                        calcaatypebst.push(tbs);
                    }
                }

                for (var i in aabet) {
                    var amondaybe = aabet[i];
                    if (aabet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcaatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcaatypebet.push(tbe);
                    }

                }



                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.
                var calcab = 0.0;        // A형 추가 휴게 시작시간 - A형 추가 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간
                var lastcalcab = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(anow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(anow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(anow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(anow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(anow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(anow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(anow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(anow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcaatypebet[i])-Number(calcaatypebst[i]);

                    if(lastcalcab.length < 8){
                        lastcaalcb.push(calcb);
                    }else{
                        var lastcaalcb = [];
                        lastcaalcb.push(calcb);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcaatypebst[i];
                    var wet = calcaatypebet[i];

                    calcb = Number(calcaatypebet[i])-Number(calcaatypebst[i]);

                    if(lastcalcab.length < 8){
                        lastcalcab.push(calcab);
                    }else{
                        var lastcalcab = [];
                        lastcalcab.push(calcab);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cabt = 0 ;   // 1주 추가 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;  //1주 주말 근무시간 최종계산.
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                    cabt += Number(lastcalcab[i]);
                }

                cbt = cbt+cabt;

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];



                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.cwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.cwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.cbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.cbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 추가 휴게시간 시간 분 나눔
                if(cabt.toString().length == 4) {
                    $scope.cabt = [ cabt.toString().substr(-2, 2), cabt.toString().substr(0, 2)];
                }else{
                    $scope.cabt = [ cabt.toString().substr(-2,2), cabt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.cwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.cwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = (cbt * 4) + (cabt * 4);     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.cwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.cwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.cwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.cbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.cbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.cbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.allc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.allc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.allc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.bcalc = function() {

            if(bbst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in bwst) {
                    var amondayws = bwst[i];
                    if(bwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in bwet) {
                    var amondaywe = bwet[i];
                    if (bwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in bbst) {
                    var amondaybs = bbst[i];
                    if (bbst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in bbet) {
                    var amondaybe = bbet[i];
                    if (bbet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(bnow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(bnow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(bnow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(bnow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(bnow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(bnow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(bnow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(bnow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.bcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.bcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.bcbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.bcbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.bcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.bcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }

                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.bcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.bcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.bcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.bcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.bcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.bcbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.ballc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.ballc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.ballc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.ccalc = function() {

            if(cbst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in cwst) {
                    var amondayws = cwst[i];
                    if(cwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in cwet) {
                    var amondaywe = cwet[i];
                    if (cwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in cbst) {
                    var amondaybs = cbst[i];
                    if (cbst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in cbet) {
                    var amondaybe = cbet[i];
                    if (cbet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(cnow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(cnow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(cnow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(cnow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(cnow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(cnow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(cnow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(cnow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.ccwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.ccwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.ccbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.ccbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.ccwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.ccwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.ccwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.ccwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.ccwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.ccbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.ccbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.ccbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.callc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.callc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.callc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.dcalc = function() {

            if(dbst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in dwst) {
                    var amondayws = dwst[i];
                    if(dwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in dwet) {
                    var amondaywe = dwet[i];
                    if (dwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in dbst) {
                    var amondaybs = dbst[i];
                    if (dbst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in dbet) {
                    var amondaybe = dbet[i];
                    if (dbet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(dnow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(dnow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(dnow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(dnow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(dnow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(dnow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(dnow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(dnow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.dcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.dcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.dcbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.dcbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.dcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.dcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.dcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.dcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.dcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.dcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.dcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.dcbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.dallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.dallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.dallc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.ecalc = function() {

            if(ebst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in ewst) {
                    var amondayws = ewst[i];
                    if(ewst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in ewet) {
                    var amondaywe = ewet[i];
                    if (ewet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in ebst) {
                    var amondaybs = ebst[i];
                    if (ebst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in ebet) {
                    var amondaybe = ebet[i];
                    if (ebet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(enow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(enow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(enow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(enow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(enow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(enow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(enow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(enow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.ecwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.ecwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.ecbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.ecbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.ecwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.ecwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.ecwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.ecwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.ecwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.ecbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.ecbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.ecbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.eallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.eallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.eallc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.fcalc = function() {

            if(fbst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in fwst) {
                    var amondayws = fwst[i];
                    if(fwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in fwet) {
                    var amondaywe = fwet[i];
                    if (fwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in fbst) {
                    var amondaybs = fbst[i];
                    if (fbst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in fbet) {
                    var amondaybe = fbet[i];
                    if (fbet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(fnow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(fnow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(fnow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(fnow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(fnow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(fnow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(fnow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(fnow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.fcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.fcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.fcbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.fcbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.fcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.fcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.fcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.fcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.fcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.fcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.fcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.fcbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.fallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.fallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.fallc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.gcalc = function() {

            if(gbst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in gwst) {
                    var amondayws = gwst[i];
                    if(gwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in gwet) {
                    var amondaywe = gwet[i];
                    if (gwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in gbst) {
                    var amondaybs = gbst[i];
                    if (gbst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in gbet) {
                    var amondaybe = gbet[i];
                    if (gbet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(gnow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(gnow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(gnow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(gnow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(gnow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(gnow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(gnow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(gnow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.gcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.gcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.gcbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.gcbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.gcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.gcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.gcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.gcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.gcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.gcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.gcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.gcbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.gallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.gallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.gallc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.hcalc = function() {

            if(hbst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in hwst) {
                    var amondayws = hwst[i];
                    if(hwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in hwet) {
                    var amondaywe = hwet[i];
                    if (hwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in hbst) {
                    var amondaybs = hbst[i];
                    if (hbst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in hbet) {
                    var amondaybe = hbet[i];
                    if (hbet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(hnow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(hnow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(hnow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(hnow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(hnow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(hnow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(hnow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(hnow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.hcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.hcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.hcbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.hcbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.hcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.hcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.hcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.hcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.hcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.hcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.hcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.hcbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.hallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.hallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.hallc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.icalc = function() {

            if(ibst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in iwst) {
                    var amondayws = iwst[i];
                    if(iwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in iwet) {
                    var amondaywe = iwet[i];
                    if (iwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in ibst) {
                    var amondaybs = ibst[i];
                    if (ibst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in ibet) {
                    var amondaybe = ibet[i];
                    if (ibet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(inow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(inow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(inow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(inow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(inow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(inow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(inow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(inow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.icwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.icwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.icbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.icbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.icwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.icwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.icwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.icwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.icwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.icbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.icbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.icbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.iallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.iallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.iallc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };
        $scope.jcalc = function() {

            if(jbst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

                for (var i in jwst) {
                    var amondayws = jwst[i];
                    if(jwst[i] != 0){
                        var timews = amondayws.substring(0, 5)
                        var tiws = timews.split(':');
                        var tws = tiws[0] + tiws[1];
                        var tws = Number(tws);

                    }else{
                        var tws = Number(amondayws);
                    }

                    if(calcatypewst.length < 8){
                        calcatypewst.push(tws);
                    }else{
                        var calcatypewst = [];
                        calcatypewst.push(tws);
                    }

                }

                for (var i in jwet) {
                    var amondaywe = jwet[i];
                    if (jwet[i] != 0) {
                        var timee = amondaywe.substring(0, 5)
                        var tiwe = timee.split(':');
                        var twe = tiwe[0] + tiwe[1];
                        var twe = Number(twe);

                    } else {
                        var twe = Number(amondaywe);
                    }
                    if(calcatypewet.length < 8){
                        calcatypewet.push(twe);
                    }else{
                        var calcatypewet = [];
                        calcatypewet.push(twe);
                    }

                }

                for (var i in jbst) {
                    var amondaybs = jbst[i];
                    if (jbst[i] != 0) {
                        var timebs = amondaybs.substring(0, 5)
                        var tibs = timebs.split(':');
                        var tbs = tibs[0] + tibs[1];
                        var tbs = Number(tbs);
                    } else {
                        var tbs = Number(amondaybs);
                    }

                    if(calcatypebst.length < 8){
                        calcatypebst.push(tbs);
                    }else{
                        var calcatypebst = [];
                        calcatypebst.push(tbs);
                    }
                }

                for (var i in jbet) {
                    var amondaybe = jbet[i];
                    if (jbet[i] != 0) {
                        var timebe = amondaybe.substring(0, 5)
                        var tibe = timebe.split(':');
                        var tbe = tibe[0] + tibe[1];
                        var tbe = Number(tbe);
                    }else{
                        var tbe = Number(amondaybe);
                    }

                    if(calcatypebet.length < 8){
                        calcatypebet.push(tbe);
                    }else{
                        var calcatypebet = [];
                        calcatypebet.push(tbe);
                    }

                }





                var calcw = 0.0;        // A형 근무 시작시간 - A형 휴게 종료시간
                var calcb = 0.0;        // A형 휴게 시작시간 - A형 휴게 종료시간.

                var calcweekw = [];     // A형 1달 휴일근로시간
                var lastcalcweek = [];  // A형 1달 총 휴일근로시간

                var lastcalcw = [];     // A형 1주 근무 시작시간 - A형 휴게 종료시간
                var lastcalcb = [];     // A형 1주 휴게 시작시간 - A형 휴게 종료시간


                for (var i = 0; i < 7; i++) {

                    var wst = calcatypewst[i];
                    var wet = calcatypewet[i];

                    calcw = Number(wet) - Number(wst);

                    if(jnow[i] === '없음'){
                        calcw = calcw * 0;
                    }else if(jnow[i] === '격주'){
                        calcw = calcw / 2;
                    }else if(jnow[i] === '매주'){
                        calcw = calcw * 4;
                    }else if(jnow[i] === '월1회'){
                        calcw = calcw * 1 / 4.345;
                    }else if(jnow[i] === '월2회'){
                        calcw = calcw * 2 / 4.345;
                    }else if(jnow[i] === '월3회'){
                        calcw = calcw * 3 / 4.345;
                    }else if(jnow[i] === '월4회'){
                        calcw = calcw * 4 / 4.345;
                    }else if(jnow[i] === '월5회'){
                        calcw = calcw * 5 / 4.345;
                    }

                    if(lastcalcw.length < 8){
                        lastcalcw.push(calcw);
                    }else{
                        var lastcalcw = [];
                        lastcalcw.push(calcw);
                    }

                }

                for (var i = 0; i < 7; i++){

                    var bst = calcatypebst[i];
                    var wet = calcatypebet[i];

                    calcb = Number(calcatypebet[i])-Number(calcatypebst[i]);

                    if(lastcalcb.length < 8){
                        lastcalcb.push(calcb);
                    }else{
                        var lastcalcb = [];
                        lastcalcb.push(calcb);
                    }

                }


                var cbt = 0 ;   // 1주 휴게시간 최종계산 총합
                var cwt = 0 ;   // 1주 근무시간 최종계산 총합
                var cwwt = 0;
                for(var i = 0; i< lastcalcb.length; i++)
                {
                    cbt += Number(lastcalcb[i]);
                }

                for(var i = 0; i< lastcalcw.length; i++)
                {
                    cwt += Number(lastcalcw[i]);
                }
                cwwt = lastcalcw[5]+ lastcalcw[6];






                //총 근무시간 시간 분 나눔
                if(cwt.toString().length == 4){
                    $scope.jcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(0,2) ];
                }else{
                    $scope.jcwt = [ cwt.toString().substr(-2,2), cwt.toString().substr(-3,1) ];
                }

                //총 휴게시간 시간 분 나눔
                if(cbt.toString().length == 4) {
                    $scope.jcbt = [ cbt.toString().substr(-2, 2), cbt.toString().substr(0, 2)];
                }else{
                    $scope.jcbt = [ cbt.toString().substr(-2,2), cbt.toString().substr(-3,1) ];
                }

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.jcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.jcwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

                if(cwtmonth.toString().length == 4){        //
                    $scope.jcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,2)];
                }else if(cwtmonth.toString().length == 5){
                    $scope.jcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(0,3)];
                }else{
                    $scope.jcwtmonth = [cwtmonth.toString().substr(-2,2), cwtmonth.toString().substr(-3,1)];
                }

                if(cbtmonth.toString().length == 4) {
                    $scope.jcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 2)];
                }else if(cbtmonth.toString().length == 5){
                    $scope.jcbtmonth = [cbtmonth.toString().substr(-2, 2), cbtmonth.toString().substr(0, 3)];
                }else{
                    $scope.jcbtmonth = [cbtmonth.toString().substr(-2,2), cbtmonth.toString().substr(-3,1)];
                }

                //총 근로시간

                var allc = cwtmonth + cbtmonth + cwwt ;
                if(allc.toString().length == 4) {
                    $scope.jallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 2)];
                }else if(allc.toString().length == 5){
                    $scope.jallc = [allc.toString().substr(-2, 2), allc.toString().substr(0, 3)];
                }else{
                    $scope.jallc = [allc.toString().substr(-2,2), allc.toString().substr(-3,1)];
                }

            }
        };

        $scope.aworkadd = function () {

            anow = [
                $scope.now_0,
                $scope.now_1,
                $scope.now_2,
                $scope.now_3,
                $scope.now_4,
                $scope.weeknow_0,
                $scope.weeknow_1,
            ];

            aworktype = [
                $scope.worktype_0,
                $scope.worktype_1,
                $scope.worktype_2,
                $scope.worktype_3,
                $scope.worktype_4,
                $scope.worktype_5,
                $scope.worktype_6,
            ];

            awst = [
                $scope.a_work_start_time1,
                $scope.a_work_start_time2,
                $scope.a_work_start_time3,
                $scope.a_work_start_time4,
                $scope.a_work_start_time5,
                $scope.a_work_start_time6,
                $scope.a_work_start_time7
            ];

            while(awst.indexOf(undefined) != -1){
                awst.splice(awst.indexOf(undefined),1,0);
            }

            awet = [
                $scope.a_work_end_time1,
                $scope.a_work_end_time2,
                $scope.a_work_end_time3,
                $scope.a_work_end_time4,
                $scope.a_work_end_time5,
                $scope.a_work_end_time6,
                $scope.a_work_end_time7
            ];

            while(awet.indexOf(undefined) != -1){
                awet.splice(awet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.bworkadd = function () {

            bnow = [
                $scope.bnow_0,
                $scope.bnow_1,
                $scope.bnow_2,
                $scope.bnow_3,
                $scope.bnow_4,
                $scope.bweeknow_0,
                $scope.bweeknow_1,
            ];

            bworktype = [
                $scope.bworktype_0,
                $scope.bworktype_1,
                $scope.bworktype_2,
                $scope.bworktype_3,
                $scope.bworktype_4,
                $scope.bworktype_5,
                $scope.bworktype_6,
            ];

            bwst = [
                $scope.b_work_start_time1,
                $scope.b_work_start_time2,
                $scope.b_work_start_time3,
                $scope.b_work_start_time4,
                $scope.b_work_start_time5,
                $scope.b_work_start_time6,
                $scope.b_work_start_time7
            ];

            while(bwst.indexOf(undefined) != -1){
                bwst.splice(bwst.indexOf(undefined),1,0);
            }

            bwet = [
                $scope.b_work_end_time1,
                $scope.b_work_end_time2,
                $scope.b_work_end_time3,
                $scope.b_work_end_time4,
                $scope.b_work_end_time5,
                $scope.b_work_end_time6,
                $scope.b_work_end_time7
            ];

            while(bwet.indexOf(undefined) != -1){
                bwet.splice(bwet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.cworkadd = function () {

            cnow = [
                $scope.cnow_0,
                $scope.cnow_1,
                $scope.cnow_2,
                $scope.cnow_3,
                $scope.cnow_4,
                $scope.weeknow_0,
                $scope.weeknow_1,
            ];

            cworktype = [
                $scope.cworktype_0,
                $scope.cworktype_1,
                $scope.cworktype_2,
                $scope.cworktype_3,
                $scope.cworktype_4,
                $scope.cworktype_5,
                $scope.cworktype_6,
            ];

            cwst = [
                $scope.c_work_start_time1,
                $scope.c_work_start_time2,
                $scope.c_work_start_time3,
                $scope.c_work_start_time4,
                $scope.c_work_start_time5,
                $scope.c_work_start_time6,
                $scope.c_work_start_time7
            ];

            while(cwst.indexOf(undefined) != -1){
                cwst.splice(cwst.indexOf(undefined),1,0);
            }

            cwet = [
                $scope.c_work_end_time1,
                $scope.c_work_end_time2,
                $scope.c_work_end_time3,
                $scope.c_work_end_time4,
                $scope.c_work_end_time5,
                $scope.c_work_end_time6,
                $scope.c_work_end_time7
            ];

            while(cwet.indexOf(undefined) != -1){
                cwet.splice(cwet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.dworkadd = function () {

            dnow = [
                $scope.dnow_0,
                $scope.dnow_1,
                $scope.dnow_2,
                $scope.dnow_3,
                $scope.dnow_4,
                $scope.dweeknow_0,
                $scope.dweeknow_1,
            ];

            dworktype = [
                $scope.dworktype_0,
                $scope.dworktype_1,
                $scope.dworktype_2,
                $scope.dworktype_3,
                $scope.dworktype_4,
                $scope.dworktype_5,
                $scope.dworktype_6,
            ];

            dwst = [
                $scope.d_work_start_time1,
                $scope.d_work_start_time2,
                $scope.d_work_start_time3,
                $scope.d_work_start_time4,
                $scope.d_work_start_time5,
                $scope.d_work_start_time6,
                $scope.d_work_start_time7
            ];

            while(dwst.indexOf(undefined) != -1){
                dwst.splice(dwst.indexOf(undefined),1,0);
            }

            dwet = [
                $scope.d_work_end_time1,
                $scope.d_work_end_time2,
                $scope.d_work_end_time3,
                $scope.d_work_end_time4,
                $scope.d_work_end_time5,
                $scope.d_work_end_time6,
                $scope.d_work_end_time7
            ];

            while(dwet.indexOf(undefined) != -1){
                dwet.splice(dwet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.eworkadd = function () {

            enow = [
                $scope.enow_0,
                $scope.enow_1,
                $scope.enow_2,
                $scope.enow_3,
                $scope.enow_4,
                $scope.eweeknow_0,
                $scope.eweeknow_1,
            ];

            eworktype = [
                $scope.eworktype_0,
                $scope.eworktype_1,
                $scope.eworktype_2,
                $scope.eworktype_3,
                $scope.eworktype_4,
                $scope.eworktype_5,
                $scope.eworktype_6,
            ];

            ewst = [
                $scope.e_work_start_time1,
                $scope.e_work_start_time2,
                $scope.e_work_start_time3,
                $scope.e_work_start_time4,
                $scope.e_work_start_time5,
                $scope.e_work_start_time6,
                $scope.e_work_start_time7
            ];

            while(ewst.indexOf(undefined) != -1){
                ewst.splice(ewst.indexOf(undefined),1,0);
            }

            ewet = [
                $scope.e_work_end_time1,
                $scope.e_work_end_time2,
                $scope.e_work_end_time3,
                $scope.e_work_end_time4,
                $scope.e_work_end_time5,
                $scope.e_work_end_time6,
                $scope.e_work_end_time7
            ];

            while(ewet.indexOf(undefined) != -1){
                ewet.splice(ewet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.fworkadd = function () {

            fnow = [
                $scope.fnow_0,
                $scope.fnow_1,
                $scope.fnow_2,
                $scope.fnow_3,
                $scope.fnow_4,
                $scope.fweeknow_0,
                $scope.fweeknow_1,
            ];

            fworktype = [
                $scope.fworktype_0,
                $scope.fworktype_1,
                $scope.fworktype_2,
                $scope.fworktype_3,
                $scope.fworktype_4,
                $scope.fworktype_5,
                $scope.fworktype_6,
            ];

            fwst = [
                $scope.f_work_start_time1,
                $scope.f_work_start_time2,
                $scope.f_work_start_time3,
                $scope.f_work_start_time4,
                $scope.f_work_start_time5,
                $scope.f_work_start_time6,
                $scope.f_work_start_time7
            ];

            while(fwst.indexOf(undefined) != -1){
                fwst.splice(fwst.indexOf(undefined),1,0);
            }

            fwet = [
                $scope.f_work_end_time1,
                $scope.f_work_end_time2,
                $scope.f_work_end_time3,
                $scope.f_work_end_time4,
                $scope.f_work_end_time5,
                $scope.f_work_end_time6,
                $scope.f_work_end_time7
            ];

            while(fwet.indexOf(undefined) != -1){
                fwet.splice(fwet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.gworkadd = function () {

            gnow = [
                $scope.gnow_0,
                $scope.gnow_1,
                $scope.gnow_2,
                $scope.gnow_3,
                $scope.gnow_4,
                $scope.gweeknow_0,
                $scope.gweeknow_1,
            ];

            gworktype = [
                $scope.gworktype_0,
                $scope.gworktype_1,
                $scope.gworktype_2,
                $scope.gworktype_3,
                $scope.gworktype_4,
                $scope.gworktype_5,
                $scope.gworktype_6,
            ];

            gwst = [
                $scope.g_work_start_time1,
                $scope.g_work_start_time2,
                $scope.g_work_start_time3,
                $scope.g_work_start_time4,
                $scope.g_work_start_time5,
                $scope.g_work_start_time6,
                $scope.g_work_start_time7
            ];

            while(gwst.indexOf(undefined) != -1){
                gwst.splice(gwst.indexOf(undefined),1,0);
            }

            gwet = [
                $scope.g_work_end_time1,
                $scope.g_work_end_time2,
                $scope.g_work_end_time3,
                $scope.g_work_end_time4,
                $scope.g_work_end_time5,
                $scope.g_work_end_time6,
                $scope.g_work_end_time7
            ];

            while(gwet.indexOf(undefined) != -1){
                gwet.splice(gwet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.hworkadd = function () {

            hnow = [
                $scope.hnow_0,
                $scope.hnow_1,
                $scope.hnow_2,
                $scope.hnow_3,
                $scope.hnow_4,
                $scope.hweeknow_0,
                $scope.hweeknow_1,
            ];

            hworktype = [
                $scope.hworktype_0,
                $scope.hworktype_1,
                $scope.hworktype_2,
                $scope.hworktype_3,
                $scope.hworktype_4,
                $scope.hworktype_5,
                $scope.hworktype_6,
            ];

            hwst = [
                $scope.h_work_start_time1,
                $scope.h_work_start_time2,
                $scope.h_work_start_time3,
                $scope.h_work_start_time4,
                $scope.h_work_start_time5,
                $scope.h_work_start_time6,
                $scope.h_work_start_time7
            ];

            while(hwst.indexOf(undefined) != -1){
                hwst.splice(hwst.indexOf(undefined),1,0);
            }

            hwet = [
                $scope.h_work_end_time1,
                $scope.h_work_end_time2,
                $scope.h_work_end_time3,
                $scope.h_work_end_time4,
                $scope.h_work_end_time5,
                $scope.h_work_end_time6,
                $scope.h_work_end_time7
            ];

            while(hwet.indexOf(undefined) != -1){
                hwet.splice(hwet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.iworkadd = function () {

            inow = [
                $scope.inow_0,
                $scope.inow_1,
                $scope.inow_2,
                $scope.inow_3,
                $scope.inow_4,
                $scope.iweeknow_0,
                $scope.iweeknow_1,
            ];

            iworktype = [
                $scope.iworktype_0,
                $scope.iworktype_1,
                $scope.iworktype_2,
                $scope.iworktype_3,
                $scope.iworktype_4,
                $scope.iworktype_5,
                $scope.iworktype_6,
            ];

            iwst = [
                $scope.i_work_start_time1,
                $scope.i_work_start_time2,
                $scope.i_work_start_time3,
                $scope.i_work_start_time4,
                $scope.i_work_start_time5,
                $scope.i_work_start_time6,
                $scope.i_work_start_time7
            ];

            while(iwst.indexOf(undefined) != -1){
                iwst.splice(iwst.indexOf(undefined),1,0);
            }

            iwet = [
                $scope.i_work_end_time1,
                $scope.i_work_end_time2,
                $scope.i_work_end_time3,
                $scope.i_work_end_time4,
                $scope.i_work_end_time5,
                $scope.i_work_end_time6,
                $scope.i_work_end_time7
            ];

            while(iwet.indexOf(undefined) != -1){
                iwet.splice(iwet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.jworkadd = function () {

            jnow = [
                $scope.jnow_0,
                $scope.jnow_1,
                $scope.jnow_2,
                $scope.jnow_3,
                $scope.jnow_4,
                $scope.jweeknow_0,
                $scope.jweeknow_1,
            ];

            jworktype = [
                $scope.jworktype_0,
                $scope.jworktype_1,
                $scope.jworktype_2,
                $scope.jworktype_3,
                $scope.jworktype_4,
                $scope.jworktype_5,
                $scope.jworktype_6,
            ];

            jwst = [
                $scope.j_work_start_time1,
                $scope.j_work_start_time2,
                $scope.j_work_start_time3,
                $scope.j_work_start_time4,
                $scope.j_work_start_time5,
                $scope.j_work_start_time6,
                $scope.j_work_start_time7
            ];

            while(jwst.indexOf(undefined) != -1){
                jwst.splice(jwst.indexOf(undefined),1,0);
            }

            jwet = [
                $scope.j_work_end_time1,
                $scope.j_work_end_time2,
                $scope.j_work_end_time3,
                $scope.j_work_end_time4,
                $scope.j_work_end_time5,
                $scope.j_work_end_time6,
                $scope.j_work_end_time7
            ];

            while(jwet.indexOf(undefined) != -1){
                jwet.splice(jwet.indexOf(undefined),1,0);
            }

            var test = '';
        };

        $scope.abreakadd = function () {

            abst = [
                $scope.a_break_start_time1,
                $scope.a_break_start_time2,
                $scope.a_break_start_time3,
                $scope.a_break_start_time4,
                $scope.a_break_start_time5,
                $scope.a_break_start_time6,
                $scope.a_break_start_time7
            ];

            while(abst.indexOf(undefined) != -1){
                abst.splice(abst.indexOf(undefined),1,0);
            }

            abet = [
                $scope.a_break_end_time1,
                $scope.a_break_end_time2,
                $scope.a_break_end_time3,
                $scope.a_break_end_time4,
                $scope.a_break_end_time5,
                $scope.a_break_end_time6,
                $scope.a_break_end_time7
            ];

            while(abet.indexOf(undefined) != -1){
                abet.splice(abet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.bbreakadd = function () {

            bbst = [
                $scope.b_break_start_time1,
                $scope.b_break_start_time2,
                $scope.b_break_start_time3,
                $scope.b_break_start_time4,
                $scope.b_break_start_time5,
                $scope.b_break_start_time6,
                $scope.b_break_start_time7
            ];

            while(bbst.indexOf(undefined) != -1){
                bbst.splice(bbst.indexOf(undefined),1,0);
            }

            bbet = [
                $scope.b_break_end_time1,
                $scope.b_break_end_time2,
                $scope.b_break_end_time3,
                $scope.b_break_end_time4,
                $scope.b_break_end_time5,
                $scope.b_break_end_time6,
                $scope.b_break_end_time7
            ];

            while(bbet.indexOf(undefined) != -1){
                bbet.splice(bbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.cbreakadd = function () {

            cbst = [
                $scope.c_break_start_time1,
                $scope.c_break_start_time2,
                $scope.c_break_start_time3,
                $scope.c_break_start_time4,
                $scope.c_break_start_time5,
                $scope.c_break_start_time6,
                $scope.c_break_start_time7
            ];

            while(cbst.indexOf(undefined) != -1){
                cbst.splice(cbst.indexOf(undefined),1,0);
            }

            cbet = [
                $scope.c_break_end_time1,
                $scope.c_break_end_time2,
                $scope.c_break_end_time3,
                $scope.c_break_end_time4,
                $scope.c_break_end_time5,
                $scope.c_break_end_time6,
                $scope.c_break_end_time7
            ];

            while(cbet.indexOf(undefined) != -1){
                cbet.splice(cbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.dbreakadd = function () {

            dbst = [
                $scope.d_break_start_time1,
                $scope.d_break_start_time2,
                $scope.d_break_start_time3,
                $scope.d_break_start_time4,
                $scope.d_break_start_time5,
                $scope.d_break_start_time6,
                $scope.d_break_start_time7
            ];

            while(dbst.indexOf(undefined) != -1){
                dbst.splice(dbst.indexOf(undefined),1,0);
            }

            dbet = [
                $scope.d_break_end_time1,
                $scope.d_break_end_time2,
                $scope.d_break_end_time3,
                $scope.d_break_end_time4,
                $scope.d_break_end_time5,
                $scope.d_break_end_time6,
                $scope.d_break_end_time7
            ];

            while(dbet.indexOf(undefined) != -1){
                dbet.splice(dbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.ebreakadd = function () {

            ebst = [
                $scope.e_break_start_time1,
                $scope.e_break_start_time2,
                $scope.e_break_start_time3,
                $scope.e_break_start_time4,
                $scope.e_break_start_time5,
                $scope.e_break_start_time6,
                $scope.e_break_start_time7
            ];

            while(ebst.indexOf(undefined) != -1){
                ebst.splice(ebst.indexOf(undefined),1,0);
            }

            ebet = [
                $scope.e_break_end_time1,
                $scope.e_break_end_time2,
                $scope.e_break_end_time3,
                $scope.e_break_end_time4,
                $scope.e_break_end_time5,
                $scope.e_break_end_time6,
                $scope.e_break_end_time7
            ];

            while(ebet.indexOf(undefined) != -1){
                ebet.splice(ebet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.fbreakadd = function () {

            fbst = [
                $scope.f_break_start_time1,
                $scope.f_break_start_time2,
                $scope.f_break_start_time3,
                $scope.f_break_start_time4,
                $scope.f_break_start_time5,
                $scope.f_break_start_time6,
                $scope.f_break_start_time7
            ];

            while(fbst.indexOf(undefined) != -1){
                fbst.splice(fbst.indexOf(undefined),1,0);
            }

            fbet = [
                $scope.f_break_end_time1,
                $scope.f_break_end_time2,
                $scope.f_break_end_time3,
                $scope.f_break_end_time4,
                $scope.f_break_end_time5,
                $scope.f_break_end_time6,
                $scope.f_break_end_time7
            ];

            while(fbet.indexOf(undefined) != -1){
                fbet.splice(fbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.gbreakadd = function () {

            gbst = [
                $scope.g_break_start_time1,
                $scope.g_break_start_time2,
                $scope.g_break_start_time3,
                $scope.g_break_start_time4,
                $scope.g_break_start_time5,
                $scope.g_break_start_time6,
                $scope.g_break_start_time7
            ];

            while(gbst.indexOf(undefined) != -1){
                gbst.splice(gbst.indexOf(undefined),1,0);
            }

            gbet = [
                $scope.g_break_end_time1,
                $scope.g_break_end_time2,
                $scope.g_break_end_time3,
                $scope.g_break_end_time4,
                $scope.g_break_end_time5,
                $scope.g_break_end_time6,
                $scope.g_break_end_time7
            ];

            while(gbet.indexOf(undefined) != -1){
                gbet.splice(gbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.hbreakadd = function () {

            hbst = [
                $scope.h_break_start_time1,
                $scope.h_break_start_time2,
                $scope.h_break_start_time3,
                $scope.h_break_start_time4,
                $scope.h_break_start_time5,
                $scope.h_break_start_time6,
                $scope.h_break_start_time7
            ];

            while(hbst.indexOf(undefined) != -1){
                hbst.splice(hbst.indexOf(undefined),1,0);
            }

            hbet = [
                $scope.h_break_end_time1,
                $scope.h_break_end_time2,
                $scope.h_break_end_time3,
                $scope.h_break_end_time4,
                $scope.h_break_end_time5,
                $scope.h_break_end_time6,
                $scope.h_break_end_time7
            ];

            while(hbet.indexOf(undefined) != -1){
                hbet.splice(hbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.ibreakadd = function () {

            ibst = [
                $scope.i_break_start_time1,
                $scope.i_break_start_time2,
                $scope.i_break_start_time3,
                $scope.i_break_start_time4,
                $scope.i_break_start_time5,
                $scope.i_break_start_time6,
                $scope.i_break_start_time7
            ];

            while(ibst.indexOf(undefined) != -1){
                ibst.splice(ibst.indexOf(undefined),1,0);
            }

            ibet = [
                $scope.i_break_end_time1,
                $scope.i_break_end_time2,
                $scope.i_break_end_time3,
                $scope.i_break_end_time4,
                $scope.i_break_end_time5,
                $scope.i_break_end_time6,
                $scope.i_break_end_time7
            ];

            while(ibet.indexOf(undefined) != -1){
                ibet.splice(ibet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.jbreakadd = function () {

            jbst = [
                $scope.j_break_start_time1,
                $scope.j_break_start_time2,
                $scope.j_break_start_time3,
                $scope.j_break_start_time4,
                $scope.j_break_start_time5,
                $scope.j_break_start_time6,
                $scope.j_break_start_time7
            ];

            while(jbst.indexOf(undefined) != -1){
                jbst.splice(jbst.indexOf(undefined),1,0);
            }

            jbet = [
                $scope.j_break_end_time1,
                $scope.j_break_end_time2,
                $scope.j_break_end_time3,
                $scope.j_break_end_time4,
                $scope.j_break_end_time5,
                $scope.j_break_end_time6,
                $scope.j_break_end_time7
            ];

            while(jbet.indexOf(undefined) != -1){
                jbet.splice(jbet.indexOf(undefined),1,0);
            }

            var test = '';
        };

        $scope.aabreakadd = function () {

            aabst = [
                $scope.aa_break_start_time1,
                $scope.aa_break_start_time2,
                $scope.aa_break_start_time3,
                $scope.aa_break_start_time4,
                $scope.aa_break_start_time5,
                $scope.aa_break_start_time6,
                $scope.aa_break_start_time7
            ];

            while(aabst.indexOf(undefined) != -1){
                aabst.splice(aabst.indexOf(undefined),1,0);
            }

            aabet = [
                $scope.aa_break_end_time1,
                $scope.aa_break_end_time2,
                $scope.aa_break_end_time3,
                $scope.aa_break_end_time4,
                $scope.aa_break_end_time5,
                $scope.aa_break_end_time6,
                $scope.aa_break_end_time7
            ];

            while(aabet.indexOf(undefined) != -1){
                aabet.splice(aabet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.bbbreakadd = function () {

            bbbst = [
                $scope.bb_break_start_time1,
                $scope.bb_break_start_time2,
                $scope.bb_break_start_time3,
                $scope.bb_break_start_time4,
                $scope.bb_break_start_time5,
                $scope.bb_break_start_time6,
                $scope.bb_break_start_time7
            ];

            while(bbbst.indexOf(undefined) != -1){
                bbbst.splice(bbbst.indexOf(undefined),1,0);
            }

            bbbet = [
                $scope.bb_break_end_time1,
                $scope.bb_break_end_time2,
                $scope.bb_break_end_time3,
                $scope.bb_break_end_time4,
                $scope.bb_break_end_time5,
                $scope.bb_break_end_time6,
                $scope.bb_break_end_time7
            ];

            while(bbbet.indexOf(undefined) != -1){
                bbbet.splice(bbbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.ccbreakadd = function () {

            ccbst = [
                $scope.cc_break_start_time1,
                $scope.cc_break_start_time2,
                $scope.cc_break_start_time3,
                $scope.cc_break_start_time4,
                $scope.cc_break_start_time5,
                $scope.cc_break_start_time6,
                $scope.cc_break_start_time7
            ];

            while(ccbst.indexOf(undefined) != -1){
                ccbst.splice(ccbst.indexOf(undefined),1,0);
            }

            ccbet = [
                $scope.cc_break_end_time1,
                $scope.cc_break_end_time2,
                $scope.cc_break_end_time3,
                $scope.cc_break_end_time4,
                $scope.cc_break_end_time5,
                $scope.cc_break_end_time6,
                $scope.cc_break_end_time7
            ];

            while(ccbet.indexOf(undefined) != -1){
                ccbet.splice(ccbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.ddbreakadd = function () {

            ddbst = [
                $scope.dd_break_start_time1,
                $scope.dd_break_start_time2,
                $scope.dd_break_start_time3,
                $scope.dd_break_start_time4,
                $scope.dd_break_start_time5,
                $scope.dd_break_start_time6,
                $scope.dd_break_start_time7
            ];

            while(ddbst.indexOf(undefined) != -1){
                ddbst.splice(ddbst.indexOf(undefined),1,0);
            }

            ddbet = [
                $scope.dd_break_end_time1,
                $scope.dd_break_end_time2,
                $scope.dd_break_end_time3,
                $scope.dd_break_end_time4,
                $scope.dd_break_end_time5,
                $scope.dd_break_end_time6,
                $scope.dd_break_end_time7
            ];

            while(ddbet.indexOf(undefined) != -1){
                ddbet.splice(ddbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.eebreakadd = function () {

            eebst = [
                $scope.ee_break_start_time1,
                $scope.ee_break_start_time2,
                $scope.ee_break_start_time3,
                $scope.ee_break_start_time4,
                $scope.ee_break_start_time5,
                $scope.ee_break_start_time6,
                $scope.ee_break_start_time7
            ];

            while(eebst.indexOf(undefined) != -1){
                eebst.splice(eebst.indexOf(undefined),1,0);
            }

            eebet = [
                $scope.ee_break_end_time1,
                $scope.ee_break_end_time2,
                $scope.ee_break_end_time3,
                $scope.ee_break_end_time4,
                $scope.ee_break_end_time5,
                $scope.ee_break_end_time6,
                $scope.ee_break_end_time7
            ];

            while(eebet.indexOf(undefined) != -1){
                eebet.splice(eebet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.ffbreakadd = function () {

            ffbst = [
                $scope.ff_break_start_time1,
                $scope.ff_break_start_time2,
                $scope.ff_break_start_time3,
                $scope.ff_break_start_time4,
                $scope.ff_break_start_time5,
                $scope.ff_break_start_time6,
                $scope.ff_break_start_time7
            ];

            while(ffbst.indexOf(undefined) != -1){
                ffbst.splice(ffbst.indexOf(undefined),1,0);
            }

            ffbet = [
                $scope.ff_break_end_time1,
                $scope.ff_break_end_time2,
                $scope.ff_break_end_time3,
                $scope.ff_break_end_time4,
                $scope.ff_break_end_time5,
                $scope.ff_break_end_time6,
                $scope.ff_break_end_time7
            ];

            while(ffbet.indexOf(undefined) != -1){
                ffbet.splice(ffbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.ggbreakadd = function () {

            ggbst = [
                $scope.gg_break_start_time1,
                $scope.gg_break_start_time2,
                $scope.gg_break_start_time3,
                $scope.gg_break_start_time4,
                $scope.gg_break_start_time5,
                $scope.gg_break_start_time6,
                $scope.gg_break_start_time7
            ];

            while(ggbst.indexOf(undefined) != -1){
                ggbst.splice(ggbst.indexOf(undefined),1,0);
            }

            ggbet = [
                $scope.gg_break_end_time1,
                $scope.gg_break_end_time2,
                $scope.gg_break_end_time3,
                $scope.gg_break_end_time4,
                $scope.gg_break_end_time5,
                $scope.gg_break_end_time6,
                $scope.gg_break_end_time7
            ];

            while(ggbet.indexOf(undefined) != -1){
                ggbet.splice(ggbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.hhbreakadd = function () {

            hhbst = [
                $scope.hh_break_start_time1,
                $scope.hh_break_start_time2,
                $scope.hh_break_start_time3,
                $scope.hh_break_start_time4,
                $scope.hh_break_start_time5,
                $scope.hh_break_start_time6,
                $scope.hh_break_start_time7
            ];

            while(hhbst.indexOf(undefined) != -1){
                hhbst.splice(hhbst.indexOf(undefined),1,0);
            }

            hhbet = [
                $scope.hh_break_end_time1,
                $scope.hh_break_end_time2,
                $scope.hh_break_end_time3,
                $scope.hh_break_end_time4,
                $scope.hh_break_end_time5,
                $scope.hh_break_end_time6,
                $scope.hh_break_end_time7
            ];

            while(hhbet.indexOf(undefined) != -1){
                hhbet.splice(hhbet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.iibreakadd = function () {

            iibst = [
                $scope.ii_break_start_time1,
                $scope.ii_break_start_time2,
                $scope.ii_break_start_time3,
                $scope.ii_break_start_time4,
                $scope.ii_break_start_time5,
                $scope.ii_break_start_time6,
                $scope.ii_break_start_time7
            ];

            while(iibst.indexOf(undefined) != -1){
                iibst.splice(iibst.indexOf(undefined),1,0);
            }

            iibet = [
                $scope.ii_break_end_time1,
                $scope.ii_break_end_time2,
                $scope.ii_break_end_time3,
                $scope.ii_break_end_time4,
                $scope.ii_break_end_time5,
                $scope.ii_break_end_time6,
                $scope.ii_break_end_time7
            ];

            while(iibet.indexOf(undefined) != -1){
                iibet.splice(iibet.indexOf(undefined),1,0);
            }

            var test = '';
        };
        $scope.jjbreakadd = function () {

            jjbst = [
                $scope.jj_break_start_time1,
                $scope.jj_break_start_time2,
                $scope.jj_break_start_time3,
                $scope.jj_break_start_time4,
                $scope.jj_break_start_time5,
                $scope.jj_break_start_time6,
                $scope.jj_break_start_time7
            ];

            while(jjbst.indexOf(undefined) != -1){
                jjbst.splice(jjbst.indexOf(undefined),1,0);
            }

            jjbet = [
                $scope.jj_break_end_time1,
                $scope.jj_break_end_time2,
                $scope.jj_break_end_time3,
                $scope.jj_break_end_time4,
                $scope.jj_break_end_time5,
                $scope.jj_break_end_time6,
                $scope.jj_break_end_time7
            ];

            while(jjbet.indexOf(undefined) != -1){
                jjbet.splice(jjbet.indexOf(undefined),1,0);
            }

            var test = '';
        };

        $scope.addRow = function () {

            $scope.breaktimes.push({'name': '휴게시간 ', 'num': $scope.counter});

            $scope.counter++
        };
        $scope.addRowb = function () {

            $scope.breaktimesb.push({'name': '휴게시간 ', 'num': $scope.counterb});

            $scope.counterb++
        };
        $scope.addRowc = function () {

            $scope.breaktimesc.push({'name': '휴게시간 ', 'num': $scope.counterc});

            $scope.counterc++
        };
        $scope.addRowd = function () {

            $scope.breaktimesd.push({'name': '휴게시간 ', 'num': $scope.counterd});

            $scope.counterd++
        };
        $scope.addRowe = function () {

            $scope.breaktimese.push({'name': '휴게시간 ', 'num': $scope.countere});

            $scope.countere++
        };
        $scope.addRowf = function () {

            $scope.breaktimef.push({'name': '휴게시간 ', 'num': $scope.counterf});

            $scope.counterf++
        };
        $scope.addRowg = function () {

            $scope.breaktimesg.push({'name': '휴게시간 ', 'num': $scope.counterg});

            $scope.counterg++
        };
        $scope.addRowh = function () {

            $scope.breaktimesh.push({'name': '휴게시간 ', 'num': $scope.counterh});

            $scope.counterh++
        };
        $scope.addRowi = function () {

            $scope.breaktimesi.push({'name': '휴게시간 ', 'num': $scope.counteri});

            $scope.counteri++
        };
        $scope.addRowj = function () {

            $scope.breaktimesj.push({'name': '휴게시간 ', 'num': $scope.counterj});

            $scope.counterj++
        };

        $scope.removeRow = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimes);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimes.splice(index, 1);

            $scope.counter--


        };
        $scope.removeRowb = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesb);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesb.splice(index, 1);

            $scope.counterb--


        };
        $scope.removeRowc = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesc);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesc.splice(index, 1);

            $scope.counterc--


        };
        $scope.removeRowd = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesd);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesd.splice(index, 1);

            $scope.counterd--


        };
        $scope.removeRowe = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimese);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimese.splice(index, 1);

            $scope.countere--


        };
        $scope.removeRowf = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesf);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesf.splice(index, 1);

            $scope.counterf--


        };
        $scope.removeRowg = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesg);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesg.splice(index, 1);

            $scope.counterg--


        };
        $scope.removeRowh = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesh);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesh.splice(index, 1);

            $scope.counterh--


        };
        $scope.removeRowi = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesi);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesi.splice(index, 1);

            $scope.counteri--


        };
        $scope.removeRowj = function (name) {
            var index = -1;
            var comArr = eval($scope.breaktimesj);
            for (var i = 0; i < comArr.length; i++) {
                if (comArr[i].name === name) {
                    index = i;
                    break;
                }
            }
            if (index === -1) {
                alert("Something gone wrong");
            }
            $scope.breaktimesj.splice(index, 1);

            $scope.counterj--


        };

        var tabs = [
            { title:'A', href:'A'},
            { title:'B', href:'B'},
            { title:'C', href:'C'},
            { title:'D', href:'D'},
            { title:'E', href:'E'},

        ];

        var alphabet = ['F','G','H','I','J'];
        var al = alphabet.splice(0,5);

        var lastal = [];
        var last = '';

        $scope.tabs = tabs;

        $scope.addTab = function () {
            var tablength = tabs.length;

            for(var i = 0; i < 1; i++){

                tabs.push({title: al[i] , href: al[i] });

                al.push(al[i]);
                last = al.splice(0,1);

                lastal = al;

            };
        };

        $scope.removeTab = function () {
            for (var i = 0; i < 1; i++) {
                var l = last.toString();
                var len = tabs.length;
                var lenminus = len - 1 ;
                tabs.splice(lenminus , 1);
                lastal.unshift(l);
                lastal.splice(-1, 1);

                al = lastal;
            };

        };

    });
})();

