<!DOCTYPE html>
<html lang="es-VE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{-- title page --}}
	<title>@yield('title__page')</title>
	{{-- link basic --}}
	<link rel="stylesheet" href="{{ asset("css/styles.css") }}">
	{{-- add links and scripts --}}
	@yield('links_scripts_add')
</head>
<body>
	{{-- nagigator --}}
	@yield('nav')
	{{-- hero header --}}
	@yield('hero')
	{{-- main content --}}
	@yield('main__content')
	{{-- footer --}}
	@yield('footer')
	{{-- add scripts --}}
	@yield('add__scripts')
</body>
</html>