<div class="sb-nav-fixed">

<div class="header-h1">
  <h1 class="mt-4 text-center" style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue"  >Dashboard</h1>
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
</div>
</div>
<div class="header-carousel">
<h1 class="header-carousel-main text-center" style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue">Productos Destacados</h3>
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
<div class="container" style="max-width: none;;">
  <h1 class="Contact-us text-center" style=" border-style: groove; border-radius: 30px; font-family: 'Roboto Slab', serif; background-color: #444444; color:aliceblue">CONTACTANOS</h1>
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


<!-- <div id="contact" class="container py-3 animate__animated animate__fadeInUp">
<h3 class="section-header">Contáctanos</h3>
<div class="row pt-3">
  <div class="col-12 mb-3">
    <div class="row justify-content-center">
      <div class="col-12 col-md-4">
        <h5 class="fw-bold">Servicio al cliente</h5>
        <div class="d-flex align-items-center mb-2">
          <i class="fas fa-phone-alt icon me-2"></i>
          +569 12345678
        </div>
        <div class="d-flex align-items-center mb-2">
          <i class="fas fa-envelope icon me-2"></i>
          contacto@soundcity.cl
        </div>
      </div>
      <div class="col-12 col-md-4">
        <p class="fw-bold mb-1">Horario de atención</p>
        <p>Lunes a domingo de 08:00 a 16:00 horas</p>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6">
    <iframe src="https://maps.google.com/maps?q=Inacap%20Santiago%20Sur&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="500" loading="lazy"></iframe>
  </div>
  
  <div class="col-12 col-lg-6 py-3">
    <p class="mb-0"><span class="fw-bold">Nuestra tienda</span> está ubicada en:</p>
    <p>Av. Escuela Agrícola, Macul, Región Metropolitana</p>
    <p class="fw-bold mb-0">Horario:</p>
    <p>Lunes a viernes de 10:00 a 18:00 horas.</p>
    <div class="d-flex align-middle align-items-center justify-content-start">
      <div class="badge badge-custom rounded-pill me-2">
        <a href="https://www.facebook.com">
          <i class="fa-brands fa-facebook icon me-2"></i>
        </a>
        <a href="https://www.instagram.com">
          <i class="fa-brands fa-instagram icon me-2"></i>
        </a>
        <a href="https://www.twitter.com">
          <i class="fa-brands fa-twitter icon"></i>
        </a>
      </div>
      <p class="fw-bold mb-1">@soundcity</p>
    </div>
  </div>
</div>
</div> -->

<script>
function RefreshGrafico() {
  document.getElementById("myBarChart").remove();

  var canvas = document.createElement("canvas");
  canvas.id = "myBarChart";
  document.getElementById("caja").appendChild(canvas);

  var despachosGral = document.getElementById("myBarChart").getContext("2d");
  var chartdespachosGral = new Chart(despachosGral, {
    type: 'bar',
    data: {
      labels: ["Clientes Totales", "Mecanicos Disponibles", "OT Realizadas",
        "Insumos con bajo stock"
      ],
      datasets: [{
        label: "Info. estadistica aproxcima",
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [6, 4, 5, 2],
      }],
    },
    options: {
      scales: {
        xAxes: [{
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 6
          }
        }],
        yAxes: [{
          ticks: {
            min: 1,
            max: 10,
            maxTicksLimit: 10
          },
          gridLines: {
            display: true
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
}
</script>