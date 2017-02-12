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
			<h1>Guía de la web de GitHub</h1>
			<p><?php
					require_once 'contenido/guiaWeb.html';
				?></p>
		</div>
	</div>



	<?php
		require_once 'footer.php';
	?>

</div>
</body>
</html>