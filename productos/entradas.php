<?php require('../layout/nav.php') ?>
<?php require('../layout/sidenav.php') ?>
<?php require('../layout/price.php') ?>

<section class="main">
	<div class="container__productos">
	<div class="productos__card">
	<div class="info" id="info1">
	<div class="delantera">	
		<h4 class="grid-h4">Sopa de Mariscos</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/sopa-de-mariscos.jpeg" alt="Sopa de Mariscos">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 8.83  . " / " . "$8.83"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info2">
	<div class="delantera">
		<h4 class="grid-h4">Ensalada Cesar</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/ensalada-cesar.jpeg" alt="Ensalada Cesar">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 3.50  . " / " . "$3.50"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info3">
	<div class="delantera">
		<h4 class="grid-h4">Ensalada con Camarones</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/ensalada-cesar-camarones.jpeg" alt="Ensalada Cesar con Camarones">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 4.20  . " / " . "$4.20"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info4">
	<div class="delantera">
		<h4 class="grid-h4">Ensalada con Cangrejo</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/ensalada-cesar-cangrejo.jpeg" alt="Ensalada Cesar con Cangrejo">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 4.20  . " / " . "$4.20"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info5">
	<div class="delantera">
		<h4 class="grid-h4">Ensalada de Aguacate</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/ensalada-aguacate.jpeg" alt="Ensalada de Aguacate">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 3.50  . " / " . "$3.50"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info6">
	<div class="delantera">
		<h4 class="grid-h4">Ensalada Especial</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/ensalada-especial.jpeg" alt="Ensalada Especial">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 3.50  . " / " . "$3.50"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info7">
	<div class="delantera">
		<h4 class="grid-h4">Ensalada Mixta</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/ensalada-mixta.jpeg" alt="Ensalada Mixta">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 3.50  . " / " . "$3.50"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card rojo">
	<div class="info" id="info8">
	<div class="delantera">
		<h4 class="grid-h4">Ensalada Cesar con Pollo</h4>
		<img class="grid-img" src="../img/productos/entradas-ensaladas/ensalada-cesar-pollo.jpeg" alt="Ensalada cesar con Pollo">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 3.80  . " / " . "$3.80"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>
</div>
</section>
<script src="../script/productos.js"></script>
<?php require('../layout/end.php') ?>