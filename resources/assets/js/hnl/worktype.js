(function () {
    'use strict';

    var app = angular.module('worktype',[]);

    app.controller('worktypeCtrl', function($scope, $http, $element, $compile) {

        $scope.breaktimes = [];
        $scope.breaktimesb = [];
        $scope.breaktimesc = [];
        $scope.counter = 1;
        $scope.counterb = 1;
        $scope.counterc = 1;


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

        var awst = {};          // A형 근무 시작시간
        var awet = {};          // A형 근무 종료시간
        var abst = {};          // A형 휴게 시작시간
        var abet = {};          // A형 휴게 종료시간

        var anow = {};
        var aworktype = {};




        $scope.calc = function() {

            if(abst == null){
                alert('휴게시작시간과 종료시간을 입력해주세요');
                return;

            }else{


                var calcatypewst = [];      // A형 근무 시작시간 계산
                var calcatypewet = [];      // A형 근무 종료시간 계산
                var calcatypebst = [];      // A형 휴게 시작시간 계산
                var calcatypebet = [];      // A형 휴게 시작종료 시간

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

                //총 휴일 근무시간 시간 분 나눔
                if(cwwt.toString().length == 4){
                    $scope.cwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(0,2) ];
                }else{
                    $scope.cwwt = [ cwwt.toString().substr(-2,2), cwwt.toString().substr(-3,1) ];
                }



                var cwtmonth = cwt;     // 월 근무시간 총합 계산
                var cbtmonth = cbt * 4;     // 월 휴게시간 총합 계산.

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

                //휴일 근로시간





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

