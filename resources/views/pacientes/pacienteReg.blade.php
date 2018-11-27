@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="pane-body">
                    @if(isset($paciente))
                    {!! Form::model($paciente, ['route' => ['paciente.update', $paciente->id], 'method' => 'PATCH']) !!}
                    @else
                    {!! Form::open(['route' => 'pacientes.store']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('codigo', 'Codigo') !!}
                        {!! Form::text('codigo', null, ['class' => 'form-control']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('direccion', 'Direccion') !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('num_tel', 'Telefono') !!}
                        {!! Form::text('num_tel', null, ['class' => 'form-control']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('edad', 'Edad') !!}
                        {!! Form::text('edad', null, ['class' => 'form-control']); !!}
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit">Aceptar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection