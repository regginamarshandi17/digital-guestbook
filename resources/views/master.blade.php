<!DOCTYPE html>
<html>
<head>
	<title>DIGITAL GUEST BOOK</title>
</head>
<body>
 
	<header>
 
		<h2>MY GUESTBOOK</h2>
		<nav>
			<a href="/create">HOME</a>
			|
			<a href="/read">READ</a>
			|
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p >&copy;<a href=#></a>RegginaMarshandi</p>
	</footer>
 
</body>
</html>