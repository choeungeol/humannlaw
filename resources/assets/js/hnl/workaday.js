/**
 * Created by aqua on 2016-11-10.
 */
var app = angular.module('workaday',[]);

app.controller('workadayCtrl', function($scope, $http, $element, $compile) {


    $scope.work = [];
    $scope.workb = [];
    $scope.workc = [];

    $scope.counter = 1;
    $scope.counterb = 1;
    $scope.counterc = 1;

    $scope.addRow = function(){

        $scope.work.push({'name':'공제근태 ' ,'num': $scope.counter});

        $scope.counter++
    };

    $scope.addRowb = function(){

        $scope.workb.push({'name':'추가근무 ' ,'num': $scope.counterb});

        $scope.counterb++
    };

    $scope.addRowc = function(){

        $scope.workc.push({'name':'휴가휴직 ' ,'num': $scope.counterc});

        $scope.counterc++
    };

    $scope.removeRow = function(name){
        var index = -1;
        var comArr = eval( $scope.work );
        for( var i = 0; i < comArr.length; i++ ) {
            if( comArr[i].name === name ) {
                index = i;
                break;
            }
        }
        if( index === -1 ) {
            alert( "Something gone wrong" );
        }
        $scope.work.splice( index, 1 );

        $scope.counter--


    };

    $scope.removeRowb = function(name){
        var index = -1;
        var comArr = eval( $scope.workb );
        for( var i = 0; i < comArr.length; i++ ) {
            if( comArr[i].name === name ) {
                index = i;
                break;
            }
        }
        if( index === -1 ) {
            alert( "Something gone wrong" );
        }
        $scope.workb.splice( index, 1 );

        $scope.counterb--


    };

    $scope.removeRowc = function(name){
        var index = -1;
        var comArr = eval( $scope.workc );
        for( var i = 0; i < comArr.length; i++ ) {
            if( comArr[i].name === name ) {
                index = i;
                break;
            }
        }
        if( index === -1 ) {
            alert( "Something gone wrong" );
        }
        $scope.workc.splice( index, 1 );

        $scope.counterc--


    };
});

app.directive('myExample', function() {
    return {
        restrict: 'E',
        templateUrl: 'assets/js/hnl/addworktable.html',
    };
});