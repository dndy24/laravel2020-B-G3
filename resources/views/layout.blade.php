<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<div style="margin: 15px; float: right;">
	    <a href="/regus"> Regu Pendakian </a> ||
	    <a href="/jalurs"> Jalur Pendakian </a> ||
	    <a href="/perlengkapans"> Perlengkapan Regu </a>
	</div>
	<title>CRUD PENDAKI</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

	<script src="{{ asset('js/jquery.win.js') }}" type="text/javascript"></script>
</head>
<body>

<div class="controller">
	<p><br/></p>
	@yield('content')
</div>

</body>
</html>