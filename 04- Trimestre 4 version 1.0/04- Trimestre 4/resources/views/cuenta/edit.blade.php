@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Cuenta</h1>
@stop

@section('content')
   <form action="/cuentas/{{ $cuenta->id }}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{ $cuenta->nombre }}">    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input id="email" name="email" type="email" class="form-control" value="{{ $cuenta->email }}">    
  </div>
  <div class="mb-3">
    <label for="permiso" class="form-label">permiso</label>
    <input id="permiso" name="permiso" type="number" class="form-control" value="{{ $cuenta->permiso }}">
  </div>
  <a href="/cuentas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop