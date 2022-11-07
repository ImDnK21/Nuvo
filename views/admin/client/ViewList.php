<div class="container py-3">
  <div class="row">
    <div class="col-12">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de clientes</h2>
        <a href="<?= APP_URL . 'admin/AddClient' ?>" class="btn btn-primary mb-3">Agregar cliente</a>
        <div class="clontainer">
          <div class="col-xs-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar por nombre" size="50" id='q' onkeyup="load(1);">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick='load(1);'><i class='fa fa-search'></i></button>
              </span>
            </div>
          </div>
          <div class="col-xs-3"></div>
          <div class="col-xs-1">
            <div id="loader" class="text-center"></div>
          </div>
          <div class="table-responsive-xxl">
            <table class="table">
              <thead>
                <tr>
                  <th>RUT</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Dirección</th>
                  <th>Comuna</th>
                  <th>Fecha Creacion</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($client = $clients->fetch_object()): ?>
                <tr>
                  <td><?= $client->RUT ?></td>
                  <td><?= $client->FIRSTNAME . ' ' . $client->LASTNAME ?></td>
                  <td><?= $client->PHONE ?></td>
                  <td><?= $client->EMAIL ?></td>
                  <td><?= $client->ADDRESS ?></td>
                  <td><?= $client->COMMUNE ?></td>
                  <!-- <td><?= $client->CREATED_AT ?></td> -->
                  <td>
                    <div class="icons">
                      <a href="<?= APP_URL . 'admin/EditClient?rut=' . $client->RUT ?>" type="button" class="btn btn-warning btn-square btn-xs">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a type="button" class="btn btn-danger btn-square btn-xs" data-bs-toggle="modal" data-bs-target="#deleteClient<?= str_replace(array(".", "-"), "", $client->RUT) ?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="deleteClient<?= str_replace(array(".", "-"), "", $client->RUT) ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header" style="color: red;">
                        <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar este cliente?</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <b>RUT : <?= $client->RUT ?></b> 
                        <br>
                        Una vez eliminado, no podrás recuperarlo.
                        <br><b><span style="color: red;">Si Eliminas este cliente, se eliminara el vehiculo asociado a este cliente </span></b>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= APP_URL . 'admin/deleteClient?rut=' . $client->RUT ?>" class="btn btn-danger">Eliminar</a>
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
</div>