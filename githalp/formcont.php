<?php 
    $destino='GitHalp@gmail.com';
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['asunto'];
    $mensaje=$_POST['mensaje'];
    $contenido="Nombre: " . $nombre .  "\Asunto:" . $telefono."\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    mail($destino, $asunto, $contenido);
    header("Location: index.php");
?>						
