@extends('layouts.master')
@section('titulo','Inicio')
@section('contenido')
<h1>Bienvenido Su Codigo es: <span>{{Session::get('sku')}}</span></h1>



	
@endsection