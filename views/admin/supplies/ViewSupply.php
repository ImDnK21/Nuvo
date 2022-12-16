 <div class="container py-3 animate_animated animate_fadeInUp d-none d-md-block">
 	<div class="text-center">
 		<div class="header-h1">
 			<h1 class="mt-4 text-center"
 				style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue">
 				Productos Destacados</h1>
 		</div>
 		<div id="destacados" class="carousel carousel-dark slide" data-bs-ride="true">
 			<div class="carousel-indicators">
 				<button type="button" data-bs-target="#destacados" data-bs-slide-to="0" class="active"
 					aria-current="true"></button>
 				<button type="button" data-bs-target="#destacados" data-bs-slide-to="1"></button>
 				<button type="button" data-bs-target="#destacados" data-bs-slide-to="2"></button>
 				<button type="button" data-bs-target="#destacados" data-bs-slide-to="3"></button>
 				<button type="button" data-bs-target="#destacados" data-bs-slide-to="4"></button>
 			</div>
 			<div class="carousel-inner">
 				<div class="carousel-item active">
 					<img src="<?= APP_URL . 'uploads/slides/e1.jpeg' ?>" class="w-5">
 				</div>
 				<div class="carousel-item">
 					<img src="<?= APP_URL . 'uploads/slides/e2.jpeg' ?>" class="w-5">
 				</div>
 				<div class="carousel-item">
 					<img src="<?= APP_URL . 'uploads/slides/e3.jpeg' ?>" class="w-5">
 				</div>
 				<div class="carousel-item">
 					<img src="<?= APP_URL . 'uploads/slides/e4.jpeg' ?>" class="w-5">
 				</div>
 				<div class="carousel-item">
 					<img src="<?= APP_URL . 'uploads/slides/e5.jpeg' ?>" class="w-5">
 				</div>
 			</div>
 			<button class="carousel-control-prev" type="button" data-bs-target="#destacados" data-bs-slide="prev">
 				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 				<span class="visually-hidden">Previous</span>
 			</button>
 			<button class="carousel-control-next" type="button" data-bs-target="#destacados" data-bs-slide="next">
 				<span class="carousel-control-next-icon" aria-hidden="true"></span>
 				<span class="visually-hidden">Next</span>
 			</button>
 		</div>
 	</div>
 </div>
 <section class="section-products">
 	<div class="container">
 		<div class="text-center">
 			<div class="header-h1">
 				<h1 class="mt-4 text-center"
 					style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue">
 					Herramientas e insumos
 				</h1>
 			</div>
 		</div>

 		<div class="row justify-content-start">
 			<?php while ($supply = $supplies->fetch_object()) : ?>
 			<div class="col-md-6 col-lg-4 col-xl-3">
 				<div class="disk-border">
 					<div class="disk-container">
 						<?php if(!empty($supply->IMG)): ?>
 						<img src="<?= APP_URL . 'uploads/' . $supply->IMG ?>" class=" " style="width: 300px; height: 300px;">
 						<?php else: ?>
 						<img src="<?= APP_URL . 'assets\img\grasa-multiproposito.jpg' ?>" alt="Placeholder"
 							class="w-100 disk-image">
 						<?php endif; ?>
 						<div class="text-center p-3">
 							<p class="disk-name fw-bold mb-0">Nombre: <?= $supply->NAME ?></p>
 							<p class="disk-name fw-bold mb-0">Categoria: <?= $supply->NAME_CATEGORY ?></p>
 							<p class="disk-name fw-bold mb-0">Stock: <?= $supply->STOCK ?></p>

 						</div>
 					</div>
 				</div>
 			</div>
 			<?php endwhile; ?>
 		</div>


 		<div class="row">
 			<div class="col-md-6 col-lg-4 col-xl-3">
 				<?php while ($supply = $supplies->fetch_object()) : ?>

 				<div class="part-1">
 					<ul>
 						<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
 						<li><a href="#"><i class="fas fa-heart"></i></a></li>
 						<li><a href="#"><i class="fas fa-plus"></i></a></li>
 						<li><a href="#"><i class="fas fa-expand"></i></a></li>
 					</ul>
 				</div>
 				<div class="part-2">
 					<h3 class="product-title"></h3>
 					<h4 class="proucto-stock"></h4>
 				</div>
 				<?php endwhile; ?>

 			</div>
 		</div>

 		<div class="row">
 			<!-- Single Product -->
 			<?php while ($supply = $supplies->fetch_object()) : ?>

 			<div class="col-md-6 col-lg-4 col-xl-3">
 				<div id="product-1" class="single-product">
 					<?php if(!empty($supply->IMG)): ?>
 					<img src="<?= APP_URL . 'uploads/' . $supply->IMG ?>" class="w-100 ">
 					<?php else: ?>
 					<img src="<?= APP_URL . 'assets\img\grasa-multiproposito.jpg' ?>" alt="Placeholder"
 						class="w-100 disk-image">
 					<?php endif; ?>
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
 						<h4 class="product-stock">Stock: 22 Unidades</h4>
 					</div>
 				</div>
 			</div>
 			<?php endwhile; ?>
 		</div>
 	</div>
 </section>