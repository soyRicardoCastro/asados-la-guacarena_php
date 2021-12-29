<?php require('../layout/nav.php') ?>
<?php require('../layout/sidenav.php') ?>
<?php require('../layout/price.php') ?>

<section class="main">
	<div class="container__productos">
		<div class="productos__card">
		<div class="info" id="info1">
		<div class="delantera">	
		<h4 class="grid-h4">Pollo a la brasa</h4>
		<img class="grid-img" src="../img/productos/pollos/pollo-a-la-brasa.jpeg" alt="Pollo a la brasa">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 8.50 . " / " . "$8.50"; ?></p>
		</div>
		<div class="trasera">
		<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
		</div>
		</div>
		</div>

		<div class="productos__card">
			<div class="info" id="info2">
			<div class="delantera">
			<h4 class="grid-h4">Medio Pollo a la brasa</h4>
			<img class="grid-img" src="../img/productos/pollos/pollo-asado-medio.gif" alt="Medio Pollo a la brasa">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 4.25 . " / " . "$4.25"; ?></p>
			</div>

			<div class="trasera">
			<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
			</div>	
			</div>
		</div>

		<div class="productos__card">
			<div class="info" id="info3">
			<div class="delantera">
			<h4 class="grid-h4">Pollo a la Broaster</h4>
			<img class="grid-img" src="../img/productos/pollos/pollo-a-la-broaster.jpeg" alt="Pollo a la Broaster">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 14.50 . " / " . "$14.50"; ?></p>
			</div>	

			<div class="trasera">
			<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
			</div>
			</div>
		</div>

		<div class="productos__card">
			<div class="info" id="info4">
			<div class="delantera">
			<h4 class="grid-h4">Churrasco de Pollo</h4>
			<img class="grid-img" src="../img/productos/pollos/churrasco-de-pollo.jpeg" alt="Churrasco de Pollo">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 5 . " / " . "$5.00"; ?></p>
			</div>	

			<div class="trasera">
			<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
			</div>
			</div>
		</div>

		<div class="productos__card">
			<div class="info" id="info5">
			<div class="delantera">
			<h4 class="grid-h4">Chicharrón de Pollo</h4>
			<img class="grid-img" src="../img/productos/pollos/chicharron-de-pollo.jpeg" alt="Chicharrón de Pollo">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 6.50 . " / " . "$6.50"; ?></p>	
			</div>	

			<div class="trasera">
			<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
			</div>
			</div>
		</div>

		<div class="productos__card">
			<div class="info" id="info6">
			<div class="delantera">
			<h4 class="grid-h4">1 Ración de Alitas</h4>
			<img class="grid-img" src="../img/productos/pollos/racion-de-alitas.jpeg" alt="1 Ración de Alitas">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 7.50 . " / " . "$7.50"; ?></p>	
			</div>	

			<div class="trasera">
			<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
			</div>
			</div>
		</div>

		<div class="productos__card">
		<div class="info" id="info7">
		<div class="delantera">
		<h4 class="grid-h4">Medio Pollo a la Brasa</h4>
		<img class="grid-img" src="../img/productos/pollos/pollo-a-la-brasa-medio.jpeg" alt="Medio Pollo a la Broaster">
		<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 7.50 . " / " . "$7.50"; ?></p>	
		</div>
		<div class="trasera">
		<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
		</div>
		</div>
		</div>

		<div class="productos__card">
			<div class="info" id="info8">
			<div class="delantera">
			<h4 class="grid-h4">Media Ración de Alitas</h4>
			<img class="grid-img" src="../img/productos/pollos/racion-de-alitas-medio.jpeg" alt="Pollo Media Ración de Alitas">
			<p class="grid-p"><?php echo "Bs.S" . $valorBolivares = $valorDolar * 5.30 . " / " . "$5.30"; ?></p>	
			</div>	
			<div class="trasera">
			<p class="info__productos">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium deserunt, autem maxime! Nisi illum harum, esse alias debitis numquam eum?</p>
			</div>
			</div>
		</div>
	</div>
</section>
<script src="../script/productos.js"></script>
<?php require('../layout/end.php') ?>