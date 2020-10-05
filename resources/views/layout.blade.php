<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<nav>
		<ul>
			<?php 
				 echo "<li><a href=".route('home').">Home</a></li>";
				 echo "<li><a href=".route('RIniciarSesion').">Login</a></li>";
				 echo "<li><a href=".route('Registro').">Registro</a></li>";
			?>
		</ul>
	</nav>
	@yield('Cuerpo')
</body>
</html>