<footer>
		<section>
			<h3>PAW Hotel Resort Internacional </h3>
			<p>
				El hotel cuenta con 32 habitaciones con vista al campo y al polo del hotel, y con amplios espacios verdes, piscina climatizada, 
				cancha de polo, juegos y actividades para niños. En el Restaurante La Perdiz ubicado en el primer piso, se puede degustar comida
				gourmet de campo y asado.
			</p>
		</section>

		<section>
			<h3>Enlaces</h3>
			<ul>
				<?php foreach ($this->menu as $item) : ?>
					<li><a href="<?= $item["href"] ?>"> <?= $item["name"] ?> </a></li>
				<?php endforeach ; ?>
			</ul>
		</section>

		<section>
			<address>
				<ul>
					<li><p>Facebook: </p> <a href="https://www.google.com" target="_blank">PAW resort International</a></li>
					<li><p>Instagram: </p> <a href="https://www.google.com" target="_blank">@PawResortInternational</a></li>
					<li><p>Teléfono:</p> <p>+5491179842315</p></li>
					<li><p>Whatsapp:</p> <p>+5491179842315</p></li>
					<li><p>Dirección:</p> <p>Valentin coria 37</p></li>
				</ul>
			</address>
		</section>
	</footer>