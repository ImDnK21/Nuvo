<!-- <?php while($supply = $supplies->fetch_object()): ?>
    <?php if (isset($supply)): ?>
	<h1><?= $supply->NAME ?></h1>
	<div id="detail-product">
		<div class="image">
			<?php if ($supply->IMG != null): ?>
				<img src="<?= APP_URL ?>uploads/images/<?= $supply->IMG ?>" />
			<?php else: ?>
				<img src="<?= APP_URL ?>assets/img/camiseta.png" />
			<?php endif; ?>
		</div>
		<div class="data">
			<p class="description"><?= $supply->DESCRIPTION ?></p>
			<p class="stock"><?= $supply->STOCK ?>$</p>
		</div>
	</div>
<?php else: ?>
	<h1>El producto no existe</h1>
<?php endif; ?>
  <?php endwhile; ?>

 -->

<div class="container py-3 animate__animated animate__fadeInUp d-none d-md-block">
	<div class="text-center">
		<h3 class="section-header">Productos destacados</h3>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= APP_URL . 'uploads/slides/ej4.jpeg' ?> " class="w-5">
				</div>
				<div class="carousel-item">
					<img src="<?= APP_URL . 'uploads/slides/ej2.jpeg' ?>" class="w-5">
				</div> 
				<div class="carousel-item">
					<img src="<?= APP_URL . 'uploads/slides/e5.jpeg' ?>" class="w-5" >

				</div> -->
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>
<section class="section-products">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-8 col-lg-6">
				<div class="header">
					<h2>Herramientas e Insumos</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-1" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Huaipe de seda blanco 1/2 Kg.</h3>
						<h4 class="product-stock">52 unidades</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-2" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Here Product Title</h3>
						<h4 class="product-stock">$49.99</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-3" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Jabon Mecanico Yato 2LTS</h3>
						<h4 class="product-stock">Stock: 8 Unidades</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-4" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Fusibles Tipo Estandar</h3>
						<h4 class="product-stock">Stock: 12 Unidades</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-5" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Agua Dermineralizada 5LTS</h3>
						<h4 class="product-stock">Stock: 10 Unidades</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-6" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Here Product Title</h3>
						<h4 class="product-stock">$49.99</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-7" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Here Product Title</h3>
						<h4 class="product-stock">$49.99</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-8" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Here Product Title</h3>
						<h4 class="product-stock">$49.99</h4>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-8" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Here Product Title</h3>
						<h4 class="product-stock">$49.99</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>