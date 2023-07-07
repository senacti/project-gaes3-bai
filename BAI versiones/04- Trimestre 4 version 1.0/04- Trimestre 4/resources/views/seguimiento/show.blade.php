@extends('adminlte::page')

@section('title', 'Seguimientos')

@section('template_title')
    {{ $seguimiento->name ?? "{{ __('Informacion') Seguimiento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Seguimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('seguimientos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $seguimiento->Descripción }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            {{ $seguimiento->Responsable }}
                        </div>
                        <div class="form-group">
                            <strong>Productos:</strong>
                            {{ $seguimiento->Productos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
