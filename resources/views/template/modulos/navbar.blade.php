<header>

@php
	function activeMenu($url)
	{
		return request()->is($url) ? 'text-background' : '';
	}
@endphp
	<nav>
	<ul class="nav nav-pills">
		
		@if (Auth::check())
{{-- 		<li><a class="{{ activeMenu('/')}}" href="{{ route('home') }}">Home</a></li>
 --}}		
		@if (Auth::user()->hasRoles('coordinador'))
			<li><a class="{{ activeMenu('coordinador')}}" href="/coordinador/create">Asignar Materias</a></li>
			<li><a class="{{ activeMenu('coordinador')}}" href="/coordinador">Válidar Usuarios</a></li>
			<li><a class="{{ activeMenu('coordinador')}}" href="/coordinador">Protocolos</a></li>
		
		@elseif(Auth::user()->hasRoles('tutor'))
		<li><a class="{{ activeMenu('tutor')}}" href="/tutor">Protocolo</a></li>
		<li><a class="{{ activeMenu('tutor')}}" href="/tutor">Sistema</a></li>
        
        @elseif(Auth::user()->hasRoles('docente'))
		<li><a class="{{ activeMenu('docente')}}" href="/docente">Docente</a></li>
		@endif
        
        <li><a href="/salir">Salir</a></li>
		@endif
        
        @if (Auth::guest())
        <li class="text-right"><a class="{{ activeMenu('login')}}" href="/login">Login</a></li>
        @endif
	</ul>
</nav>
</header>