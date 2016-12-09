(function () {
    'use strict';

    var app = angular.module('worktype',[]);

    app.controller('worktypeCtrl', function($scope, $http, $element, $compile) {


        var tabs = [
            { title:'A', href:'A'},
            { title:'B', href:'B'},
            { title:'C', href:'C'},
            { title:'D', href:'D'},
            { title:'E', href:'E'},
            { title:'F', href:'F'},
            { title:'G', href:'G'},
            { title:'H', href:'H'},
            { title:'I', href:'I'},
            { title:'J', href:'J'},
        ];

        $scope.tabs = tabs;

    });
})();

