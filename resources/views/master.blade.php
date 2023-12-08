<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


	<title>DIGITAL GUEST BOOK</title>

	<!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>
<body>
	<div class="container">
        <div class="card">
            <div class="card-body vh-100">
                <div class="">
                <h1 class="text-center font-weight-bolder ">selamat datang</h1>
                </div>
                <hr>
				<nav class="navbar navbar-expand-lg navbar-light bg-warning">
					<div class="containerr-fluids">
				
					<a href="/create"><button class="btn btn-warning">CREATE</button></a> 
                	<a href="/read"><button class="btn btn-warning">READ</button></a> 
					</div>
				</nav>
                <hr>
                
        @yield('konten')
            </div>
        </div>
        <footer>
            <p class="text-center">&copy; <a href=#>RegginaMarshandi</a>. 2024</p>
        </footer>
    </div>
 
</body>
</html>