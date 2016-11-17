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

        var awst = [];

        var amondays = awst.a_work_start_time1;
        var aTuesdays = awst.a_work_start_time2;


        var awet = [];
        var amondaye = awet.a_work_end_time1;


        $scope.calc = function() {
            //월요일 시작시간
            var amondays = awst[0]['time'];
            var times = amondays.substring(0, 5)
            var tis = times.split(':');
            var ts = tis[0]+tis[1];
            var ts = Number(ts);


            //월요일 종료시간
            var amondaye = awet[0]['time'];
            var timee = amondaye.substring(0, 5)
            var tie = timee.split(':');
            var te = tie[0]+tie[1];
            var te = Number(te);

            var test = '';
            var test1 = '';



        };

        $scope.aworkadd = function() {

            awst.push(
                {'week': '월', 'time': $scope.a_work_start_time1},
                {'week': '화', 'time': $scope.a_work_start_time2},
                {'week': '수', 'time': $scope.a_work_start_time3},
                {'week': '목', 'time': $scope.a_work_start_time4},
                {'week': '금', 'time': $scope.a_work_start_time5},
                {'week': '토', 'time': $scope.a_work_start_time6},
                {'week': '일', 'time': $scope.a_work_start_time7});

            awet.push(
                {'week': '월', 'time': $scope.a_work_end_time1},
                {'week': '화', 'time': $scope.a_work_end_time2},
                {'week': '수', 'time': $scope.a_work_end_time3},
                {'week': '목', 'time': $scope.a_work_end_time4},
                {'week': '금', 'time': $scope.a_work_end_time5},
                {'week': '토', 'time': $scope.a_work_end_time6},
                {'week': '일', 'time': $scope.a_work_end_time7});
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

