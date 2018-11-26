@extends('app')

@section('content')
<div class="container">
    
    @if (Session::has('deleted'))
      <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
    @endif
    
    @if (Session::has('restored'))
      <div class="alert alert-success" role="alert"> Contacto restaurado</div>
    @endif
    
    <div class="row">
                <a href="{{ route('paciente') }}" class="btn btn-xs btn-primary">Volver</a>
        <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Direccion</th>  
                  <th>Telefono</th> 
                  <th>Edad</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr>
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
@endsection