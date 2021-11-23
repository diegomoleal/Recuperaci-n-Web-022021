<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $carro->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('H_entrada') }}
            {{ Form::text('H_entrada', $carro->H_entrada, ['class' => 'form-control' . ($errors->has('H_entrada') ? ' is-invalid' : ''), 'placeholder' => 'H Entrada']) }}
            {!! $errors->first('H_entrada', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salida') }}
            {{ Form::text('salida', $carro->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida']) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>