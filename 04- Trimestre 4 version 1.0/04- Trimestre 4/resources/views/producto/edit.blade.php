@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
   <form action="/productos/{{$producto->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Marca</label>
    <input id="marca" name="marca" type="text" class="form-control" value="{{$producto->marca}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$producto->precio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" name="estado" type="text" class="form-control" value="{{$producto->estado}}">
  </div>
  <a href="/productos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop