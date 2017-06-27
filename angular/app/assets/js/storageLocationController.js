var cargo = angular.module('storagelocationController',['ngRoute']);

cargo.controller('createStoragelocationCtrl',function( $scope,$http ){

    $scope.responseMessage = "";

    $scope.validationErrors = "";

    $scope.formData = {};

    $scope.createStoragelocation = function(){
      //debugger
      $http({

        method:'POST',
        url:'http://localhost:8000/storagelocation',
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
.controller('editStoragelocationCtrl',function( $scope,$http,$routeParams ){

  $scope.responseMessage = "";

  $scope.validationErrors = "";

  $scope.formData = {};

  $scope.editStoragelocation = function(){

    $scope.formData.id = $routeParams.param1;

    // debugger

    $http({

      method:'POST',
      url:'http://localhost:8000/storagelocation/update/',
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
.controller('getStoragelocationList',function($scope,$http,$window,$httpParamSerializer){

  $scope.responseMessage = "";

  $scope.storagelocationDeleted = 0;

  $http({

    method:'GET',
    url:'http://localhost:8000/storagelocation',
    params:{'company_id':1}

  }).then(function storagelocationSuccess( response ){

    $scope.storagelocations = response.data;

  });

  $scope.storagelocationActions = "";

  $scope.doStoragelocationActions = function( storagelocationActions,id ){

    if( storagelocationActions == "view" ){

      $window.location.href = '/app/views/#!/storagelocation/show/'+id;

    }

    if( storagelocationActions == "edit" ){

      $window.location.href = '/app/views/#!/storagelocation/edit/'+id;

    }

    if( storagelocationActions == "delete" ){
      if(confirm("Are you sure you want to delete this storage location ?")){
        $http({

          url:'http://localhost:8000/storagelocation/delete/'+id,
          method:'GET'

        }).success(function( response ){
          
          $scope.responseMessage = response.message;

          $scope.storagelocationDeleted = id; 

        });
      }

    }

  }

})
.controller('getStoragelocationDetailsCtrl',function( $scope,$http,$routeParams ){

    $scope.storagelocationDetails = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/storagelocation/'+$routeParams.param1,

    })
    .success(function( response ){

      $scope.storagelocationDetails = response;

    });

});