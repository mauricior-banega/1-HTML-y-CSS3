<?php

session_start()

/* 

INFO SOBRE DIGITOS

[] Este simbolo se hace ALT IZQ + (la tecla al aldo de P, que tiene una comilla y dos puntitos).

'' Este simbolo se unicamente tocando la tecla que esta por arriba de P (la coma y el signo de pregunta).


$_SESSION ['usuario'] = "banega";

$_SESSION ['contraseña'] = "banega";

*/

if(isset($_SESSION['usuario'])) 

{

	echo'

	<html>
		<head>
			<meta http-equiv="REFRESH" content="0; url=principal.php>
		<head>
	</html>

		';
}

else 

{	echo'

	<html>
		<head>
			<meta http-equiv="REFRESH" content="0; url=formulariologin.php>
		<head>
	</html>

		';
}

?>