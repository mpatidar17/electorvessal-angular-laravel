var cargo = angular.module('cargoTagGroupController',['ngRoute']);

cargo.controller('createCargoTagGroupCtrl',function( $scope,$http ){

    $scope.responseMessage = "";

    $scope.validationErrors = "";

    $scope.formData = {};

    $scope.createCargoTagGroup = function(){
      //debugger
      $http({

        method:'POST',
        url:'http://localhost:8000/cargoTagGroup',
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
.controller('editCargoTagGroupCtrl',function( $scope,$http,$routeParams ){

  $scope.responseMessage = "";

  $scope.validationErrors = "";

  $scope.formData = {};

  $scope.editCargoTagGroup = function(){

    $scope.formData.id = $routeParams.param1;

    // debugger

    $http({

      method:'POST',
      url:'http://localhost:8000/cargoTagGroup/update/',
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
.controller('getCargoTagGroupList',function($scope,$http,$window,$httpParamSerializer){

  $scope.responseMessage = "";

  $scope.cargoTagGroupDeleted = 0;

  $http({

    method:'GET',
    url:'http://localhost:8000/cargoTagGroup',
    params:{'company_id':1}

  }).then(function cargoTagGroupSuccess( response ){

    $scope.cargoTagGroups = response.data;

  });

  $scope.cargoTagGroupActions = "";

  $scope.doCargoTagGroupActions = function( cargoTagGroupActions,id ){

    if( cargoTagGroupActions == "view" ){

      $window.location.href = '/app/views/#!/cargoTagGroup/show/'+id;

    }

    if( cargoTagGroupActions == "edit" ){

      $window.location.href = '/app/views/#!/cargoTagGroup/edit/'+id;

    }

    if( cargoTagGroupActions == "delete" ){
      if(confirm("Are you sure you want to delete this Cargo Tag Group ?")){
        $http({

          url:'http://localhost:8000/cargoTagGroup/delete/'+id,
          method:'GET'

        }).success(function( response ){
          
          $scope.responseMessage = response.message;

          $scope.cargoTagGroupDeleted = id; 

        });
      }

    }

  }

})
.controller('getCargoTagGroupDetailsCtrl',function( $scope,$http,$routeParams ){

    $scope.cargoTagGroupDetails = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/cargoTagGroup/'+$routeParams.param1,

    })
    .success(function( response ){

      $scope.cargoTagGroupDetails = response;

    });

});