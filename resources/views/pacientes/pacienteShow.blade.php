@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col col-md-11 col-md-offset-3">
            <div class="panel panel-default">
                <div class="title">
                    <h1>DETALLES</h1>
                </div>
                <div class="pane-body">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>CODIGO</th>
                                <th>NOMBRE</th>
                                <th>DIRECCION</th>
                                <th>TELEFONO</th>
                                <th>EDAD</th>
                            </thead>
                            <tbody>
                                <td>{{ $paciente->id }}</td>
                                <td>{{ $paciente->codigo }}</td>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                <td>{{ $paciente->num_tel }}</td>
                                <td>{{ $paciente->edad }}</td>
                            </tbody>
                        </table>
                        <hr>
                        <a class="btn btn-warning" href="{{-- route('pacientes.edit', $paciente->id) --}}">Editar</a>
                        
                        <hr>
                        <form {{--action="{{ route('paciente.destroy', $paciente->id) }}"--}} method="POST">
                            {{-- {{ csrf_field() }}--}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection