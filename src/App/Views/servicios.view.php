<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		require 'parts/head.vew.php'; 
	?>
	 <link href="./style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Header component -->
	<?php
		require 'parts/header.view.php';
	?>


	<!-- Nav component -->
	<?php
		require 'parts/nav.view.php';
	?>

	<main>
		<header>
			<h1>Servicios</h1>
		</header>

		<section>
			<header>
				<h2>Bar</h2>
			</header>
			<figure>
				<img src="./imagenes/bar.jpg" height="200"  alt="Bar">
				<figcaption>
					Disfrute del impresionante paisaje en este exclusivo bar con vista a uno de los lagos más impresionantes de Bariloche. 
					Relájese con jugo de frutas frescas y cócteles exóticos mezclados con un toque argentino.
				</figcaption>
			</figure>
		</section>

		<section>
			<header>
				<h2>Gimnasio</h2>
			</header>
			<figure>
				<img src="./imagenes/gimnasio.jpg" height="200" alt="Gimnasio">
				<figcaption>
					Disfrute del impresionante paisaje en este exclusivo bar con vista a uno de los lagos más impresionantes de Bariloche.
					Relájese con jugo de frutas frescas y cócteles exóticos mezclados con un toque argentino.
				</figcaption>	
			</figure>
		</section>

		<section>
			<header>
				<h2>SPA</h2>
			</header>
			<figure>
				<img src="imagenes/spa.jpg" height="200" alt="SPA" >
				<figcaption>
					A la hora del relax, déjese tentar por el encanto del PAW Spa, donde el placer será el protagonista de su experiencia PAW 
					Suites en un ambiente de confort, totalmente equipado a medida de quienes buscan una propuesta diferente y agradable
				</figcaption>
			</figure>
		</section>
	</main>

	<!-- Footer component -->
	<?php
		require 'parts/footer.view.php';
	?>
</body>
</html>