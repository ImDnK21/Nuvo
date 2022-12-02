<div class="container py-3">
  <div class="row">
    <div class="col-12 -9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de Ordenes de trabajo</h2>
        <a href="<?= APP_URL . 'admin/AddWorkOrder' ?>" class="btn btn-primary mb-3">Agregar Orden de trabajo</a>
        <a href="<?= APP_URL . 'admin/ViewWorkOrder' ?>" class="btn btn-primary mb-3">Vista Previa de ordenes</a>

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
                  <th>Propietario</th>
                  <th>Mecanico a cargo</th>
                  <th>Observaciones</th>
                  <th>Estado de orden de trabajo</th>
                  <th>Fecha Creacion</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($workorder = $workorders->fetch_object()): ?>
                <tr>
                  <td><?= var_dump($workorder)?></td>
                  <td><?= $workorder->ID ?></td>
                  <td><?= $workorder->PATENT_VEHICLE?></td>
                  <td><?= $workorder->RUT_CLIENT?></td>
                  <td><?= $workorder->RUT_MECHANIC?></td>
                  <td><?= $workorder->OBSERVATIONS?></td>
                  <td>
                    <?php
                        if ($workorder->STATUS == 'En Preparacion') {
                          echo '<span class="badge badge-warning" style="background-color:red;"> En Preparacion</span>';
                        } elseif ($workorder->STATUS == 'En Reparacion') {
                          echo '<span class="badge badge-primary" >Vehiculo en reparacion</span>';
                        } elseif ($workorder->STATUS == 'Finalizado') {
                          echo '<span class="badge badge-success" style="background-color: green;">Vehiculo finalizado</span>';
                        }
                      ?>
                  </td>
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
                      <div class="modal-header">
                        <h5 class="modal-title">Vista Previa de Orden de trabajo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        <!--content modal body -->
                        <div class="container-fluid py-3">
                          <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                              <div class='invoice'>
                                <div class='header'>
                                  <div class='company col-8'>
                                    <img src="<?= APP_URL . 'assets/img/logo.png' ?>" width=75 alt="logo">
                                    <span class="name" style="font-size: 22px;"><b>Nuvo Automotive</b></span><br>
                                    <span>(+569) 12345678 ~ (+562) 98765432</span><br>
                                    <span><b><small>Porto Seguro #4955 ~ Santiago ~ Chile</small></b></span>
                                  </div>
                                  <div class='company-tax col-4 text-center'>
                                    <h1 style="margin-top: 10px;"><b>N° de orden:</b></h1>
                                    <h1 class="order text-center"><?= $workorder->ID ?></h1>
                                    <p><b>Fecha y Hora de emision: </b></p>
                                    <p><?= $workorder->CREATED_AT ?></p>
                                  </div>
                                </div>
                                <div class='client'>
                                  <div class="col-12">
                                    <h4 class="title text-decoration-underline text-center">Datos Del Propietario</h3>
                                  </div>
                                  <p class='col-12'><b>Rut Cliente: </b><?=$workorder->RUT_CLIENT?></p>
                                  <p class='col-12'><b>Nombre Cliente: </b>Alejandro Sebastian Santibanez Rodriguez</p>
                                  <p class='col-6'><b>Telefono de contacto:</b> </p>
                                  <p class='col-6'><b>Domicilio:</b> Av San Martín 83 ~ Sarandí</p>
                                  <p class='col-6'><b>Comuna de residencia:</b> Las Condes</p>
                                  <p class='col-6'><b>Correo de contaco:</b> Ejemplo@gmail.com</p>
                                  <div class="col-12">
                                    <h4 class="title text-decoration-underline text-center">Datos Del vehiculo</h3> 
                                    
                                  </div>
                                  <p class='col-6'><b>Marca:</b> Audi</p>
                                  <p class='col-6'><b>Modelo:</b> Q8</p>
                                  <p class='col-6'><b>Año:</b> </p>
                                  <p class='col-6'><b>N° de chasis:</b> #A5213212</p>
                                  <p class='col-6'><b>Tipo de combustible:</b> Bencina</p>
                                  <p class='col-6'><b>Observaciones: </b> <?=$workorder->OBSERVATIONS?></p>
                                </div>
                                <div class='footer'>
                                  <p class='col-3'>
                                    <b>Fecha de Recepción:</b>
                                    30/08/2017
                                  </p>
                                  <p class='col-3'>
                                    <b>Fecha de Entrega:</b>
                                    05/09/2017
                                  </p>
                                  <p class='col-6' style='text-align: justify'>
                                    <small>Pasados 15 días de la fecha acordada (fecha de ingreso) tendrá un cargo
                                      diario de ($1,00). Pasados 45
                                      días de la fecha acordada será considerada como abandono de equipo y la casa
                                      tendrá derecho a darle el
                                      destino que considere pertinente, según lo establecido por el código civil de
                                      C.N.</small>
                                  </p>
                                </div>
                                <div class="footer">
                                  <ol>
                                    <?php $total = 0; while ($service = $services->fetch_object()) { ?>
                                    <li><b><?= $service->NAME ?></b>
                                      <?= ' - ' . $service->DESCRIPTION . ' -  ' . $service->PRICE ?></li>
                                    <?php $total = $total + $service->PRICE; } echo '<b>Precio total de los servicios asignados:</b> $' . $total; ?>
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