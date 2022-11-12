<div class="container py-3">
  <div class="row">
    <div class="col-12 -9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de vehiculos</h2>
        <a href="<?= APP_URL . 'admin/AddVehicle' ?>" class="btn btn-primary mb-3">Agregar Vehiculo</a>
        <div class="clontainer">
          <div class="col-xs-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar por nombre" id='q' onkeyup="load(1);">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick='load(1);'><i class='fa fa-search'></i></button>
              </span>
            </div><!-- /input-group -->
          </div>
          <div class="col-xs-3"></div>
          <div class="col-xs-1">
            <div id="loader" class="text-center"></div>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Patente</th>
                  <th>Propietario</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Año Fabricacion</th>
                  <!-- <th>Tipo de combustible</th> -->
                  <!-- <th>transmision</th> -->
                  <!-- <th>Color</th> -->
                  <th>N° de chasis</th>
                  <th>Kilometraje</th>
                  <th>Tipo de vehiculo</th>
                  <!-- <th>Fecha Creacion</th> -->
                </tr>
              </thead>
              <tbody>
                <?php while ($vehicle = $vehicles->fetch_object()): ?>
                <tr>
                  <td><?= $vehicle->PATENT ?></td>
                  <td><?= $vehicle->FIRSTNAME . ' ' . $vehicle->LASTNAME  ?></td>
                  

                  <td><?= $vehicle->BRAND ?></td>
                  <td><?= $vehicle-> MODEL ?></td>
                  <td><?= $vehicle->YEAR ?></td>
                  
                  <!-- <td><?= $vehicle->FUEL_TYPE ?></td> -->
                  <!-- <td><?= $vehicle->TRANSMISSION ?></td> -->
                  <!-- <td><?= $vehicle->COLOR ?></td> -->
                  <td><?= $vehicle->CHASSIS_NUMBER ?></td>
                  <td><?= $vehicle->MILEAGE ?></td>
                  <td><?= $vehicle->VEHICLE_TYPE?></td>
                  <!-- <td><?= $vehicle->CREATED_AT ?></td> -->
                  <td>
                    <div class="icons">
                      <a href="<?= APP_URL . 'admin/EditVehicle?patent=' . $vehicle->PATENT ?>" type="button"
                        class="btn btn-warning btn-square btn-xs">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a type="button" class="btn btn-danger btn-square btn-xs" data-bs-toggle="modal"
                        data-bs-target="#deleteVehicle<?=$vehicle->PATENT?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="deleteVehicle<?=$vehicle->PATENT?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header" style="color: red ;">
                    <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar este Vehiculo?</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <b>Patente: <?= $vehicle->PATENT ?></b>
                        <br>
                        <b>Marca: <?= $vehicle->BRAND ?></b>
                        <br>
                        <b>Modelo: <?= $vehicle->MODEL ?></b>
                        <br>
                        Una vez eliminado, no podrás recuperarlo.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= APP_URL . 'admin/deleteVehicle?patent=' . $vehicle->PATENT ?>"
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