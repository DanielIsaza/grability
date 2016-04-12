<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href=" {{ asset('plugins/bootstrap/css/bootstrap.min.css') }} "rel="stylesheet">
	<title>@yield('titulo','Defecto')</title>
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<div class="container" align="center">
      <h1>Cube summation</h1>
<div class="row" align="center">
<section>
	@yield('contenido')
</section>
</div>
</div>
<script src="{{ asset('plugins/jquery/jquery-2.2.3.js') }}"></script>
<script src="{{ asset('plugins/boorstrap/js/boostrap.min.js') }}"></script>
</body>
</html>

