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
			<h1>Habitaciones</h1>
		</header>
		
		<section>
			<header>
				<h2>Habitacion tipo 1</h2> 
			</header>
			<figure>
				<img src="./imagenes/Habitacion.jpg" height="200" alt="Habitacion 1">
				<figcaption>
					Con una superficie de 18 m², estas habitaciones están ubicadas en planta baja. 
					Cuentan con ventilador de techo, calefacción, aire acondicionado y TV por cable, 
					entre otros detalles. Incluyen espacio guardacoche.
				</figcaption>
			</figure>
		</section>

		<section>
			<header>
				<h2>Habitacion tipo 2</h2>
			</header>
			<figure>
				<img src="./imagenes/Habitacion2.jpg" height="200" alt="Habitacion 1">
				<figcaption>
					Con una superficie de 18 m², estas habitaciones están ubicadas en planta baja. 
					Cuentan con ventilador de techo, calefacción, aire acondicionado y TV por cable, 
					entre otros detalles. Incluyen espacio guardacoche.
				</figcaption>
			</figure>
		</section>

		<section>
			<header> 
				<h2>Habitacion tipo 3</h2> 
			</header>
			<figure>
				<img src="./imagenes/Habitacion3.jpg" height="200" alt="Habitacion 1">
				<figcaption>
					Con una superficie de 18 m², estas habitaciones están ubicadas en planta baja. 
					Cuentan con ventilador de techo, calefacción, aire acondicionado y TV por cable, 
					entre otros detalles. Incluyen espacio guardacoche.
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