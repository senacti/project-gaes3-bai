@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Listado de productos</h1>
@stop

@section('content')
    <a href="{{route('productos.pdf')}}" class="btn btn-primary mb-3" target="_blank">PDF</a>
   <a href="productos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="productos" class="table table-striped table-bordered shadow-lg mt-4" >
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Precio</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->marca}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->estado}}</td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                <a href="/productos/{{ $producto->id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#productos').DataTable({
        "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]
    });
});
</script>

@stop