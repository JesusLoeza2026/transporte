@extends('layouts.master')
@section('titulo','Administrar Chofer')
@section('contenido')
<div id="admi">
  <h2>Administrativo</h2><br><br><br>
  <div class="col-xs-8">
      
  </div>
  <table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dias de trabajo</th>
        <th>Sueldo</th>
        <th>Prestamo</th>
        <th>Calcular</th>
      </tr>
      </thead>
      <tbody>
        <tr v-for="(s,index) in chofer">
        <td scope="row">@{{s.nombre}}</td>
        <td>@{{s.apellido}}</td>
        <td><input type="number" placeholder="Dias" class="form-control" v-model.dias="dias[index]"></td>
        <td><input type="number" placeholder="Sueldo" class="form-control" v-model.sueldo="sueldo[index]"></td>
        <td><input type="number" placeholder="Prestamo" class="form-control" v-model.prestamo="prestamo[index]"></td>
        <td><button class="btn btn-danger" @click="addprod(index)">Total</button></td>

       
        </tr>
      </tbody>
  </table>
  
  
 
  

</div>

	
@endsection




@push('scripts')

<script src="js/vue-resource.js"></script>
<script src="js/ad.js"></script>
<script src="sweetAlert2/sweetalert2.all.min.js"></script>

 

  
@endpush