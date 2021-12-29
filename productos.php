<?php require('layout/header.php') ?>

<main>
	<div class="contenedor-texto">
		<h2 class="titulo">Mira nuestra lista de productos</h2>
	</div>
</main>

<div class="container__productos">
	<div class="productos__card">
		<h4 class="productos__titulo">Combos</h4>
		<a href="productos/combos.php"><img class="grid-img" src="img/productos/combos.jpeg" alt="Combos"></a>
	</div>
	<div class="productos__card">
		<h4 class="productos__titulo">Pizzas</h4>
		<a href="productos/pizzas.php"><img class="grid-img" src="img/productos/pizzas.jpeg" alt="Pizzas"></a>
	</div>
	<div class="productos__card">
		<h4 class="productos__titulo">Pollos</h4>
		<a href="productos/pollos.php"><img class="grid-img" src="img/productos/pollos.jpeg" alt="Pollos"></a>
	</div>
	<div class="productos__card">
		<h4 class="productos__titulo">Carnes y Parrillas</h4>
		<a href="productos/carnes.php"><img class="grid-img" src="img/productos/carnes-parrillas.jpeg" alt="Carnes y Parrillas"></a>
	</div>
	<div class="productos__card">
		<h4 class="productos__titulo">Pescados y Mariscos</h4>
		<a href="productos/pescados.php"><img class="grid-img" src="img/productos/pescados-mariscos.jpeg" alt="Parrillas"></a>
	</div>
	<div class="productos__card">
		<h4 class="productos__titulo">Entradas y Ensaladas</h4>
		<a href="productos/entradas.php"><img class="grid-img" src="img/productos/entradas-ensaladas.jpeg" alt="Ensalada y Entradas"></a>
	</div>
	<div class="productos__card">
		<h4 class="productos__titulo">Pastas</h4>
		<a href="productos/pastas.php"><img class="grid-img" src="img/productos/pastas.jpeg" alt="Pastas"></a>
	</div>
	<div class="productos__card">
		<h4 class="productos__titulo">Contornos y Raciones</h4>
		<a href="productos/contornos.php"><img class="grid-img" src="img/productos/contornos-raciones.jpeg" alt="Contornos y Raciones"></a>
	</div>
</div>

<footer>
	<div class="footer-link">
		<h4>
			<a href="contacto.php" class="footer-link"><i class="fas fa-truck"></i> Pedir un Delivery</a>
		</h4>
	</div>
</footer>

<?php require('layout/footer.php') ?>