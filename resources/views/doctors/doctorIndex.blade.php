@extends('layouts.theme')
@section('contenido')
<h2 class="section-heading mb-4">
	<span class="section-heading-upper">Datos</span>
</h2>
<div class="row">
	<div class="col col-md-12 col-md-offset-3">
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
                        @foreach($pacientes as $paciente)
                        <tr>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#">{{ $paciente->id }}</a>
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
@endsection