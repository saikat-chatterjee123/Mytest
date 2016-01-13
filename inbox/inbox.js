'use strict';

angular.module('myApp.inbox', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/inbox', {
    templateUrl: 'inbox/inbox.html',
    controller: 'InboxCtrl'
  })
  .when('/details/:id', {
     templateUrl: 'inbox/inbox-details.html',
     controller: 'MailContentCtrl'
  });
}])


// inbox main parent controller
.controller('InboxCtrl', ['$scope', 'mailList', function($scope, mailList) {
        $scope.mailItems = mailList.allmailFunc();



}])




/*
* inbox mail listing controller.
* this is  sub controller of 'InboxCtrl'.
* this controller will take all the functionality for doing the listing all the mail and some other functionality as well.
*/
.controller('MailListingCtrl', ['$scope', '$location', 'mailList', function($scope, $location, mailList) {

        $scope.mailItems = mailList.allmailFunc();
        //console.log($scope.mailItems.length); // do this for the unread


        // on click the unread made the read
        $scope.counter = 0;
        $scope.unreadClass = "unread";
        // $scope.changeClass = function(){
        //     if($scope.unreadClass === "unread"){
        //         $scope.unreadClass = "active";
        //     }else{
        //         $scope.unreadClass = "unread";
        //     }
        // };






        $scope.goDetailsMail = function(id){
            $location.url('/details/' + id);
        };

}])





/*
 * inbox mail content controller.
 * this is  sub controller of 'InboxCtrl'.
 * this controller will take all the functionality for doing the listing all the mail and some other functionality as well.
 */
.controller('MailContentCtrl', ['$scope', '$location', '$routeParams', 'mailList', function($scope, $location, $routeParams, mailList) {

        //$scope.mailItems = mailList.allmailFunc([$routeParams.id]);
        $scope.mailItems = mailList.allmailFunc()[$routeParams.id];
        // console.log($scope.mailItems);
        
        // gate the current hours
        $scope.getHours = function(){
            var currentdate = new Date();
            return currentdate.getTime();
        };
        // console.log(getHours());







        $scope.goMailList = function() {
            $location.url('/inbox');
        };


}]);


