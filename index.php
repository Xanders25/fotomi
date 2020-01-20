<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fotografias Minguez</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>Fotografias Minguez</h1>
				<nav>
					<ul>
						<li><a href="#intro">Inicio</a></li>
						<li><a href="#one">Que hacemos</a></li>
						<li><a href="#two">Proyectos</a></li>
						<li><a href="#work">Nuestro Trabajo</a></li>
						<li><a href="#contact">Contacto</a></li>
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>Hola a todos</h2>
					</header>
					<p>Bienvenidos a<strong>Fotografias Minguez</strong>donde la fotografia y los videos son nuestra pasion.<br />
					Este sitio web tiene una licencia de:<a href="https://html5up.net/license">Creative Commons Attribution license</a>.</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>¿Que hacemos?</h2>
					</header>
					<p>En fotografias Minguez nos encargamos de crear nuestros propios estilos para los videos y publireportajes. Nos encargamos de todo sistema audiovisual en bodas, bautizos, eventos, etc.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Proyectos</h2>
					</header>
					<p>Nos encargamos de realizar videos especificos para todos nuestros clientes de empresas muy conocidas.
					Tambien vendemos equipos fotograficos, de video, etc.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Nuestro trabajo</h2>
						<p>Aqui podeis ver nuestros trabajos en bodas, bautizos, eventos, etc.</p>
					</header>

					<!-- Gallery  -->
						<div class="gallery">
							<article class="from-left">
								<a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="bodas" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="Bautizos" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Eventos" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Reportajes" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="En galerias" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" title="Videoconferencias" alt="" /></a>
							</article>
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Contacto</h2>
						<p>Si quieres mas informacion sobre nuestra empresa o tienes alguna pregunta puedes escribirnos.
						Tambien podeis recibir informacion de nuestros boletines si os suscribis en el siguiente formulario:</p>
					</header>
					<div class="box">
						<form method="get" action="#">
							<div class="fields">
								<div class="field half"><input type="text" name="name" placeholder="Nombre" /></div>
								<div class="field half"><input type="email" name="email" placeholder="Correo" /></div>
								<div class="field"><textarea name="message" placeholder="Mensaje" rows="6"></textarea></div>
							</div>
							<ul class="actions special">
								<li><input type="submit" value="Enviar Mensaje" /></li>
							</ul>
						</form>
					</div>
				</div>
			</section>
<?php
    //conectar
    $conn = new mysqli('localhost','id12197478_root','root5','id12197478_fotografia');
    
    if(isset($_GET['name'])) $conn->query("
            INSERT INTO xanders_form
            (nombre,correo,fecha,mensaje)
            VALUES
            ('".$_GET['name']."','".$_GET['email']."',NOW(),'".$_GET['message']."');
        ");
?>
		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>