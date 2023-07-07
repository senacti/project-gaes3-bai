@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Listado de usuarios</h1>
@stop

@section('content')
    <a href="{{ route('cuentas.pdf') }}" class="btn btn-primary mb-3" target="_blank">PDF</a>
    <a href="{{ route('cuentas.create') }}" class="btn btn-primary mb-3">CREAR</a>

    <table id="cuentas" class="table table-striped table-bordered shadow-lg mt-4">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Permiso</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cuentas as $cuenta)
            <tr>
                <td>{{ $cuenta->id }}</td>
                <td>{{ $cuenta->nombre }}</td>
                <td>{{ $cuenta->email }}</td>
                <td>{{ $cuenta->permiso }}</td>
                <td>
                    <form action="{{ route('cuentas.destroy', $cuenta->id) }}" method="POST">
                        <a href="/cuentas/{{ $cuenta->id }}/edit" class="btn btn-info">Editar</a>
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
            $('#cuentas').DataTable({
                "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]
            });
        });
    </script>
@stop
