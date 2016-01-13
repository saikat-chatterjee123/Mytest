'use strict';

// Declare app level module which depends on views, and components
var myApp = angular.module('myApp', [
  'ngRoute',
  'myApp.inbox',
  'myApp.trash',
  'myApp.version'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.otherwise({redirectTo: '/inbox'});
}]);





// navigation control
/*
* navigation factory for the data list of navigation item
* as in this array
*/
myApp.factory('navdatafactory', function(){
    var navigationItem = [
        {path: '/inbox', title: 'Inbox', icon: 'fa-envelope'},
        {path: '/trash', title: 'Trash', icon: 'fa-trash'},
    ];
    // return the array in this function
    function navItem(){
        return navigationItem;
    }

    // return the whole function as a object
    return{
        navItem: navItem
    }
});
/*
*  this is where you dynamic populate the navigation
*  item. then get the hash location and do the is active
*  navigation accordingly.
*/
myApp.controller('NavCtrl', ['$scope', '$location', 'navdatafactory',  function($scope, $location, navdatafactory) {
    $scope.items = navdatafactory.navItem();
    $scope.isActive = function(item) {
        if (item.path == $location.path()) {
            return true;
        }
        return false;
    };
    //console.log($scope.items);
}]);







/*
* mail listing control
*/
myApp.factory('mailList', function(){
    // var allmail = [
    //     {id: 0, from: 'subho@mail.com', name: 'Subho Mondal', date: '1220323623006', to: 'subhojit1992.mondal@gmail.com', subject: 'Wow this is awesome mail app', content: 'The Gmail API is a web service: it uses a RESTful API with a JSON payload. This section provides a general overview of the API features and their use. For detailed information on the APIs resources and methods, refer to the Gmail API reference.' },
    //     {id: 1, from: 'jhon@mail.com', name: 'Jhon Doe', date: '1281523623006', to: 'subhojit1992.mondal@gmail.com', subject: 'Cool mail for this year', content: 'Messages and labels are the basic units of a mailbox. Drafts, history, and threads all contain one or more messages with additional metadata. Messages are immutable: they can only be created and deleted. No message properties can be changed other than the labels applied to a given message.' },
    //     {id: 2, from: 'lorem@mail.com', name: 'Lorem Ipsum', date: '1288328023006', to: 'subhojit1992.mondal@gmail.com', subject: 'This is a random text', content: 'Messages and labels are the basic units of a mailbox. Drafts, history, and threads all contain one or more messages with additional metadata. Messages are immutable: they can only be created and deleted.' },
    //     {id: 3, from: 'info@mail.com', name: 'Info', date: '1288323193006', to: 'subhojit1992.mondal@gmail.com', subject: 'I will coming this week', content: 'The Gmail API is a web service: it uses a RESTful API with a JSON payload. This section provides a general overview of the API features and their use.' },
    // ];
    $http.get("http://localhost/app/ci_test/get_maillist")
    .success(function(data)
    {
    //  console.log(data);
      $scope.allmail = data;
      //$scope.currencyVal = $scope.currencies[0].currency_name;
      //$scope.currencySign = $scope.currencies[0].currency_symbol;
    });
    function allmailFunc(){
        return allmail;
    }
    return{
        allmailFunc: allmailFunc
    }

});
