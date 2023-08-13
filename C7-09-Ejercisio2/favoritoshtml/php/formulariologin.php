<!-- HTML y CSS3 - (Video 16): Capitulo 7 - C07_09_01_01 Crearemos una pagina de "Favoritos" de paginas web.

(1) El archivo formatologin.php en el video no muestra como lo realiza, por lo que intentaremos recrearlo con lo poco que se ve. Lo que si se ve es como copia todo el contenido de index.html para anexarlo al codigo que habia creado.

-->




<!DOCTYPE html>
<html>

	<head>
		<!--<meta http-equiv="refresh" content="5"> -->
		<!-- (3) Paso importante, ver arriba 
		<style type="text/css"> -->

		<link rel=stylesheet href="estilo/estilo.css" type="text/css"/>

		<!-- Ahora cortamos lo que correspon  de al estilo y pegamos en estilo.css creado. Aclarado en punto (3). -->


		</style>
			
	</head>

	<body>
		<div id="contenedor">

			<header>

				<section id="logotipo">

						<div id="logo"> <!-- width="210mm"
								   height="297mm"
								   viewBox="0 0 210 297" --->
							<svg   
								   width="210"
								   height="297"
								   
								   version="1.1"
								   id="svg7458"
								   xmlns="http://www.w3.org/2000/svg"
								   xmlns:svg="http://www.w3.org/2000/svg">
								  <defs
								     id="defs7455" />
								  <g
								     id="layer1">
								    <path
								       style="opacity:0.721154;fill:#ffcc00;fill-opacity:1;stroke:#000000;stroke-width:38.7666;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke fill markers"
								       id="path7541"
								       d="m 350.91357,328.80913 -101.56368,-33.15807 -88.94006,59.19716 0.15029,-106.8392 -83.783828,-66.2941 101.656568,-32.8722 37.15881,-100.169159 62.67691,86.523069 106.74924,4.38616 -62.9201,86.34639 z"
								       transform="matrix(0.27277601,0,0,0.2714643,44.034717,66.271775)" />
								  </g>
							</svg>

						</div>

						<div id="tipo">
							<h1>misFavoritos</h1> <!--Aqui estan los titulos -->
						</div>

				
				</section>
				

				<section id="login"> 

					<form action="login.php" method="post"> <!--Creamos un form donde contendra los input (cargamos usuario/contraseña/boton enviar). -->

						<input type="text" name="usuario" value="usuario"  size=20>
						<input type="text" name="contrasena" value="contraseña"  size=20>
						<input type="submit">

					</form>

					<div id="registrate"><a href="formularioaltausuario.php">Pulsa AQUI para registrarte en la Web</a></div>	
				</section>

			</header>

			<section id="contenido">

				<section id="presentacion">

					<!--Metemos los textos/subtitulos en divs para despues animarlos individualmente.-->

					<div id="animaciontexto1"><h2>Cansad@ de perder tus favoritos?</h2></div>

			
					<div id="animaciontexto2"><h2>Te gustaria no volver a perderlos</h2></div>

				</section>

				<section id="etiquetas">


					<table border=1> 

						<tr>
							<th>Titulo<span id="estrellas"> Valoracion </span>
						</tr>

						<tr>
							<td>Enlace
							</td>
						</tr>

						<tr>
							<td>Categoria
							</td>
						</tr>

						<tr>
							<td>Comentario
							</td>
						</tr>

					</table>


					<table border=1> 

						<tr>
							<th>Titulo<span id="estrellas"> Valoracion </span>
						</tr>

						<tr>
							<td>Enlace
							</td>
						</tr>

						<tr>
							<td>Categoria
							</td>
						</tr>

						<tr>
							<td>Comentario
							</td>
						</tr>

					</table>


					<table border=1> 

						<tr>
							<th>Titulo<span id="estrellas"> Valoracion </span>
						</tr>

						<tr>
							<td>Enlace
							</td>
						</tr>

						<tr>
							<td>Categoria
							</td>
						</tr>

						<tr>
							<td>Comentario
							</td>
						</tr>

					</table>



					<table border=1> 

						<tr>
							<th>Titulo<span id="estrellas"> Valoracion </span>
						</tr>

						<tr>
							<td>Enlace
							</td>
						</tr>

						<tr>
							<td>Categoria
							</td>
						</tr>

						<tr>
							<td>Comentario
							</td>
						</tr>

					</table>


					<table border=1> 

						<tr>
							<th>Titulo<span id="estrellas"> Valoracion </span>
						</tr>

						<tr>
							<td>Enlace
							</td>
						</tr>

						<tr>
							<td>Categoria
							</td>
						</tr>

						<tr>
							<td>Comentario
							</td>
						</tr>

					</table>



					<table border=1> 

						<tr>
							<th>Titulo<span id="estrellas"> Valoracion </span>
						</tr>

						<tr>
							<td>Enlace
							</td>
						</tr>

						<tr>
							<td>Categoria
							</td>
						</tr>

						<tr>
							<td>Comentario
							</td>
						</tr>

					</table>


				</section>




			</section>

			<!--Cuando compilamos la pagina vemos que la seccion del footer esta pintada en color "amarillo crema". pero no solo pinta el footer sino que se extiende hasta arriba, hasta la caja/contenido, el texto extiende ese color. Por ello vamos a crear un guion "-" antes del footer, dentro de un section al que podemos de id "trampa" para que mediante ese truco no pinte todo hasta arriba sino el pedasito que solamente corresponde correctamente al footer ((c) Copyright Banega Mauricio 2022). Le asignamos un id para poder luego maquetarlo y darle la propiedad de hacerlo invisible mediante la propiedad opacity y que el "-" no quede mal estiticamente.-->

			<section id="trampa"> 
				__
		    </section>

			<footer>
				(c) Copyright Banega Mauricio 2022
			</footer>


		</div>	

	</body>

</html>




<!-- ARRIBA DE ESTO: EL CODIGO DE INDEX.HTML COPIADO EXACTAMENTE COMO INDICA EN EL VIDEO.

	ABAJO DE ESTO: EL CODIGO QUE ESTA SOLO UN TROZO EN EL VIDEO, QUE INTENTARE RECREAR D FORMULARIOLOGIN.PHP.

#######################################################################################
	-->


<html>
	
<body>
	<table border=1 width=100%>
	<tr>
	<td>

	<form action="login.php" method="post">
		<input type="text" name="usuario" value="introduce aqui tu nombre">
	</td>
	</tr>

	<tr>
	<td>
		<input type="text" name="contrasena" value="introduce aqui tu contraseña">
	</td>
	</tr>

	<tr>
	<td>
		<input type="submit">
	</td>
	</tr>

	</form>
	</table>

	No eres usuario todavia? Pues pulsa <a href="formularioaltausuario.php">Aqui</a>.


</body>
</html>

<?php

	echo "Algunos links que te puedan interesar.";

	$conexion = sqlite_open('favoritos.db');

	$consulta = "SELECT * FROM favoritos ORDER BY RANDOM() LIMIT 3";

	$RESULTADO = sqlite_query($conexion,$consulta);


	echo "

	<table border=1 width=200%>
	<tr>
	<td>Titulo</td>
	<td>Direccion</td>
	<td>Categoria</td>
	<td>Comentario</td>
	<td>Valoracion</td>
	</tr>

	";

	while ($fila = sqlite_fetch_array($resultado)){
	echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td></tr>";
	}

	?>