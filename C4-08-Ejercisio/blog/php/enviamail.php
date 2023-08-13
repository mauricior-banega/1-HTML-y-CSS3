
<!DOCTYPE html> <!-- "!"+TAB (1)-->

<html>
	
	<head manifest="/manifiesto/manifiesto.cache">
			<!-- A estas lineas del autocompletado, las comento porque no las voy a usar. La que si voy a usar es <meta http-equiv="refresh" content="1" / entre otras que no dejare comentadas>	
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title> -->

			<title>WebLog de Mauricio Ruben Banega</title> <!--Añade el titulo en la pestaña -->

			<meta name="description" content="WebLog de Mauricio Ruben Banega"/> <!--Añade una descripcion a la pagina -->

			<meta name="keywords" content="weblog, blog, Mauricio Ruben Banega, diseño, multimedia" /> <!--Añade las palabras claves/contenido que contiene la pagina web para agilizar la busqueda. -->

			<!-- <meta http-equiv="refresh" content="5" /> (2) Refresco de pagina --> 

			<link rel=stylesheet href="../css/estilo.css" type="text/css" />


	</head>

	<body>


		<div id="cajaheader"> <!-- Crearemos varios div que nos serviran para maquetar/dibujar. Con este div unicamente crearemos una caja horizontal que contendra el contenido del header.-->
		</div>

		<div id="principal" itemspscope itemtype="http://data-vocabulary.org/Person"> <!-- Crearemos este otro div el cual contendra todo el contenido de la pagina. Lo vamos a cerrar por debajo del footer y arriba de body. Para organizarme mejor correre como explica en el video, todo el codigo que esta a la altura de este div un espacio a la derecha entionces se selecciona todo el codigo contenido y se aprieta tabulador para correrlo. Para deshacer CTL+Z.

		(4)(4.1) Ademas tenemos dentro del div un itempscope lo explicado en el info donde podre asignar los metadatos de persona (name/nickname/title/photo/role, etc.). Esto lo sentenciamos dentro de la etiqueta span y dentro el itemprop del tipo que sea. Esto si bien no modifica graficamente nada, sirve para indezar mejor la pagina web y mejorar la busqueda de la misma en los motores de busqueda. -->


			<header> <!--Cabecera de la pagina -->

				<div id="logo"> <!--Copiamos el codigo del logo vectorial svg  (descargado en carpeta/img). Usaremos este id para darle estilo tmb desde estilo.css-->

					 <!--Aclaracion: Cambio el tamaño del logo descargado y dejo registro de los valores antes de cambiarlos por si queda mal, los valores de svg por defecto son: width="24" height="24" viewBox="0 0 24 24-->
					<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z"/></svg>
				</div>

				<div id="tipo">
				<h1><span itemprop="name">Mauricio Ruben Banega</span></h1> <!--(4.1:NAME)-->

				<h2><span itemprop="title">Creativo Multimedia</span></h2> <!--(4.1:TITLE)-->
				</div>

				<nav>
					<ul> <!--Enlaces de la pagina web. En donde a cada enlace haremos archivos como este de index pero para noticias.html/sobremi.html, etc que guardaremos en la carpeta blog. -->

						<!--(8) Creamos la etiqueta "canvas" para dibujar el lienzo de cada icono. Comenzaremos dandole un style desde aca pero luego crearemos un estilo visual que controlaremos tambien desde CSS en estilo.css, añadimos tambien un retorno de carro br entre el canvas y el texto.-->

						<li><a href="index.html"><canvas id="iconoinicio" width="50" height="50"></canvas><br/>Inicio</a></li>

						<li><a href="noticias.html"><canvas id="icononoticias" width="50" height="50"></canvas><br/>Noticias</a></li>

						<li><a href="sobremi.html"><canvas id="iconosobremi" width="50" height="50"></canvas><br/>Sobre mi</a></li> <!--(8)-->

						<li><a href="contacto.html"><canvas id="iconocontacto" width="50" height="50"></canvas><br/>Contacto</a></li>
					</ul>
				</nav>

			</header>

			<div id="contenido"> <!-- (10) Aqui maquetaremos el contenido desde "estilo.css". Este div no fue creado apenas comenzo el proyecto. Contendra hasta antes de comenzado el footer. -->


				
				<?php

				//Recibo las variables del formulario

				$nombre = $_POST['nombre'];
				$mail = $_POST['email'];
				$mensaje = $_POST['mensaje'];


				//Te muestro las variables

				echo "<h3>El mensaje que has enviado es:</h3>";
				echo "<br />";
				echo "Nombre: ";
				echo $nombre;
				echo "<br />";
				echo "Email: ";
				echo $mail;
				echo "<br />";
				echo "Mensaje: ";
				echo $mensaje;
				echo "</p>";

				//Envio un email

				$aquien = "mauricior.banega@gmail.com";
				$asunto = "Haz recibido un correo del Blog";
				$mensajemail = $nombre."con el email".$mail."te ha enviado un mensaje que dice:".$mensaje;

				if (mail($aquien,$asunto,$mensaje)){echo "Tu email se ha enviado correctamente";} else{ "El envio del mail ha fallado";}


				?>


			</div> <!-- Cierra div contenido. -->

			<footer> <!--En footer (pie de pagina) podremos el Coryright de la pagina, pero podemos poner el Aviso Legal/Privacidad o cualquier informacion importante que deba contener la web y que deba ponerse por debajo. Comentare como quedaria: <h6> (c) 2022 - WebLog Mauricio Ruben Banega </h6>; pero ahora haremos una VCARD o carta de presentacion dentro de footer/h6, que quedara de la siguiente manera. --> 

				<h6> 

					<div class="vcard">  <!--(5) - Vemos que esta vez al span le sigue class="" y no itemprop. Esto es porque no estamos enumerando metadatos sino mas bien clases que especifican al navegador, si nuestro nombre pero tambien pais/provincia/cod-postal/telefono/mail, etc. -->

						<div><span class="name">Mauricio Ruben Banega</span>-<span class="locality">Córdoba Capital</span><span class="region">Córdoba</span>-<span class="postal-code">5000</span>-<span class="country-name">Argentina</span></div>
						<div><span class="tel">+54 9 351-555-6666</span> - <span class="email">mauriciorbanega.ejemplo@gmail.com</span></div>


					</div>

				</h6> 

					<!--(6) Contador Java & HTML5 usando el localStorage -->
					<script type="text/Javascript"> 

						if (localStorage.pagecount){localStorage.pagecount = Number(localStorage.pagecount)+1;} 
						else{localStorage.pagecount = 1;}

							document.write("Has visitado mi página " +localStorage.pagecount+ " veces.");

					</script>

					<!--(7) Contador Java & HTML5 usando el sessionStorage -->

					<script type="text/Javascript"> 

						if (sessionStorage.pagecount){sessionStorage.pagecount = Number (sessionStorage.pagecount)+1;}
						else{sessionStorage.pagecount = 1;}

							document.write("En esta sesion has visitado mi pagina "+sessionStorage.pagecount+" veces");

					</script>

			</footer>


		</div> <!--Div que cierra y contiene todo lo de id principal -->


	</body>



