@extends('layouts.theme')
@section('contenido')
<h2 class="section-heading mb-4">
	<span class="section-heading-upper">Datos -> (falsos)</span>
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
                    	<tr>
                    		<td>1</td>
                            <td>216790559</td>
                            <td>Leonardo sebastian ramirez esqueda</td>
                            <td>16 de septiembre</td>
                            <td>3311050221</td>
                            <td>21</td>
                        </tr>
                        <tr>
                        	<td>2</td>
                            <td>123456789</td>
                            <td>diego ramirez esqueda</td>
                            <td>av. paraiso</td>
                            <td>3374128569</td>
                            <td>19</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection