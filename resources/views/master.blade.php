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
	<div class="container width-auto">
        <div class="card">
            <div class="card-body vh-auto">
                <div class="">
                <h1 class="text-center font-weight-bolder ">iGuestBookGin💕</h1>
                </div>
                <hr>
				<nav class="navbar navbar-expand-lg navbar-light bg-warning">
					<div class="containerr-fluids">
				
					<a href="/"><button class="btn btn-outline-warning text-white">CREATE</button></a> 
                	<a href="/read"><button class="btn btn-outline-warning text-white">READ</button></a> 
					</div>
                    <!-- Contoh menggunakan tombol -->
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button class="btn btn-warning text-white" type="submit">LOGOUT</button>
</form>

<!-- Atau contoh menggunakan link -->
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

				</nav>
                <hr>
                
                
        @yield('konten')
            </div>
        </div>
        <footer>
            <p class="text-center">&copy; <a href=#>RegginaMarshandi</a>. 2024</p>
        </footer>
        <form>
            <label for="colorPicker">Pilih Warna:</label>
            <input type="color" id="colorPicker" name="colorPicker" oninput="updateColor(this.value)">
        </form>
    
        <p id="selectedColor">Warna yang Dipilih</p>
    
        <script>
            function updateColor(color) {
                document.getElementById('selectedColor').innerText = `Warna yang Dipilih: ${color}`;
                document.body.style.backgroundColor = color;
            }
        </script>
    </div>
 
</body>
</html>