@extends('adminlte::page')

@section('title', 'Seguimientos')

@section('content_header')
    <h1>Seguimientos</h1>
@stop

@section('content')
<a href="{{route('seguimientos.pdf')}}" class="btn btn-primary mb-3" target="_blank">PDF</a>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Seguimiento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('seguimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="seguimientos" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Descripción</th>
										<th>Responsable</th>
										<th>Productos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seguimientos as $seguimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $seguimiento->Descripción }}</td>
											<td>{{ $seguimiento->Responsable }}</td>
											<td>{{ $seguimiento->Productos }}</td>

                                            <td>
                                                <form action="{{ route('seguimientos.destroy',$seguimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('seguimientos.show',$seguimiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('seguimientos.edit',$seguimiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $seguimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
