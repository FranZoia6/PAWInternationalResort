<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link href="./style/index.css" rel="stylesheet" type="text/css">
	<title>PAW Hotel Resort Internacional</title>
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

	<section class="reservation-nav">
		<form action="">
			<fieldset>
				<input type="date" name="diaEntrada" placeholder="Dia de entrada" >
				<input type="date" name="diaSalida" placeholder="Dia de salida">
				<input type="number" name="cantAdultos" placeholder="Adultos">
				<input type="number" name="cantNinos" placeholder="Ninos">
				<input type="submit" name="comenzarReserva" value="Reservar" class="b-submit">
			</label>
		</fieldset>
		</form>
	</section>
	<main>
		<section>
			<header>
				<h1>Bienvenidos a PAW Hotel Resort Internacional</h1>
			</header>

			<p> El hotel cuenta con 32 habitaciones con vista al campo y al polo del hotel, 
				y con amplios espacios verdes, piscina climatizada, cancha de polo, juegos 
				y actividades para niños. En el Restaurante La Perdiz ubicado en el primer piso, 
				se puede degustar comida gourmet de campo y asado.
			</p>
		</section>

		<section>
			<figure class="carousel">
				<img src="./imagenes/bar.jpg" height="150" alt="bar">
				<img src="./imagenes/vistaBalcon.jpg" height="200" alt="vistaBalcon">
				<img src="./imagenes/gimnasio.jpg" height="150" alt="vistaBalcon">
			</figure>
		</section>

		<section>
			<header>
				<h2 class="bar">Habitaciones</h2>
			</header>
			<figure>
				<img src="./imagenes/Habitacion.jpg" height="200" alt="Habitacion">
				<figcaption>
					Habitación perfecta para un viaje familiar o si necesitas privacidad para descansar.
					Nuestras habitaciones, decoradas en tonos naturales y colores terrosos, recrean
					un espacio de armonía ideal para relajarse.
				</figcaption>
			</figure>
		</section>
		<section>
			<header>
				<h2 class="bar">Actividades</h2>
			</header>
			<figure>
				<img src="./imagenes/actividades.jpg" height="200" alt="Actividades">
				<figcaption>
					En el PAW Hotel Resort Internacional vas a tener un sin fin de actividades 
					super entratidas para realizar y divertirte tales como natacion, voley, futbol, pescas y un enorme etcétera
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

