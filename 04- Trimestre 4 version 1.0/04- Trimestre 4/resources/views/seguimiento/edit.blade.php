@extends('adminlte::page')

@section('title', 'Seguimientos')

@section('template_title')
    {{ __('Update') }} Seguimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('Errores')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Seguimiento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('seguimientos.update', $seguimiento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('seguimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
