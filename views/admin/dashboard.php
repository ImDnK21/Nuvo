<div class="sb-nav-fixed">
    <h1 class="mt-4">Dashboard</h1>
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
                <button type="button" class="btn btn-success" onclick="RefreshGrafico()"> Actualizar tabla </button>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i> Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4" style="  margin-top: -22px;">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    


    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row justify-content-center">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="<?=APP_URL . 'admin/Terms' ?>" class="text-white">Terminos y condiciones </a>
            </li>
            <li>
              <a href="<?=APP_URL . 'admin/Terms' ?>" class="text-white">Contacto </a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Danko Sanchez</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
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