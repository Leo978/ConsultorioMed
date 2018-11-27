<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Medico</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {!! Html::style('css/app.css') !!}
</head>
<body>
	<!-- Navegacion -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<a class="navbar-brand" href="#">Consultorio Medico</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Capturar Paciente
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Mostrar</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Salir</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main>
        @yield('content')
    </main>
</body>
</html>