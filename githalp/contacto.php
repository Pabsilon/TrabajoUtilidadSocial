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

			<center><form name="frmContacto" method="post" action="formcont.php">
                <table width="500px">
                <tr>
                    <td><label for="first_name">Nombre: *</label></td>
                    <td><input type="text" name="first_name" maxlength="50" size="25"></td>
                </tr>
                <tr>
                    <td valign="top""><label for="last_name">Apellido: *</label></td>
                    <td><input type="text" name="last_name" maxlength="50" size="25"></td>
                </tr>
                <tr>
                    <td><label for="email">Dirección de E-mail: *</label></td>
                    <td><input type="text" name="email" maxlength="80" size="35"></td>
                </tr>
                <tr>
                    <td><label for="telephone">Número de teléfono:</label></td>
                    <td><input type="text" name="telephone" maxlength="25" size="15"></td>
                </tr>
                <tr>
                    <td><label for="comments">Comentarios: *</label></td>
                    <td><textarea name="comments" maxlength="500" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"><input type="submit" value="Enviar"></td>
                </tr>
                </table>
    		</form></center>

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