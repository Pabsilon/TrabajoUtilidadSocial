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
<!-------------------------------------------------------->

<?php

$valido = true;
$nombre = $asunto = $correo = $mensaje = "";
$Enombre = $Ecorreo = $Emensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nombre"])){
		$Enombre = "Nombre requerido";
		$valido = false;
	}
	else {
		$nombre = test_input($_POST["nombre"]);
	}

	if (empty($_POST["correo"])){
		$Ecorreo = "Correo requerido";
		$valido = false;
	}
	else{
		$correo = test_input($_POST["correo"]);
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
  			$Ecorreo = "Formato de la dirección de correo no válido";
  			$valido = false;
  		}
	}
	
	$asunto = test_input($_POST["asunto"]);
	
	if (empty($_POST["mensaje"])) {
		$Emensaje = "Mensaje vacío";
	}
	else{
		$mensaje = test_input($_POST["mensaje"]);
	}

	$destino="githalpteam@gmail.com";
	$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\n\nMensaje: " . $mensaje;



	if ($valido){
		try{
			mail($destino, $asunto, $contenido);
			//copia del envío
			$cabecera = "De: $destino\n" . "Cc: $correo\n\n";
			$asunto = "Copia de: " . $asunto;
			mail($correo, $asunto, $contenido, $cabecera);
			echo <<<EOF
			<script>alert("Mensaje enviado");</script>
EOF;
		}
		catch(Exception $e){
			echo <<<EOF
			<script>alert("El envío ha fallado");</script>
EOF;
		}
	}
	else{
		if (!empty($Enombre)){
			echo <<<EOF
			<script>alert("$Enombre");</script>
EOF;
		}
		if (!empty($Ecorreo)){
			echo <<<EOF
			<script>alert("$Ecorreo");</script>
EOF;
		}
		if (!empty($Emensaje)){
			echo <<<EOF
			<script>alert("$Emensaje");</script>
EOF;
		}
	}


}



function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>						


<!-------------------------------------------------------->
	<?php
		require_once 'header.php';
	?>

	<div id="contenedor">
		<h1>Contáctanos</h1>
		<p>Si ves que hay algo en la web que no te termina de encajar o simplemente quieres saludarnos, no dudes en mandarnos un correo con el formulario que hay a continuación. Un saludo de parte del equipo de GitHalp.</p>

		<div id="formulario">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<label for="nombre">Nombre*:</label>
				<input type="text" name="nombre" id="nombre" required/>
				<label for="asunto">Asunto:</label>
				<input type="text" name="asunto" id="asunto"/>
				<label for="correo">Correo*:</label>
				<input type="text" name="correo" id="correo" required/>
				<label for="mensaje">Mensaje*:</label>
				<textarea name="mensaje" id="mensaje" placeholder="Escribe el mensaje" rows="5" required></textarea>

				<div id="boton"><input type="submit" value="Enviar"/></div>
			</form>
		</div>
	</div>

	<?php
		require_once 'footer.php';
	?>

</div>
</body>
</html>
