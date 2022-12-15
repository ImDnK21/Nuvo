<?php while ($workorder = $workorders->fetch_object()): ?>
    <div class="container-fluid py-3">
  <div class="row justify-content-center">
    <div class="col-12 ">
      <div class='invoice'>
        <div class='header' style="padding-bottom:10px';">
          <div class='company col-4'>
            <img src="<?= APP_URL . 'assets/img/logo.png' ?>" width=75 alt="logo">
            <span class="name"><b>Nuvo Automotive</b></span><br>
            <span>(+569) 12345678 ~ (+562) 98765432</span><br>
            <span><b>Porto Seguro #4955 ~ Santiago ~ Chile</b></span>
          </div>
          <div class="company col-4" style="margin:auto;">
            <h3><b>Orden de trabajo:</b></h3>
            <h1 class="order">N°<?= $workorder->ID ?></h1>
          </div>
          <div class='company-tax col-4 text-center'>
            <p style="padding-top:10px;"><b>Fecha y Hora de recepcion: </b></p>
            <p><?= $workorder->CREATED_AT ?></p><br>
            <p><b>Fecha y Hora de entrega: </b></p><br>
            <hr/ style="width: 180px; margin: auto;">

          </div>
        </div>
        <!-- seccion vehicle and client-->
        <div class='header'>
          <div class='company col-6' style='text-align:left;'>
            <p class='col-10'><b>Rut Cliente: </b><?=$workorder->RUT_CLIENT?></p>
            <p class='col-10'><b>Nombre Cliente:
              </b><?=$workorder->FIRSTNAME . ' ' . $workorder->LASTNAME ?></p>
            <p class='col-10'><b>Domicilio:</b> <?=$workorder->ADDRESS?></p>
            <p class='col-10'><b>Comuna de residencia:</b> <?=$workorder->NOMBRE ?></p>
            <p class='col-10'><b>Correo de contaco: </b> <?= $workorder->EMAIL?> </p>
            <p class='col-10'><b>Telefono de contacto: </b> <?= $workorder->PHONE?> </p>
          </div>
          <div class='company-tax col-6 '>
            <div class="row">
              <p class='col-6'><b>Patent:</b> <?=$workorder->PATENT?></p>
              <p class='col-6'><b>Marca:</b> <?=$workorder->BRAND?></p>
              <p class='col-6'><b>Modelo:</b> <?=$workorder->MODEL?></p>
              <p class='col-6'><b>Año:</b> <?=$workorder->YEAR?></p>
              <p class='col-6'><b>Combustible:</b> <?=$workorder->FUEL_NAME?></p>
              <p class='col-6'><b>Transmision:</b> <?=$workorder->NAME_TRANSMISSION?></p>
              <p class='col-6'><b>Color: </b><input type="color" name="color" class="color" style="width: inherit;"
                  value="<?=$workorder->COLOR?>"></p>
              <p class='col-6'><b>N° de chasis:</b> <?=$workorder->CHASSIS_NUMBER?></p>
              <p class='col-6'><b>Kilometraje:</b> <?=$workorder->MILEAGE?>Km</p>
              <p class='col-6'><b>Tipo de vehiculo:</b> <?=$workorder->NAME?></p>
            </div>
          </div>
        </div>
        <div class='header'>
          <div class='company col-6' style='text-align:left; margin-bottom: -20px;'>
            <h4 class="title-vehicle" style="">Observaciones y
              requerimientos del cliente</h4>
            <p class='col-12' style='text-align: justify'><b>
                <?= str_replace("-","<br>-" , $workorder->OBSERVATIONS);?>
            </p></b>
          </div>
          <div class='company col-6 '>
            <h4 class="title-vehicle" style="">Servicios Solicitados</h4>
            <ol class="service-list" style="text-align: left; ">
              <?php $total = 0 ;foreach ($services as $service) { ?>
              <?php if ($service['ID_WO'] == $workorder->ID) { ?>
              <li><b><?= $service['NAME'] . ' $' . $service['PRICE'] ?> </li></b>
              <?php $total += intval($service['PRICE']) ?>

              <?php } ?>
              <?php }
                                      ?>
            </ol>
            <div class="totalCost" style="text-align: right;">

              <b>Valor Total (Sin IVA): </b>
              <?php 
                                      echo $total ?><br>
              <b>Valor Total (Con IVA): </b>
              <?php echo $total * 1.19 ?>
            </div>
          </div>
        </div>
        <div class='header'>
          <div class='company col-6'>
            <div class="form-check">
              <label><input type="checkbox" id="cbox1" value="first_checkbox"> Vehiculo inventariado</label><br>

              <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Daños</label>
              <label><input type="checkbox" id="cbox1" value="first_checkbox"> Este es mi primer
                checkbox</label><br>

              <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Este
                es mi segundo checkbox</label>
              </label>

            </div>

          </div>
          <div class='company-tax col-6'>
            <div class="img-vehicle center">
              <img src="<?= APP_URL . 'VehicleReport.png' ?>" alt="" width="400" height="200">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php endwhile; ?>