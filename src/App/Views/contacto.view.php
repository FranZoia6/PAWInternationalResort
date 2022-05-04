<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link href="./style/contacto.css" rel="stylesheet" type="text/css">
	<title>Contacto</title>
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
			<h1>Contacto</h1>
		</header>

		<section>
			<section class="formulario-reserva">
				<form action="">
					<fieldset>
							<input type="text" name="nombre" placeholder="Nombre">
							<input type="text" name="email" placeholder="Correo electrónico">
							<input type="text" name="mensaje" placeholder="Mensaje">
					</fieldset>
	
					<label for="inputReset">
						<input id= "inputRemove" type="reset" name="inputRemove" value="Borrar">
					</label>
					<label for="inputSubmit">
						<input id="inputSubmit" type="submit" name="inputSubmit" value="Enviar">
					</label>
				</form>
			</section>

			<address class="contact-information">
					<article>
						<!-- Mail -->
						<img src="./imagenes/icons/mail.svg" alt="Mail">
						<address>paw.resort@mail.com</address>
					</article>
					<article>
						<!-- Facebook -->
						<img src="./imagenes/icons/facebook.svg" alt="Facebook">
						<address>PAW Resort Internacional</address>
					</article>
					<article>
						<!-- Instagram -->
						<img src="./imagenes/icons/instagram.svg" alt="Instagram">
						<address>@PawResortInternational</address>
					</article>
					<article>
						<!-- Telefono -->
						<img src="./imagenes/icons/telephone.svg" alt="Telefono">
						<address>+5491179842315</address>
					</article>
					<article>
						<!-- whatsapp -->
						<img src="./imagenes/icons/whatsapp.svg" alt="Whatsapp">
						<address>+54 9 11 7984 2315</address>
					</article>
			</address>
		</section>

		<section>
			<!-- Foto del mapa -->
			<img src="./imagenes/ubicacion.png" alt="mapa" height="100px" >
		</section>
	</main>

	<!-- Footer component -->
	<?php
		require 'parts/footer.view.php';
	?>
</body>
</html>