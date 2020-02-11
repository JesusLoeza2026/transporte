@extends('layouts.master')
@section('titulo','Administrar Chofer')
@section('contenido')
<h1>Cambiar Contraseña:</h1>
<br><br>

<h3>Bienvenido: {{Session::get('usuario')}}</h3><br>
<div id="contraseña">
    @{{contra}}
    <div class="col-xs-8">
        <h4>Datos</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for ="a in contra">
                <td>@{{a.nombres}}</td>
                <td>@{{a.apellidos}}</td>
                <td>@{{a.usuario}}</td>
                <td>@{{a.password}}</td>
                <td><span class="glyphicon glyphicon-edit" v-on:click="showAuto(au.id_auto)"></span></td>
               
                </tr>
               
            </tbody>
        </table>
        

    </div>
</div>



	
@endsection




@push('scripts')
<script src="js/vue-resource.js"></script>
<script src="js/contra.js"></script>


<script src="sweetAlert2/sweetalert2.all.min.js"></script>

 

  
@endpush