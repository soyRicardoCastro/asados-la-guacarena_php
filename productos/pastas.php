<?php require('../layout/nav.php') ?>
<?php require('../layout/sidenav.php') ?>
<?php require('../layout/price.php') ?>

<section class="main">
	<div class="container__productos">
	<div class="productos__card">
	<div class="info" id="info1">
	<div class="delantera">	
		<h4 class="grid-h4">Pasticho</h4>
		<img class="grid-img" src="../img/productos/pastas/pasticho.jpeg" alt="Pasticho">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 6 . " / " . "$6.00"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem illum possimus mollitia quasi. A numquam ullam assumenda suscipit iste ipsam!</p>
	</div>		
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info2">
	<div class="delantera">
		<h4 class="grid-h4">Fetuccini Alfredo</h4>
		<img class="grid-img" src="../img/productos/pastas/fetuccini-alfredo.jpeg" alt="Fetuccini Alfredo">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 5 . " / " . "$5.50"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore at earum doloribus veritatis tempora temporibus aliquid fugiat, dignissimos mollitia eligendi.</p></div>	
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info3">
	<div class="delantera">
		<h4 class="grid-h4">Fetuccini Carbonara</h4>
		<img class="grid-img" src="../img/productos/pastas/fetuccini-carbonara.jpeg" alt="Fetuccini Carbonara">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 5 . " / " . "$5.50"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat laudantium id explicabo ipsam quo necessitatibus fugit blanditiis a distinctio molestias.</p></div>
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info4">
	<div class="delantera">
		<h4 class="grid-h4">Fetuccini Guacareña</h4>
		<img class="grid-img" src="../img/productos/pastas/fetuccini-guacareña.jpeg" alt="Fetuccini Guacareña">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 8 . " / " . "$8.00"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Sit aspernatur, aliquid recusandae nostrum, dolore aperiam veniam consequuntur reiciendis ratione debitis!</p></div>
	</div>
	</div>

	<div class="productos__card">
	<div class="info" id="info5">
	<div class="delantera">	
		<h4 class="grid-h4">Fetuccini Marinera</h4>
		<img class="grid-img" src="../img/productos/pastas/fetuccini-marinera.jpeg" alt="Fetuccini Marinera">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 11 . " / " . "$11.00"; ?></p>
	</div>
	<div class="trasera"><p class="info__productos">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sapiente, ab animi molestias rem laudantium repudiandae eum sunt impedit iste.</p></div>
	</div>
	</div>
</div>
</section>
<script src="../script/productos.js"></script>
<?php require('../layout/end.php') ?>