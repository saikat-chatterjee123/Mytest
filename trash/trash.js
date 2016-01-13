'use strict';

angular.module('myApp.trash', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/trash', {
    templateUrl: 'trash/trash.html',
    controller: 'TrashCtrl'
  });
}])

.controller('TrashCtrl', [function() {

}]);