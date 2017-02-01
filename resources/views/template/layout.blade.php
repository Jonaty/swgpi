<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')</title>
	<link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>
<body>

<div class="container">

<div class="panel panel-primary">

		<div class="panel-body">
			Universidad de Colima
		</div>
	</div>

	
	@include('template.modulos.navbar')
	
	@yield('contenido')
</div>
	
</body>
</html>