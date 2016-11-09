var app = angular.module('worktype',[]);

app.controller('worktypeCtrl', function($scope, $http, $element, $compile) {

    $scope.breaktimes = [];
    $scope.breaktimesb = [];
    $scope.breaktimesc = [];
    $scope.counter = 1;
    $scope.counterb = 1;
    $scope.counterc = 1;

    $scope.addRow = function(){

        $scope.breaktimes.push({'name':'휴게시간 ' ,'num': $scope.counter});

            $scope.counter++
    };

    $scope.addRowb = function(){

        $scope.breaktimesb.push({'name':'휴게시간 ' ,'num': $scope.counterb});

        $scope.counterb++
    };

    $scope.addRowc = function(){

        $scope.breaktimesc.push({'name':'휴게시간 ' ,'num': $scope.counterc});

        $scope.counterc++
    };

    $scope.removeRow = function(name,num){
        var index = -1;
        var comArr = eval( $scope.breaktimes );
        for( var i = 0; i < comArr.length; i++ ) {
            if( comArr[i].name === name ) {
                index = i;
                break;
            }
        }
        if( index === -1 ) {
            alert( "Something gone wrong" );
        }
        $scope.breaktimes.splice( index, 1 );

        $scope.counter--


    };

    $scope.removeRowb = function(name){
        var index = -1;
        var comArr = eval( $scope.breaktimesb );
        for( var i = 0; i < comArr.length; i++ ) {
            if( comArr[i].name === name ) {
                index = i;
                break;
            }
        }
        if( index === -1 ) {
            alert( "Something gone wrong" );
        }
        $scope.breaktimesb.splice( index, 1 );

        $scope.counterb--


    };

    $scope.removeRowc = function(name){
        var index = -1;
        var comArr = eval( $scope.breaktimesc );
        for( var i = 0; i < comArr.length; i++ ) {
            if( comArr[i].name === name ) {
                index = i;
                break;
            }
        }
        if( index === -1 ) {
            alert( "Something gone wrong" );
        }
        $scope.breaktimesc.splice( index, 1 );

        $scope.counterc--


    };

});
