@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Cuenta</h1>
@stop

@section('content')
    
<form action="/cuentas" method="POST">
  @csrf
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input id="email" name="email" type="email" class="form-control" tabindex="2">    
  </div>
  <div class="mb-3">
    <label for="permiso" class="form-label">permiso</label>
    <input id="permiso" name="permiso" type="number" class="form-control" tabindex="4">
  </div>
  <a href="/cuentas" class="btn btn-secondary" tabindex="6">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop