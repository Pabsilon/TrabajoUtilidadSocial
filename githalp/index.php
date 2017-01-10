<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="logo.png" />
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

	<title>GitHalp</title>
	
</head>
<body>
	<div id="header">
		<div id=titulo>
			<img id="logo" src="logo.png"/>GitHalp
		</div>
		<nav>
			<a href="index.html" class="navElem">
				<img src="inicio.png" class="navIcon"/>Inicio
			</a>

			<div class="navElem">
			<img src="teoria.png" class="navIcon"/>Teoría
			</div>

			<div class="navElem">
			<img src="videos.png" class="navIcon"/>Vídeos
			</div>

			<a href="https://github.com/Pabsilon/TrabajoUtilidadSocial" class="navElem">
				<img src="github.png" class="navIcon"/>GitHub
			</a>
		</nav>
	</div>




	<div id="contenedor">
		<div id="centro">
			<h1>Introducción</h1>
			<p><?php
					require_once 'contenido/introduccion.txt';
				?></p>
		</div>
	</div>



	<div id="footer">
		<p>texto pal footer</p>
	</div>

</div>
</body>
</html>