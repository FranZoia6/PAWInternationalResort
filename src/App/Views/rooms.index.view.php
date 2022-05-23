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

		<?php foreach ($rooms as $room) : ?>
		<section>
			<header>
				<h2><?= $room-> fields["name"] ?></h2> 
			</header>
			<figure>
				<img src="./imagenes/Habitacion.jpg" height="200" alt="Habitacion 1">
				<figcaption>
                <?= $room-> fields["description"] ?>
				</figcaption>
			</figure>
		</section>
        <?php endforeach ?>


	</main>

	<!-- Footer component -->
	<?php
		require 'parts/footer.view.php';
	?>
</body>
</html>