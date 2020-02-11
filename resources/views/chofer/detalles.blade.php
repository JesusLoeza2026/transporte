@extends('layouts.master')
@section('titulo','Detalles Chofer')
@section('contenido')
<h2>DETALLES DE LOS CHOFERES</h2>
<div id="chofer">
<button class="btn btn-primary" v-on:click="showModal()">Agregar Nuevo</button><br><br>

<div class="row animated zoomIn delay-0s col-xs-7 c" v-if="editando==true" >

	<h3> EDITANDO</h3>
	<br>

		<input type="text" placeholder="Su turno" class="form-control" v-model="id_turno"><br>
		<input type="text" placeholder="Nombre" class="form-control" v-model="nombre"><br>
		<input type="text" placeholder="Apellido" class="form-control" v-model="apellido"><br>
		<input type="text" placeholder="Activo" class="form-control" v-model="activo"><br><br>
		<button class="btn btn-success" v-on:click="Guardar()">Guardar</button>
		<button class="btn btn-warning" v-on:click="editando=false">Cancelar</button>
  </div>
  <div>





</div>
<div class="row animated zoomIn delay-0s col-xs-7 c" v-if="editando2==true" >

	<h3>Actualizar</h3>
	<br>

		<input type="text" placeholder="Su turno" class="form-control" v-model="id_turno"><br>
		<input type="text" placeholder="Nombre" class="form-control" v-model="nombre"><br>
		<input type="text" placeholder="Apellido" class="form-control" v-model="apellido"><br>
		<input type="text" placeholder="Activo" class="form-control" v-model="activo"><br><br>
		<button class="btn btn-success" v-on:click="actualizarA(auxiliar)">Actualizar</button>
		<button class="btn btn-warning" v-on:click="editando=false">Cancelar</button>
  </div>
  <div>





</div>



{{-- @{{chofer}}

@{{turno}} --}}

<table class="table  table-light table-bordered">
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
						
					<span class="glyphicon glyphicon-edit" v-on:click="show(ch.id_chofer)"></span>
					<span class="glyphicon glyphicon-trash"v-on:click="EliminarChofer(ch.id_chofer)"></span>
				</td>


		</tr>
</table>



</div>





	
@endsection




@push('scripts')

	<script src="js/vue-resource.js"></script>
	<script src="js/chofer.js"></script>  
@endpush