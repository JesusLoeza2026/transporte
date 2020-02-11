<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="token" id="token" value="{{csrf_token()}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<script src="js/vue.js"></script>
	<title>Transporte</title>
</head>
<body>
	<div id="usuario">
		<div class="container">
			<h2>Registros</h2><br><br>
			<table class="table table-light">
				
				<thead>

					<tr>
						<td>Nombres</td>
						<td>Apellidos</td>
						<td>Fecha</td>
						<td>Lugar</td>
						<td>Dirrecion</td>
						<td>Activo</td>
						<td>Cupos</td>
					</tr>


				</thead>
				<tr  v-for="usu in usuario">
					<td>@{{usu.nombres}}</td>
					<td>@{{usu.apellidos}}</td>
					<td>@{{usu.fecha}}</td>
					<td>@{{usu.lugar}}</td>
					<td>@{{usu.dirrecion}}</td>
					<td>@{{usu.activo}}</td>
					<td>@{{usu.cupos}}</td>


				</tr>
				





			</table>












		</div>

	</div>
	
	<script src="js/vue-resource.js"></script>
	<script src="js/usuario.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>