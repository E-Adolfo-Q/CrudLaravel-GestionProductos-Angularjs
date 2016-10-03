'use strict';

angular.module('App')
 .controller('IndexProductosCtrl',function($scope){

  $scope.title='Productos';
  
  $scope.showCreateProduct = function(){    	
    $('#modal-product-form').openModal();
    $('#modal-product-title').text('Crear nuevo Producto');
    $('#btn-update-product').hide();
    $('#btn-create-product').show();    
  }

  $scope.showEditProduct = function(){  	
  	$('#modal-product-form').openModal();
  	$('#modal-product-title').text('Editar Producto'); 
  	$('#btn-create-product').hide();
  	$('#btn-update-product').show();  	
  }

  $scope.clearForm = function(){
  	$scope.id = "";
  	$scope.name = "";
  	$scope.description = "";
  	$scope.price = ""; 
  }
   
});

