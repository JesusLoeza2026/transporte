@extends('layouts.master')
@section('titulo','Detalles Chofer')
@section('contenido')
<h2>DETALLES DE LOS CHOFERES</h2>
<div id="chofer">
<button class="ui primary button" v-on:click="showModal()">Agregar Nuevo</button><br><br>

<div class="row animated zoomIn delay-0s col-xs-7 c" v-if="editando==true" >
	<div class="ui grid">
		<div class="six wide column">
			<div class="ui form ">
				<h3>AGREGAR</h3>
	<br>

		<input type="text" placeholder="Su turno" v-model="id_turno"><br>
		<input type="text" placeholder="Nombre" v-model="nombre"><br>
		<input type="text" placeholder="Apellido" v-model="apellido"><br>
		<input type="text" placeholder="Activo" v-model="activo"><br><br>
		<button class="ui primary button" v-on:click="Guardar()">Guardar</button>
		<button class="ui button" v-on:click="editando=false">Cancelar</button>
			</div>
		</div>
	</div>
	
  </div>
  <div>





</div>
<div class="row animated zoomIn delay-0s col-xs-7 c" v-if="editando2==true" >
	<div class="ui grid">
		<div class="six wide column">
			<div class="ui form ">
				<h3>Actualizar</h3><br>
					

						<input type="text" placeholder="Su turno" v-model="id_turno"><br>
						<input type="text" placeholder="Nombre" v-model="nombre"><br>
						<input type="text" placeholder="Apellido" v-model="apellido"><br>
						<input type="text" placeholder="Activo" v-model="activo"><br><br>
						<button class="ui primary button" v-on:click="actualizarA(auxiliar)">Actualizar</button>
						<button class="ui button" v-on:click="editando2=false">Cancelar</button>
  	
			</div>
		</div>
	</div>





</div>



{{-- @{{chofer}}

@{{turno}} --}}

<table class="ui celled table">
    <thead>
		<tr>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Activo</td>
            <td>Turno</td>
            <td>Acciones</td>
        </tr>
    </thead>
       	<tr  v-for="ch in chofer">
			<td>@{{ch.id_chofer}}</td>
			<td>@{{ch.nombre}}</td>
			<td>@{{ch.apellido}}</td>
			<td>@{{ch.activo}}</td>
			<td>@{{ch.turno.turno}}</td> 
				<td>
						
					<i class="edit icon" v-on:click="show(ch.id_chofer)"></i>
					<i class="remove icon" v-on:click="EliminarChofer(ch.id_chofer)"></i>
				</td>


		</tr>
</table>



</div>





	
@endsection




@push('scripts')

	<script src="js/vue-resource.js"></script>
	<script src="js/chofer.js"></script>  
@endpush