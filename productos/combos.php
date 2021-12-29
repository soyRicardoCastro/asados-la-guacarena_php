<?php require('../layout/nav.php') ?>
<?php require('../layout/sidenav.php') ?>
<?php require('../layout/price.php') ?>

<section class="main">
	<div class="container__productos">
		<div class="productos__card">
			<h4 class="grid-h4">Combo Cuarentena</h4>
			<img class="grid-img" src="../img/productos/combos/combo-cuarentena.jpeg" alt="Combo Cuarentena">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 23.50 . " / " . "$23.50"; ?></p>
		</div>
		<div class="productos__card">
			<h4 class="grid-h4">Combo Pollo Asado</h4>
			<img class="grid-img" src="../img/productos/combos/combo-pollo-asado.jpeg" alt="Combo Pollo Asado">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 15 . " / " . "$15.00"; ?></p>
		</div>
		<div class="productos__card">
			<h4 class="grid-h4">Combo Pollo a La Broaster</h4>
			<img class="grid-img" src="../img/productos/combos/combo-pollo-broaster.jpeg" alt="Combo Pollo a La Broaster">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 16 . " / " . "$16.00"; ?></p>
		</div>
		<div class="productos__card">
			<h4 class="grid-h4">Combo Popular</h4>
			<img class="grid-img" src="../img/productos/combos/combo-popular.jpeg" alt="Combo Popular">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 10.50 . " / " . "$10.50"; ?></p>
		</div>
		<div class="productos__card">
			<h4 class="grid-h4">Combo para Mamá 1</h4>
			<img class="grid-img" src="../img/productos/combos/combo-mama-1.jpeg" alt="Combo para Mamá 1">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 32.50 . " / " . "$32.50"; ?></p>
		</div>
		<div class="productos__card">
			<h4 class="grid-h4">Combo para Mamá 2</h4>
			<img class="grid-img" src="../img/productos/combos/combo-mama-2.jpeg" alt="Combo para Mamá 2">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 32.50 . " / " . "$31.50"; ?></p>
		</div>
		<div class="productos__card">
			<h4 class="grid-h4">Combo para Papá 1</h4>
			<img class="grid-img" src="../img/productos/combos/combo-papa-1.jpeg" alt="Combo para Papá 1">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 31.50 . " / " . "$31.50"; ?></p>
		</div>
		<div class="productos__card">
			<h4 class="grid-h4">Combo para Papá 2</h4>
			<img class="grid-img" src="../img/productos/combos/combo-papa-2.jpeg" alt="Combo para Papá 2">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 29 . " / " . "$29.00"; ?></p>
		</div>
	</div>
</section>
<?php require('../layout/end.php') ?>