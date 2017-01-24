<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="logo.png" />
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<link rel="stylesheet" type="text/css" href="estiloDropdown.css" />
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

	<title>GitHalp</title>
	
</head>
<body>
	<?php
		require_once 'header.php';
	?>

	<div id="contenedor">
		<div id="centro">
			<h1>Contactanos</h1>
			<p>
				Si ves que hay algo en la web que no te termina de encajar o simplemente quieres saludarnos, 
				no dudes en mandarnos un correo con el formulario que hay a continuacion. Un saludo de parte del 
				equipo de GitHalp.

			<center>
				<form action="formcont.php" method="post">
					<input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
					<input type="text" name="asunto" id="asunto" placeholder="Asunto">
					<input type="text" name="correo" id="correo" placeholder="Correo" required>
					<textarea name="mensaje" id="mensaje" placeholder="Escribe el mensaje..." required></textarea>

					<input type="submit" value="ENVIAR" id="boton">
				</form>
				<style>
					input, textarea{
						width: 50%;
					}
				</style>
			</center>

				<?php 
					require 'formcont.php';
				?>
			</p>
		</div>
	</div>

	<?php
		require_once 'footer.php';
	?>

</div>
</body>
</html>
