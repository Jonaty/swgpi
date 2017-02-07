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
			<h1 class="text-center">Universidad de Colima</h1>
		</div>
	</div>

		
	@yield('contenido')

	@include('template.modulos.navbar')

</div>
	
</body>
</html>