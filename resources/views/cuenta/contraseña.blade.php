@extends('layouts.master')
@section('titulo','Administrar Chofer')
@section('contenido')
<h1>Cambiar Contraseña:</h1>
<br><br>

<h3>Bienvenido: {{Session::get('usuario')}}</h3><br>
<div id="contraseña">

    
    <h5>Escriba la contraseña actual</h5>
    <div class="col-xs-4">
        <form action="{{url('apicontra')}}" method="get">
        
            @csrf
            <input type="text" placeholder="Contraseña Actual" class="form-control" name="contraseña" ><br>
            <input type="submit" value="Cambiar Contraseña" class="btn btn-danger">
        </form>
    </div>
</div>




	
@endsection




@push('scripts')

<script src="js/vue-resource.js"></script>
<script src="js/contra.js"></script>
<script src="sweetAlert2/sweetalert2.all.min.js"></script>

 

  
@endpush