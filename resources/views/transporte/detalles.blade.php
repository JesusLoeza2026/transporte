@extends('layouts.master')
@section('titulo','Inicio')
@section('contenido')
<style>
	.c{
		background-color:  rgb(245, 245, 245);
	}
	
</style>
<br>
<h3>DETALLES</h3>
<div id="detalles">
	      <div class="row animated zoomIn delay-0s col-xs-7 c" v-if="editando==true" >

	      	<h3> EDITANDO</h3>
	      	<br>
	     
	      		<input type="text" placeholder="Codigo" class="form-control" v-model="id_auto"><br>
	      		<input type="text" placeholder="Nombre" class="form-control" v-model="nombre"><br>
	      		<input type="text" placeholder="Asientos" class="form-control" v-model="cantidad"><br>
	      		<input type="text" placeholder="Activo" class="form-control" v-model="activo"><br><br>
				  <button class="btn btn-success" v-on:click="actualizarA(auxid)">Guardar Cambios</button>
				  <button class="btn btn-warning" v-on:click="editando=false">Cancelar</button>
            </div>
            <div>
      




		  </div>
		 































        <table class="table table-light table-bordered animated fadeIn delay-0s">
				
				<thead>

					<tr>
						<td>Codigo</td>
						<td>Nombre</td>
						<td>Asientos</td>
                        <td>Activo</td>
                        <td>Acciones</td>
						
					</tr>


				</thead>
				<tr  v-for="au in auto">
					<td>@{{au.id_auto}}</td>
					<td>@{{au.nombre}}</td>
					<td>@{{au.cantidad}}</td>
					<td>@{{au.activo}}</td>
					<td>
						
						<span class="glyphicon glyphicon-edit" v-on:click="showAuto(au.id_auto)"></span>
						<span class="glyphicon glyphicon-trash"v-on:click="EliminarAuto(au.id_auto)"></span>
						

					</td>


				</tr>
				<button class="btn" value="Mostrar" onclick="mostrar()">Agregar Nuevo</button><br>
				





			</table>
<br><br>


<div class="row animated zoomIn delay-0s col-xs-7 c" id="mostraryocultar">

	<h3>Agregar</h3>
	<br>

		<input type="text" placeholder="Codigo" class="form-control" v-model="id_auto"><br>
		<input type="text" placeholder="Nombre" class="form-control" v-model="nombre"><br>
		<input type="text" placeholder="Asientos" class="form-control" v-model="cantidad"><br>
		<input type="text" placeholder="Activo" class="form-control" v-model="activo"><br><br>
		<button class="btn btn-success" v-on:click="AgregarNuevo()">Guardar</button>
		<button class="btn btn-warning" value="Ocultar" onclick="ocultar()">Cancelar</button>
  </div>
  <div>





</div>





</div>












	
@endsection




@push('scripts')
	<script src="js/vue-resource.js"></script>
	<script src="js/detalles.js"></script>
	<script>
	
	function ocultar(){
	document.getElementById("mostraryocultar").style.display="none";
	}

	function mostrar(){
	document.getElementById("mostraryocultar").style.display="block";
	}
	
	
	</script>
@endpush