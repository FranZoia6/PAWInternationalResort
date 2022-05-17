<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		require 'parts/head.vew.php'; 
	?>
	<link href="./style/reserva.css" rel="stylesheet" type="text/css">
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
			<h1>Reserva online</h1>
		</header>

		<section>
			<form action="/processReservation" method="POST">
				<fieldset class="reservation-information">
					<header>
						<h2>Datos de reserva</h2>
					</header>
					<section>
						<img src="./imagenes/icons/calendar-check.svg">
						<input type="date" name="diaEntrada" placeholder="Dia de entrada">
					</section>
					
					<section>
						<img src="./imagenes/icons/calendar-check.svg">
						<input type="date" name="diaSalida" placeholder="Dia de salida">
					</section>
					
					<section>
						<img src="./imagenes/icons/person.svg">
						<input type="number" name="cantAdultos" placeholder="Cantidad de adultos">
					</section>
					
					<section>
						<img src="./imagenes/icons/baby-solid.svg" height="20">
						<input type="number" name="cantNinos" placeholder="Cantidad de niños">
					</section>
					
					<section>
						<img src="./imagenes/icons/house.svg" alt="Habitacion">
						<input type="number" name="cantHabitaciones" placeholder="Cantidad de habitaciones">
					</section>
					
					<section>
						<img src="./imagenes/icons/house.svg" alt="Habitacion">
						<select name="cantHabitaciones" placeholder="Tipo de habitación">
							<option value="value1">Tipo habitación 1</option>
							<option value="value2">Tipo habitación 2</option>
							<option value="value3">Tipo habitación 3</option>
							<option value="value3">...</option>
						</select>
					</section>
				</fieldset>

				<fieldset class="personal-information">
					<header>
						<h2>Datos personales</h2>
					</header>
					<input type="text" name="nombreYApellido" placeholder="Nombre y apellido">
					<input type="text" name="email" placeholder="Correo electronico">
					<input type="text" name="numero" placeholder="Número de teléfono">
				</fieldset>

				<fieldset class="extra-information">
					<header>
						<h2>Observaciones</h2>
					</header>
					<input type="text" name="observacion" placeholder="Agregue algun comentario">
				</fieldset>

				<label for="inputReset">
					<input id="inputRemove" type="reset" name="inputDelete" value="Borrar">
				</label>
				<label for="inputSubmit">
					<input id="inputSubmit" type="submit" name="inputSubmit" value="Reservar">
				</label>
			</form>
		</section>
	</main>

	<!-- Footer component -->
	<?php
		require 'parts/footer.view.php';
	?>

	<!-- Este es el Menú para seleccionar la habitación -->
	<!-- Solo se mostraria cuando el user Clickee para seleccionar la habitacion -->
	<section class="room-selector">
		<header>Selecciona la habitación</header>
		<article>
			<header>Tipo habitación 1</header>
			<img src="./imagenes/Habitacion.jpg" height="200" alt="">
			<button>Seleccionar</button>
		</article>
		<article>
			<header>Tipo habitación 2</header>
			<img src="./imagenes/Habitacion.jpg" height="200" alt="">
			<button>Seleccionar</button>
		</article>
		<article>
			<header>Tipo habitación 3</header>
			<img src="./imagenes/Habitacion.jpg" height="200" alt="">
			<button>Seleccionar</button>
		</article>
	</section>
</body>
</html>