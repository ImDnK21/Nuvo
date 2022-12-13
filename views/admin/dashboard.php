<?php
$conectar = new mysqli('localhost', 'root', 'root', 'nuvo-automotive2');
$consulta = $conectar->query("SELECT COUNT(*) AS Ordenes_de_Trabajo FROM workorder where ID_STATUS LIKE '3'");
$consulta2 = $conectar->query("SELECT COUNT(*) AS Cantidad_de_Vehiculos FROM vehicle");
$consulta3 = $conectar->query("SELECT COUNT(*) AS Cantidad_Clientes FROM user WHERE ROLE='client'");
$consulta4 = $conectar->query("SELECT COUNT(*) AS Cantidad_Mecanicos FROM user WHERE ROLE = 'mechanic'");
$consulta5 = $conectar->query("SELECT COUNT(*) AS Cantidad_Ordenes FROM workorder");
$consulta6 = $conectar->query("SELECT COUNT(*) AS Insumos_Bajo_50_Por_Ciento FROM supply WHERE STOCK < 50");
foreach ($consulta as $datos) {
    $ordenTrabajo[] = $datos['Ordenes_de_Trabajo'];
}

foreach ($consulta2 as $datosVehiculos) {
    $cantVehiculos[] = $datosVehiculos['Cantidad_de_Vehiculos'];
}

foreach ($consulta3 as $datosPruebaClientes) {
    $cantCli[] = $datosPruebaClientes['Cantidad_Clientes'];
}
foreach ($consulta4 as $datosMeca) {
    $cantMeca[] = $datosMeca['Cantidad_Mecanicos'];
}
foreach ($consulta5 as $datosOrd) {
    $cantOrd[] = $datosOrd['Cantidad_Ordenes'];
}
foreach ($consulta6 as $datosIns){
    $cantIns[] = $datosIns['Insumos_Bajo_50_Por_Ciento'];

}
?>

<div class="sb-nav-fixed">


  <div class="header-h1">
    <h1 class="mt-4 text-center"
      style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue">
      Dashboard</h1>
  </div>
  <div class="container-fluid px-4">
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body"> <b style="color: black;">Clientes Totales: <?= $clients->num_rows ?></b>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="<?=APP_URL . 'admin/ViewListClient'?>">Ver
              listado de Clientes</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body"><b style="color: black;"> Mecanicos Disponibles:
              <?= $mechanics->num_rows ?></b></div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="<?=APP_URL . 'admin/viewListMechanic' ?>">Ver
              Listado de Mecanicos</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body"> <b style="color: black;"> OT Realizadas: <?=  $workorders-> num_rows ?></b>
            </OT>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="<?=APP_URL . 'admin/viewListWorkOrder' ?>">Ver
              Ordenes de Trabajo</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body"><b style="color: black;"> Insumos con Bajo Stock: <?= $supplies-> num_rows?>
            </b></div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="<?=APP_URL . 'admin/viewListSupplies' ?>">Ver
              Listado de Insumos </a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-chart-bar me-1"></i> Informacion estadistica de los indicadores del taller
            mecanico
          </div>
          <div id="caja" class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
        <!-- <button type="button" class="btn btn-success" onclick="RefreshGrafico()"> Actualizar tabla </button> -->
      </div>
      <div class="col-xl-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-chart-area me-1"></i> Categoria de insumos mas utilizados en el año
          </div>
          <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
        </div>
      </div>

    </div>
    <div class="header-carousel">
      <h1 class="header-carousel-main text-center"
        style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue">
        Productos Destacados</h3>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= APP_URL . 'uploads/slides/e1.jpeg' ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= APP_URL . 'uploads/slides/e2.jpeg' ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= APP_URL . 'uploads/slides/e3.jpeg' ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= APP_URL . 'uploads/slides/e4.jpeg' ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= APP_URL . 'uploads/slides/e5.jpeg' ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Site footer -->
    <footer class="site-footer">
      <div id="contact" class="container" style="max-width: none;;">
        <h1 class="Contact-us text-center"
          style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue">
          CONTACTANOS</h1>
        <div class="row">
          <div class="col-12 col-lg-6">
            <!-- <iframe src="https://maps.google.com/maps?q=Inacap%20Santiago%20Sur&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="500" loading="lazy"></iframe> -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.0427321636016!2d-70.70572348464844!3d-33.44819320478281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c464bd73cb2f%3A0x2be615b1d4e9d885!2sPorto%20Seguro%204955%2C%208500979%20Quinta%20Normal%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1668140185751!5m2!1ses!2scl"
              width="100%" height="250" loading="lazy"></iframe>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <i class="fa fa-facebook"></i>
              <i class="fa fa-twitter"></i>
              <i class="fa fa-instagram"></i>
              <i class="fa fa-linkedin"></i>

            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href=<?= APP_URL . 'admin/terms' ?>>Terminos y condiciones</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text" style="color: black;">Copyright &copy; 2022 All Rights Reserved by
              <b><a href="#">Danko Sanchez</a></b>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    