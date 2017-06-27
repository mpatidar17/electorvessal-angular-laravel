var cargo = angular.module('subscriptionController',['ngRoute']);

cargo.controller('createSubscriptionCtrl',function( $scope,$http ){

    $scope.responseMessage = "";

    $scope.validationErrors = "";

    $scope.formData = {};

    $scope.createSubscription = function(){
      //debugger
      $http({

        method:'POST',
        url:'http://localhost:8000/subscription',
        data: $.param($scope.formData),
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }

      }).success(function(response){

        if( response.errors != undefined ){   //debugger
        $scope.validationErrors = response.errors;

        }
        else if( response.message != undefined ){
          
          $scope.responseMessage = response.message;

        }

      });

    }

})
.controller('editSubscriptionCtrl',function( $scope,$http,$routeParams ){

  $scope.responseMessage = "";

  $scope.validationErrors = "";

  $scope.formData = {};

  $scope.editSubscription = function(){

    $scope.formData.id = $routeParams.param1;

    // debugger

    $http({

      method:'POST',
      url:'http://localhost:8000/subscription/update/',
      data: $.param($scope.formData),
      headers : { 'Content-Type': 'application/x-www-form-urlencoded' }

    }).success(function(response){

      if( response.errors != undefined ){   //debugger
      $scope.validationErrors = response.errors;

      }
      else if( response.message != undefined ){
        
        $scope.responseMessage = response.message;

      }

    });

  }

})
.controller('getSubscriptionList',function($scope,$http,$window,$httpParamSerializer){

  $scope.responseMessage = "";

  $scope.subscriptionDeleted = 0;

  $http({

    method:'GET',
    url:'http://localhost:8000/subscription',
    params:{'company_id':1}

  }).then(function subscriptionSuccess( response ){

    $scope.subscriptions = response.data;

  });

  $scope.subscriptionActions = "";

  $scope.doSubscriptionActions = function( subscriptionActions,id ){

    if( subscriptionActions == "view" ){

      $window.location.href = '/app/views/#!/subscription/show/'+id;

    }

    if( subscriptionActions == "edit" ){

      $window.location.href = '/app/views/#!/subscription/edit/'+id;

    }

    if( subscriptionActions == "delete" ){
      if(confirm("Are you sure you want to delete this subscription ?")){
        $http({

          url:'http://localhost:8000/subscription/delete/'+id,
          method:'GET'

        }).success(function( response ){
          
          $scope.responseMessage = response.message;

          $scope.subscriptionDeleted = id; 

        });
      }

    }

  }

})
.controller('getSubscriptionDetailsCtrl',function( $scope,$http,$routeParams ){

    $scope.subscriptionDetails = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/subscription/'+$routeParams.param1,

    })
    .success(function( response ){

      $scope.subscriptionDetails = response;

    });

});