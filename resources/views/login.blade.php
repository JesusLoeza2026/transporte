<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="dist/semantic.css">
	<link rel="stylesheet" type="text/css" href="kitchensink.css">
    <link rel="stylesheet" href="css/recurso.css">
	<script src="js/jquery2.0.3.js"></script>
	<script src="js/jquery.address-1.5.js"></script>
  

	<!-- Used with Tab History !-->
	
	<script src="js/semantic.js"></script>
    <link rel="stylesheet" href="css/animate.css">

    <title>Iniciar Seccion</title>
</head>
<body id="sink">
<div class="demo container">
    
    <h2 class="f animated zoomIn delay-0s">Iniciar Sesión</h2>
    <div class="ui grid">
        <div class="six wide column">
            <form action="{{url('logi')}}" method="post" class="ui form">
        
                @csrf
                <div class="field">
                    <input type="text" placeholder="Usuario"  name="usuario">
                <br><br>
                <input type="password" placeholder="Contraseña"  name="password">
                <br><br>
                <input type="submit" value="Ingresar" class="ui teal button">
                <br>
        
                </div>
                </form>
                <a href="inicio"><input type="submit"  href="" value="regresar" class="ui teal button"></a>

        </div>

    </div>
</div>





<script src="js/recurso.js"></script>


</body>
</html>