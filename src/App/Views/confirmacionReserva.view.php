<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link href="./style/confirmacionReserva.css" rel="stylesheet" type="text/css">
	<title>Reservas</title>
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
			<h1>Confirmar datos de reserva</h1>
		</header>

		<section>
			<header>
				<h2>Forma de pago</h2>
			</header>
			<!-- Foto de la tarjeta -->
			<img src="" alt="Tarjeta">

			<form action="">
				<fieldset>
						<p><input type="text" name="numeroTarjeta" placeholder="Número de tarjeta"></p>
						<p><input type="text" name="nombre" placeholder="Nombre del titular"></p>					
						<p><input type="text" name="numeroSeguridad" placeholder="Código de seguridad"></p>
						<p><input type="date" name="numeroSeguridad" placeholder="Fecha de vencimiento"></p>				
				</fieldset>

				<label for="inputReset">
					<input type="reset" name="inputSubmit" value="Borrar">
				</label>
				<label for="inputSubmit">
					<input type="submit" name="inputSubmit" value="Reservar">
				</label>
			</form>
		</section>

		<section>
			<article
				<header>
					<h2>Su reserva</h2>
				</header>
	
				<section>
					<img src="./imagenes/icons/calendar-check.svg" alt="Calendario">
					<p>Ingreso: 12/10/2022</p>
				</section>
				
				<section>
					<img src="./imagenes/icons/calendar-check.svg" alt="Calendario">
					<p>Egreso: 20/10/2022</p>
				</section>
				
				<section>
					<img src="./imagenes/icons/person.svg" alt="Adulto">
					<p>Adultos: 2</p>
				</section>
				
				<section>
					<img src="./imagenes/icons/baby-solid.svg" alt="Baby" height="20">
					<p>Niños: 3</p>
				</section>
	
				<section>
					<p>Habitaciones</p>
					<ul>
						<li>Suite PAW</li>
						<li>Habitación doble</li>
					</ul>
				</section>
			</article>

			<article>
				<header>
					<h2>Datos personales</h2>
				</header>
				<p>Nombre: Juan Carlos</p>
				<p>Email: juanca@yahoo.com</p>
				<p>Número de teléfono: 2346543210</p>
			</article>

			<article>
				<header>
					<h2>Observaciones</h2>
				</header>
				<p>Este es un mensaje super lindo sin ningun sentido</p>
			</article>
		</section>
	</main>

	<!-- Footer component -->
	<?php
		require 'parts/footer.view.php';
	?>
</body>
</html>