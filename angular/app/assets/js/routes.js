var routes = angular.module("cargoRoutes",['ngRoute']);

routes.config(['$routeProvider',function( $routeProvider ){

  $routeProvider.when('/dashboard',{

    templateUrl:'dashboard.html',
    controller:'dashboardController'

  })
  // Agents Routes Start

  .when('/agents',{

    templateUrl:'agents/agents.html',
    controller:'getAgentList'

  })
  .when('/agent/create',{

    templateUrl:'agents/create.html',

  })
  .when('/agent/show/:param1',{

    templateUrl:'agents/show.html',
    controller:'getAgentDetailsCtrl'

  })
  .when('/agent/edit/:param1',{

    templateUrl:'agents/edit.html',
    controller:'getAgentDetailsCtrl'

  })

  // Agents Routes Ends

  // Customers Routes Start

  .when('/customers',{

    templateUrl:'customers/customers.html',
    controller:'getCustomerList'

  })
  .when('/customer/create',{

    templateUrl:'customers/create.html',
    controller:'createCustomerCtrl'

  })
  .when('/customer/show/:param1',{

    templateUrl:'customers/show.html',
    controller:'getCustomerDetailsCtrl'

  })
  .when('/customer/edit/:param1',{

    templateUrl:'customers/edit.html',
    controller:'getCustomerDetailsCtrl'

  })

  // Customers Routes Ends

  // Subscription Routes Start

  .when('/subscriptions',{

    templateUrl:'subscriptions/subscriptions.html',
    controller:'getSubscriptionList'

  })
  .when('/subscription/create',{

    templateUrl:'subscriptions/create.html',

  })
  .when('/subscription/show/:param1',{

    templateUrl:'subscriptions/show.html',
    controller:'getSubscriptionDetailsCtrl'

  })
  .when('/subscription/edit/:param1',{

    templateUrl:'subscriptions/edit.html',
    controller:'getSubscriptionDetailsCtrl'

  })

  // Subscription Routes Ends

  // Invoice Routes Start

  .when('/invoices',{

    templateUrl:'invoices/invoices.html',
    controller:'getInvoiceList'

  })
  .when('/invoice/create',{

    templateUrl:'invoices/create.html',

  })
  .when('/invoice/show/:param1',{

    templateUrl:'invoices/show.html',
    controller:'getInvoiceDetailsCtrl'

  })
  .when('/invoice/edit/:param1',{

    templateUrl:'invoices/edit.html',
    controller:'getInvoiceDetailsCtrl'

  })

  // Invoice Routes Ends

  // Storage Location Routes Start

  .when('/storagelocations',{

    templateUrl:'storagelocations/storagelocations.html',
    controller:'getStoragelocationList'

  })
  .when('/storagelocation/create',{

    templateUrl:'storagelocations/create.html',

  })
  .when('/storagelocation/show/:param1',{

    templateUrl:'storagelocations/show.html',
    controller:'getStoragelocationDetailsCtrl'

  })
  .when('/storagelocation/edit/:param1',{

    templateUrl:'storagelocations/edit.html',
    controller:'getStoragelocationDetailsCtrl'

  })

  // Storage Location Routes Ends

  // Invoice Item Routes Start

  .when('/invoiceItems',{

    templateUrl:'invoiceItems/invoiceItems.html',
    controller:'getInvoiceItemList'

  })
  .when('/invoiceItem/create',{

    templateUrl:'invoiceItems/create.html',
    controller:'createInvoiceItemCtrl'

  })
  .when('/invoiceItem/show/:param1',{

    templateUrl:'invoiceItems/show.html',
    controller:'getInvoiceItemDetailsCtrl'

  })
  .when('/invoiceItem/edit/:param1',{

    templateUrl:'invoiceItems/edit.html',
    controller:'getInvoiceItemDetailsCtrl'

  })

  // Invoice Item Routes Ends

  // Cargo Tag Group Item Routes Start

  .when('/cargoTagGroups',{

    templateUrl:'cargoTagGroups/cargoTagGroups.html',
    controller:'getCargoTagGroupList'

  })
  .when('/cargoTagGroup/create',{

    templateUrl:'cargoTagGroups/create.html',
    controller:'createCargoTagGroupCtrl'

  })
  .when('/cargoTagGroup/show/:param1',{

    templateUrl:'cargoTagGroups/show.html',
    controller:'getCargoTagGroupDetailsCtrl'

  })
  .when('/cargoTagGroup/edit/:param1',{

    templateUrl:'cargoTagGroups/edit.html',
    controller:'getCargoTagGroupDetailsCtrl'

  })

  // Cargo Tag Group Routes Ends

  .when('/logout',function(){

    controller:'logoutCtrl'

  })
  .otherwise({
    redirectTo:'/dashboard'
  });

}]);
routes.controller('logoutCtrl',function($window){

  sessionStorage.clear();
  $window.location.href = '/app/views/login.html';

});