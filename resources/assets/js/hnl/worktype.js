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

