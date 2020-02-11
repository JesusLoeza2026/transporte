<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <style>
    
    div.color{
        position: relative;
        top: 90px;
        background-color: #B7CFEB;
        height: 200px;
        width: 450px;
    }
    .f{
        font-family: Bahnschrift;
    }
    .m{
        width: 500px;
        position: relative;
        left: 700px;
        bottom: 150px;
    }
    </style>
    <title>Iniciar Seccion</title>
</head>
<body>


    



<div class="container">
    <br><br>
    <h2 class="f animated zoomIn delay-0s">Iniciar Sesión</h2>

    <div class="color animated zoomIn delay-0s">
        <div class="col-xs-9">
            <br>
                    <form action="{{url('logi')}}" method="post">
        
                    @csrf
                    <input type="text" placeholder="Usuario" class="form-control" name="usuario">
                    <br>
                    <input type="password" placeholder="Contraseña" class="form-control" name="password">
                    <br>
                    <input type="submit" value="Ingresar" class="btn btn-primary">
                    <br>
                    </form>
            
        </div>
        
            <br>
            <a href="inicio"><input type="submit"  href="" value="regresar" class="btn"></a>
                    
    </div>

    <div class="m animated zoomIn delay-1s"> 

        <img src="img/2.png" width="50%" alt="">


    </div>

   




       
<br><br>






</div>
    





<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>