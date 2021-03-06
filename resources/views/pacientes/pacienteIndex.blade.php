@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col col-md-11 col-md-offset-3">
            <div class="panel panel-default">
                <div class="pane-body">
                    <center>
                        <a class="btn btn-primary" href="{{ route('pacientes.create') }}"> Crear Nueva Cita</a>
                    </center>
                    <br><br>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Edad</th>
                            </thead>
                            <tbody>
                                @foreach($pacientes as $paciente)
                                <tr>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->id }}</a>
                                    </td>
                                    <td>{{ $paciente->codigo }}</td>
                                    <td>{{ $paciente->nombre }}</td>
                                    <td>{{ $paciente->direccion }}</td>
                                    <td>{{ $paciente->num_tel }}</td>
                                    <td>{{ $paciente->edad }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--
@extends('layouts.app')
@section('content')
<div class="content">
    <h2 class="section-heading mb-4">
        <span class="section-heading-upper">Datos -> (falsos)</span>
    </h2>
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="pane-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  <a class="btn btn-sm btn-primary" href="#">1</a>
                                </td>
                                <td>p</td>
                                <td>p</td>
                                <td>p</td>
                                <td>p</td>
                                <td>p</td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br><br>
                    <a class="btn btn-primary" href="{{ route('pacientes.create') }}"> Crear Nueva Cita</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

--}}
