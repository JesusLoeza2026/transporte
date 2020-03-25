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
	<div class="ui grid">
		<div class="six wide column">
			<div class="ui form ">
				
				<input type="text" placeholder="Codigo" v-model="id_auto"><br>
				<input type="text" placeholder="Nombre" v-model="nombre"><br>
				<input type="text" placeholder="Asientos" v-model="cantidad"><br>
				<input type="text" placeholder="Activo"  v-model="activo"><br><br>
	
			</div>
	
		</div>

	</div>
				  <button class="ui primary button" v-on:click="actualizarA(auxid)">Guardar Cambios</button>
				  <button class="ui button" v-on:click="editando=false">Cancelar</button>
            </div>
<div>
      




 </div>
		 































        <table class="ui celled table">
				
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
						
						<i class="edit icon" v-on:click="showAuto(au.id_auto)"></i>
						<i class="remove icon" v-on:click="EliminarAuto(au.id_auto)"></i>
						

					</td>


				</tr>
				<button class="ui red basic button" value="Mostrar" onclick="mostrar()">Agregar Nuevo</button><br>
			




			</table>
<br><br>


<div class="ui input ui grid" id="mostraryocultar">

	<h3>Agregar</h3>
	<div class="ten wide column">
	
		<input type="text"placeholder="Codigo" v-model="id_auto"><br><br>
		<input type="text" placeholder="Nombre" id="nombre1" v-model="nombre"><br><br>
		<input type="text" placeholder="Asientos" v-model="cantidad"><br><br>
		<input type="text" placeholder="Activo" v-model="activo"><br><br>
		<button class="ui primary button" v-on:click="AgregarNuevo()">Guardar</button>
		<button class="ui button" value="Ocultar" onclick="ocultar()">Cancelar</button>
	</div>

		
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