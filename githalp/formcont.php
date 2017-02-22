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

	$destino='githalpteam@gmail.com';
	$contenido="Nombre: " . $nombre .  "\Asunto:" . $asunto."\nCorreo: " . $correo . "\nMensaje: " . $mensaje;


	if ($valido){
		mail($destino, $asunto, $contenido);
		header('Location: index.php');
		alert("Mensaje enviado");
	}
	else{
		//header('Location: contacto.php');
		$echo = <<<EOF
		<script>alert("$Enombre");</script>
EOF;
		echo $echo;
	}


}



function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>						
