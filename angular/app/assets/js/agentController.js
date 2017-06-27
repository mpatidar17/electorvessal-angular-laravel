var cargo = angular.module('agentController',['ngRoute']);

cargo.controller('createAgentCtrl',function( $scope,$http ){

    $scope.responseMessage = "";

    $scope.validationErrors = "";

    $scope.formData = {};

    $scope.createAgent = function(){
      //debugger
      $http({

        method:'POST',
        url:'http://localhost:8000/agent',
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
.controller('editAgentCtrl',function( $scope,$http,$routeParams ){

  $scope.responseMessage = "";

  $scope.validationErrors = "";

  $scope.formData = {};

  $scope.editAgent = function(){

    $scope.formData.id = $routeParams.param1;

    // debugger

    $http({

      method:'POST',
      url:'http://localhost:8000/agent/update/',
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
.controller('dashboardController',function(){

  //alert("This is  view-controller-one");

})
.controller('getAgentList',function($scope,$http,$window,$httpParamSerializer){

  $scope.responseMessage = "";

  $scope.agentDeleted = 0;

  $http({

    method:'GET',
    url:'http://localhost:8000/agent',
    params:{'company_id':1}

  }).then(function agentSuccess( response ){

    $scope.agents = response.data;

  });

  $scope.agentActions = "";

  $scope.doAgentActions = function( agentActions,id ){

    if( agentActions == "view" ){

      $window.location.href = '/app/views/#!/agent/show/'+id;

    }

    if( agentActions == "edit" ){

      $window.location.href = '/app/views/#!/agent/edit/'+id;

    }

    if( agentActions == "delete" ){
      if(confirm("Are you sure you want to delete this agent ?")){
        $http({

          url:'http://localhost:8000/agent/delete/'+id,
          method:'GET'

        }).success(function( response ){
          
          $scope.responseMessage = response.message;

          $scope.agentDeleted = id; 

        });
      }

    }

  }

})
.controller('getAgentDetailsCtrl',function( $scope,$http,$routeParams ){

    $scope.agentDetails = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/agent/'+$routeParams.param1,

    })
    .success(function( response ){

      $scope.agentDetails = response;

    });

});