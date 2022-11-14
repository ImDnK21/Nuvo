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
                  <th>Servicios Solicitados</th>
                  <!-- <th>Fecha Creacion</th> -->
                </tr>
              </thead>
              <tbody>
                <?php while ($workorder = $workorders->fetch_object()): ?>
                <tr>
                  <td><?= $workorder->ID ?></td>
                  <td><?= $workorder->PATENT_VEHICLE?></td>
                  <td><?= $workorder->RUT_CLIENT?></td>
                  <td><?= $workorder->RUT_MECHANIC?></td>
                  <td><?= $workorder->OBSERVATIONS?></td>
                  <td><?= $workorder->SERVICE?></td>

                  <!-- <td><?= $workorder->CREATED_AT?></td> -->
                  <td>
                    <div class="icons">
                      <a href="<?= APP_URL . 'admin/EditOrder?id=' . $workorder->ID ?>" class="btn btn-warning btn-square btn-xs">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a class="btn btn-danger btn-square btn-xs" data-bs-toggle="modal" data-bs-target="#deleteVehicle<?=$workorder->ID?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="deleteVehicle<?=$workorder->ID?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header" style="color: red;">
                    <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar esta Orden de trabajo?</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <b>ID: <?= $workorder->ID ?></b>
                        <br>
                        Una vez eliminado, no podrás recuperarlo.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= APP_URL . 'admin/deleteOrder?id=' . $workorder->ID ?>"
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