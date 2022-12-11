<div class="container py-3">
  <div class="row">
    <div class="col-12 -9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de Ordenes de trabajo</h2>
        <a href="<?= APP_URL . 'admin/AddWorkOrder' ?>" class="btn btn-primary mb-3">Agregar Orden de trabajo</a>
        <!-- <a href="<?= APP_URL . 'admin/ViewWorkOrder' ?>" class="btn btn-primary mb-3">Vista Previa de ordenes</a> -->

        <div class="clontainer">
          <div class="col-xs-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar por id" id='q' onkeyup="load(1);">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick='load(1);'><i class='fa fa-search'></i></button>
              </span>
            </div>
          </div>
          <div class="col-xs-3"></div>
          <div class="col-xs-1">
            <div id="loader" class="text-center"></div>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Patente Vehiculo</th>
                  <th>Nombre Propietario</th>
                  <th>Mecanico a cargo</th>
                  <!-- <th>Observaciones</th> -->
                  <th>Estado de orden de trabajo</th>
                  <th>Fecha de Recepcion</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($workorder = $workorders->fetch_object()): ?>
                <tr>
                  <!-- <td><?= var_dump($workorder)?></td> -->
                  <td><?= $workorder->ID ?></td>
                  <td><?= $workorder->PATENT_VEHICLE?></td>
                  <td><?= $workorder->FIRSTNAME . ' ' . $workorder->LASTNAME?></td>
                  <td><?= $workorder->RUT_MECHANIC?></td>
                  <!-- <td><?= $workorder->OBSERVATIONS?></td> -->
                  <td><?= $workorder->NAME_STATUS?></td>
                  <td><?= $workorder->CREATED_AT?></td>
                  <td>
                    <div class="icons">
                      <a href="<?= APP_URL . 'admin/EditOrder?id=' . $workorder->ID ?>"
                        class="btn btn-warning btn-square btn-xs">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a type="button" class="btn btn-primary btn-square btn-xs" data-bs-toggle="modal"
                        data-bs-target="#viewWorkOrder<?=$workorder->ID?>">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a type="button" class="btn btn-danger btn-square btn-xs" data-bs-toggle="modal"
                        data-bs-target="#deleteWorkOrder<?=$workorder->ID?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <div id="viewWorkOrder<?=$workorder->ID ?>" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h5 class="modal-title w-100">Vista Previa de Orden de trabajo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        <!--content modal body -->
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
                                      <p class='col-6'><b>Color: </b><input type="color" name="color" class="color"
                                          style="width: inherit;" value="<?=$workorder->COLOR?>"></p>
                                      <p class='col-6'><b>N° de chasis:</b> <?=$workorder->CHASSIS_NUMBER?></p>
                                      <p class='col-6'><b>Kilometraje:</b> <?=$workorder->MILEAGE?>Km</p>
                                      <p class='col-6'><b>Tipo de vehiculo:</b> <?=$workorder->NAME?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="vehicle">
                                  <div class="col-12">
                                    <h4 class="title-vehicle" style="margin-bottom: -20px;">Observaciones y
                                      requerimientos del cliente</h4>
                                    <p class='col-12' style='text-align: justify'>
                                      <?= str_replace("-","<br>-" , $workorder->OBSERVATIONS);?>
                                    </p>
                                  </div>
                                </div>
                                <div class="vehicle">
                                  <table>
                                    <thead>
                                      <tr>
                                        <th>Hola</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>hola</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="footer">
                                  <ol>
                                    <?php $total = 0 ;foreach ($services as $service) { ?>
                                    <?php if ($service['ID_WO'] == $workorder->ID) { ?>
                                    <li><?= $service['NAME'] . $service['PRICE'] ?> </li>
                                    <?php $total += intval($service['PRICE']) ?>

                                    <?php } ?>
                                    <?php } echo $total;
                                  ?>
                                  </ol>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal View Work order-->
                <div class="modal fade" id="2viewWorkOrder<?=$workorder->ID ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header" style="color: red;">
                        <h5 class=" modal-title fs-6 fw-bold ">Vista Previa de Orden de trabajo</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      </h5>
                    </div>
                  </div>
                </div>
                <!-- Modal Delete Work order -->
                <div class="modal fade" id="deleteWorkOrder<?=$workorder->ID ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header" style="color: red;">
                        <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar esta Orden de trabajo?
                        </h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <b>ID orden de trabajo : <?= $workorder->ID ?></b>
                        <br>
                        <b>Vehiculo Patente : <?= $workorder->PATENT_VEHICLE ?></b>
                        <br>
                        Una vez eliminado, no podrás recuperarlo.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= APP_URL . 'admin/deleteWorkOrder?id=' . $workorder->ID ?>"
                          class="btn btn-danger">Eliminar</a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>