<nav>
		<input type="checkbox" id="menu">
		<label for="menu"> ☰ </label>
		<ul>
			<?php foreach ($this->menu as $item) : ?>
				<li><a href="<?= $item["href"] ?>"> <?= $item["name"] ?> </a></li>
			<?php endforeach ; ?>

			<!-- <li><a href="/">Home</a></li>
			<li><a href="/rooms">Habitaciones</a></li>
			<li><a href="/reservation">Reserva</a></li>
			<li><a href="/services">Servicios</a></li>
			<li><a href="/contact">Contacto</a></li> -->
		</ul>
</nav>