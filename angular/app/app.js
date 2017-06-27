'use strict';

// Declare app level module which depends on views, and components
angular.module('cargo', [
  'ngRoute',
  'cargoRoutes',
  'agentController',
  'customerController',
  'subscriptionController',
  'invoiceController',
  'invoiceItemController',
  'storagelocationController',
  'cargoTagGroupController',
  'myApp.version'
]).
config(['$locationProvider', '$routeProvider', function($locationProvider, $routeProvider) {
  $locationProvider.hashPrefix('!');
}]);

function logout(){

   sessionStorage.clear();

   window.location = "/app/views/login.html";

}