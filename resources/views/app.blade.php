<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document-head</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />	
</head>
<body ng-app="App">
    <div class="container">        
        <div ng-view></div>      
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('components/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/angular-resource.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('components/angular-route.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('scripts/route.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/controllers/productos.js') }}"></script> 
    <script type="text/javascript">
       $(document).ready(function(){
         //iniciar la modal
         $('.modal-trigger').leanModal();
       }); 
    </script>
   </body>
</html>