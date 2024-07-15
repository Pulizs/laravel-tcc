
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Pedro Cruz">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
	<meta name="generator" content="ifpr 1.0">
	<link rel="icon" href="{!! url('assets/images/logo mc.png') !!}">
	<title>Super WEB APP</title>
 
	<link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
   
	<style>
  	.bd-placeholder-img {
    	font-size: 1.125rem;
    	text-anchor: middle;
    	-webkit-user-select: none;
    	-moz-user-select: none;
    	user-select: none;
  	}
 
  	@media (min-width: 768px) {
    	.bd-placeholder-img-lg {
      	font-size: 3.5rem;
    	}
  	}
	</style>
 
   
	<!-- Custom styles for this template -->
	<link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">

	@auth
	   @include('layouts.partials.navbarlogged')
	@endauth
   
	@guest
	   @include('layouts.partials.navbar')
   	@endguest
   
	<main class="form-signin">
	
   	
    	@yield('content')
       
	</main>
   
 
</body>
<footer>
	@include('layouts.partials.footer')
</footer>
</html>
