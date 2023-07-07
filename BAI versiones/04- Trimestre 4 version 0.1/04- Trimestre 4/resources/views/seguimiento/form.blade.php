<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('Descripción', $seguimiento->Descripción, ['class' => 'form-control' . ($errors->has('Descripción') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('Descripción', '<div class="invalid-feedback">invalido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('Responsable', $seguimiento->Responsable, ['class' => 'form-control' . ($errors->has('Responsable') ? ' is-invalid' : ''), 'placeholder' => 'Responsable']) }}
            {!! $errors->first('Responsable', '<div class="invalid-feedback">invalido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Productos') }}
            {{ Form::text('Productos', $seguimiento->Productos, ['class' => 'form-control' . ($errors->has('Productos') ? ' is-invalid' : ''), 'placeholder' => 'Productos']) }}
            {!! $errors->first('Productos', '<div class="invalid-feedback">invalido</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>