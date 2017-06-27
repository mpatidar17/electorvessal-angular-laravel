var cargo = angular.module('invoiceController',['ngRoute']);

cargo.controller('createInvoiceCtrl',function( $scope,$http ){

    $scope.responseMessage = "";

    $scope.validationErrors = "";

    $scope.formData = {};

    $scope.createInvoice = function(){
      //debugger
      $http({

        method:'POST',
        url:'http://localhost:8000/invoice',
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
.controller('editInvoiceCtrl',function( $scope,$http,$routeParams ){

  $scope.responseMessage = "";

  $scope.validationErrors = "";

  $scope.formData = {};

  $scope.editInvoice = function(){

    $scope.formData.id = $routeParams.param1;

    // debugger

    $http({

      method:'POST',
      url:'http://localhost:8000/invoice/update/',
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
.controller('getInvoiceList',function($scope,$http,$window,$httpParamSerializer){

  $scope.responseMessage = "";

  $scope.invoiceDeleted = 0;

  $http({

    method:'GET',
    url:'http://localhost:8000/invoice',
    params:{'company_id':1}

  }).then(function invoiceSuccess( response ){

    $scope.invoices = response.data;

  });

  $scope.invoiceActions = "";

  $scope.doInvoiceActions = function( invoiceActions,id ){

    if( invoiceActions == "view" ){
      //debugger
      $window.location.href = '/app/views/#!/invoice/show/'+id;

    }

    if( invoiceActions == "edit" ){

      $window.location.href = '/app/views/#!/invoice/edit/'+id;

    }

    if( invoiceActions == "delete" ){
      if(confirm("Are you sure you want to delete this invoice ?")){
        $http({

          url:'http://localhost:8000/invoice/delete/'+id,
          method:'GET'

        }).success(function( response ){
          
          $scope.responseMessage = response.message;

          $scope.invoiceDeleted = id; 

        });
      }

    }

  }

})
.controller('getInvoiceDetailsCtrl',function( $scope,$http,$routeParams ){

    $scope.invoiceDetails = {};

    $http({

      method:'GET',
      url:'http://localhost:8000/invoice/'+$routeParams.param1,

    })
    .success(function( response ){

      $scope.invoiceDetails = response;

    });

});