</html>



<!--(8) - CANVAS:ICONO "SOBRE MI": El 1º: es un circulo, el 2º: medio circulo que dibuja el icono.-->


<script type="text/javascript">

	var micolor="Black"; /*-Variable de color en comun para todo el dibujo*/
	var miotrocolor="Grey";
	var mitercercolor="White";

	var escala=0.5; /*-Variable de escala en comun para todo el dibujo, multiplicando valores de x,y,radio*/
	
	var c=document.getElementById("iconosobremi"); /*-Establecemos una variable donde elegimos un elementById sobre el documento "sobremi", coincidiendo con el id creado en el canvas arriba.*/
	var cxt=c.getContext("2d"); /*-Decimos que contexto tendra, en este caso 2d*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar (Black), o mejor creamos una variable que compartiran ambos dibujos dentro del script donde asignaremos un color en comun.*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50,escala*25,escala*20,0,Math.PI*2,true); /*-Dibujamos el circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionado en micolor*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50,escala*90,escala*40,Math.PI,Math.PI*2,false); /*-Dibujamos medio circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionadoen micolor*/


 /* - CANVAS:ICONO "CONTACTO": El 3º y 4º es identico al bloque (1º y 2º) pero corrido -10 grados en "x". Y el 5º y 6º es identico al par (1º y 2º o 3º y 4º) pero corrido +10 grados en "y"--> */


	var c=document.getElementById("iconocontacto"); /*-Establecemos una variable donde elegimos un elementById sobre el documento "contacto", coincidiendo con el id creado en el canvas arriba.*/
	var cxt=c.getContext("2d"); /*-Decimos que contexto tendra, en este caso 2d*/

	cxt.fillStyle=(miotrocolor); /*-Elegimos de que color dibujar (Gris), o mejor creamos una variable que compartiran ambos dibujos dentro del script donde asignaremos un color en comun.*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50-10,escala*25,escala*20,0,Math.PI*2,true); /*-Dibujamos el circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionadoen mi otro color*/

	cxt.fillStyle=(miotrocolor); /*-Elegimos de que color dibujar*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50-10,escala*90,escala*40,Math.PI,Math.PI*2,false); /*-Dibujamos medio circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionado en mi otro color*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar (Black), o mejor creamos una variable que compartiran ambos dibujos dentro del script donde asignaremos un color en comun.*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50+10,escala*25,escala*20,0,Math.PI*2,true); /*-Dibujamos el circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionadoen micolor*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50+10,escala*90,escala*40,Math.PI,Math.PI*2,false); /*-Dibujamos medio circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionado en micolor*/


	/* - CANVAS:ICONO "INICIO": Creamos 3 circulos donde variaremos su radio para hacerlos de tamaños distintos. */

	var c=document.getElementById("iconoinicio"); /*-Establecemos una variable donde elegimos un elementById sobre el documento "sobremi", coincidiendo con el id creado en el canvas arriba.*/
	var cxt=c.getContext("2d"); /*-Decimos que contexto tendra, en este caso 2d*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true); /*-Dibujamos circulo mayor*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionadoen micolor*/

	cxt.fillStyle=(mitercercolor); /*-Elegimos de que color dibujar (Black), o mejor creamos una variable que compartiran ambos dibujos dentro del script donde asignaremos un color en comun.*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true); /*-Dibujamos circulo mediano*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionado en mitercercolor*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar (Black), o mejor creamos una variable que compartiran ambos dibujos dentro del script donde asignaremos un color en comun.*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true); /*-Dibujamos circulo pequeño*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionado en micolor*/


	/* - CANVAS:ICONO "NOTICIAS":  */

	var c=document.getElementById("icononoticias"); /*-Establecemos una variable donde elegimos un elementById sobre el documento "sobremi", coincidiendo con el id creado en el canvas arriba.*/
	var cxt=c.getContext("2d"); /*-Decimos que contexto tendra, en este caso 2d*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar (Black), o mejor creamos una variable que compartiran ambos dibujos dentro del script donde asignaremos un color en comun.*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true); /*-Dibujamos el circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionado en micolor*/

	cxt.fillStyle=(micolor); /*-Elegimos de que color dibujar*/
	cxt.beginPath(); /*-Indicamos que arrancaremos un recorrido*/
	cxt.arc(escala*50,escala*50,escala*40,Math.PI,Math.PI*2,false); /*-Dibujamos medio circulo*/
	cxt.closePath; /*-Cerramos el recorrido*/
	cxt.fill(); /*-Rellena con el color seleccionadoen micolor*/

	
</script>
