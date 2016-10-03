'use strict';

angular.module('App',['ngRoute','ngResource'])
.config(['$routeProvider',function($routeProvider){
   $routeProvider
   .when('/productos',{
   	   templateUrl:'templates/index.html',
   	   controller:'IndexProductosCtrl'
   })  
   .otherwise({
   	  redirectTo: '/productos'
   });   
}])