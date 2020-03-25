@extends('layouts.master')
@section('titulo','Administrar Chofer')
@section('contenido')
<h1>Cambiar Contraseña:</h1>
<br><br>

<h3>Bienvenido: {{Session::get('usuario')}}</h3><br>
<div id="contraseña">
   
    <div class="col-xs-8">
        <h4>Datos</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Codigosku</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for ="a in contra">
                <td>@{{a.sku}}</td>
                <td>@{{a.nombres}}</td>
                <td>@{{a.apellidos}}</td>
                <td>@{{a.usuario}}</td>
                <td>@{{a.password}}</td>
                <td><span class="glyphicon glyphicon-edit" v-on:click="muestraCo(a.sku)"></span></td>
           
               
                </tr>
               
            </tbody>
        </table>
        

    </div>
    <div class="row animated zoomIn delay-0s col-xs-7 c" v-if="editando2==true" >

        <h3></h3>
        <br>
    
        <h5>Editando</h5>
        <p>Nombres:</p>
            <input type="text" placeholder="Usuario" class="form-control" v-model="nombres"><br>
        <p>Usuario:</p>
            <input type="text" placeholder="Nombres" class="form-control" v-model="usuario"><br>
            <input type="text" placeholder="Apellidos" class="form-control" v-model="apellidos"><br>
            <input type="text" placeholder="Modifique su password" class="form-control" v-model="password"><br>
            
          
            <button class="btn btn-success" v-on:click="actualizarA(sku)">Actualizar</button>
            <button class="btn btn-warning" v-on:click="editando2=false">Cancelar</button>
           
    
    
    </div>
</div>



	
@endsection




@push('scripts')
<script src="sweetAlert2/sweetalert2.all.min.js"></script>
<script src="js/vue-resource.js"></script>
<script src="js/contra.js"></script>



 

  
@endpush