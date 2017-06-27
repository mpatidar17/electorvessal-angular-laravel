var cargo = angular.module('invoiceItemController',['ngRoute']);

cargo.controller('createInvoiceItemCtrl',function( $scope,$http ){

    $scope.responseMessage = "";

    $scope.validationErrors = "";

    $scope.formData = {};

    //$scope.agentList = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/invoiceItem/create'

    }).success(function( response ){

      $scope.invoiceItemCreateList = response;
      //debugger
    });

    $scope.createInvoiceItem = function(){
      //debugger
      $http({

        method:'POST',
        url:'http://localhost:8000/invoiceItem',
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
.controller('editInvoiceItemCtrl',function( $scope,$http,$routeParams ){

  $http({

      method:'GET',
      url:'http://localhost:8000/invoiceItem/'+$routeParams.param1+'/edit'

    }).success(function( response ){

      $scope.invoiceItemEditList = response;

  });

  $scope.responseMessage = "";

  $scope.validationErrors = "";

  $scope.formData = {};

  $scope.editInvoiceItem = function(){

    $scope.formData.id = $routeParams.param1;

    // debugger
//debugger
    $http({

      method:'POST',
      url:'http://localhost:8000/invoiceItem/update/',
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
.controller('getInvoiceItemList',function($scope,$http,$window,$httpParamSerializer){

  $scope.responseMessage = "";

  $scope.invoiceItemDeleted = 0;

  $http({

    method:'GET',
    url:'http://localhost:8000/invoiceItem',
    params:{'company_id':1}

  }).then(function invoiceItemSuccess( response ){

    $scope.invoiceItems = response.data;

  });

  $scope.invoiceItemActions = "";

  $scope.doInvoiceItemActions = function( invoiceItemActions,id ){

    if( invoiceItemActions == "view" ){

      $window.location.href = '/app/views/#!/invoiceItem/show/'+id;

    }

    if( invoiceItemActions == "edit" ){

      $window.location.href = '/app/views/#!/invoiceItem/edit/'+id;

    }

    if( invoiceItemActions == "delete" ){
      if(confirm("Are you sure you want to delete this invoiceItem ?")){
        $http({

          url:'http://localhost:8000/invoiceItem/delete/'+id,
          method:'GET'

        }).success(function( response ){
          
          $scope.responseMessage = response.message;

          $scope.invoiceItemDeleted = id; 

        });
      }

    }

  }

})
.controller('getInvoiceItemDetailsCtrl',function( $scope,$http,$routeParams ){

    $scope.invoiceItemDetails = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/invoiceItem/'+$routeParams.param1,

    })
    .success(function( response ){

      $scope.invoiceItemDetails = response;
      
    });

});