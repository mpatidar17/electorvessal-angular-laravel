var cargo = angular.module('customerController',['ngRoute']);

cargo.controller('createCustomerCtrl',function( $scope,$http ){

    $scope.responseMessage = "";

    $scope.validationErrors = "";

    $scope.formData = {};

    //$scope.agentList = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/customer/create'

    }).success(function( response ){

      $scope.agentList = response;

    });

    $scope.createCustomer = function(){
      //debugger
      $http({

        method:'POST',
        url:'http://localhost:8000/customer',
        data: $.param($scope.formData),
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }

      }).success(function(response){

        if( response.errors != undefined ){

        $scope.validationErrors = response.errors;

        }
        else if( response.message != undefined ){
          
          $scope.responseMessage = response.message;

        }

      });

    }

})
.controller('editCustomerCtrl',function( $scope,$http,$routeParams ){

  $http({

      method:'GET',
      url:'http://localhost:8000/customer/create'

    }).success(function( response ){

      $scope.agentList = response;

  });

  $scope.responseMessage = "";

  $scope.validationErrors = "";

  $scope.formData = {};

  $scope.editCustomer = function(){

    $scope.formData.id = $routeParams.param1;

    // debugger
debugger
    $http({

      method:'POST',
      url:'http://localhost:8000/customer/update/',
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
.controller('getCustomerList',function($scope,$http,$window,$httpParamSerializer){

  $scope.responseMessage = "";

  $scope.customerDeleted = 0;

  $http({

    method:'GET',
    url:'http://localhost:8000/customer',
    params:{'company_id':1}

  }).then(function customerSuccess( response ){

    $scope.customers = response.data;

  });

  $scope.customerActions = "";

  $scope.doCustomerActions = function( customerActions,id ){

    if( customerActions == "view" ){

      $window.location.href = '/app/views/#!/customer/show/'+id;

    }

    if( customerActions == "edit" ){

      $window.location.href = '/app/views/#!/customer/edit/'+id;

    }

    if( customerActions == "delete" ){
      if(confirm("Are you sure you want to delete this customer ?")){
        $http({

          url:'http://localhost:8000/customer/delete/'+id,
          method:'GET'

        }).success(function( response ){
          
          $scope.responseMessage = response.message;

          $scope.customerDeleted = id; 

        });
      }

    }

  }

})
.controller('getCustomerDetailsCtrl',function( $scope,$http,$routeParams ){

    $scope.customerDetails = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/customer/'+$routeParams.param1,

    })
    .success(function( response ){

      $scope.customerDetails = response;

    });

});