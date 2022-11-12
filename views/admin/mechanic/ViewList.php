<div class="container py-3">
  <div class="row">
    <div class="col-12">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de Mecanicos</h2>
        <a href="<?= APP_URL . 'admin/AddMechanic' ?>" class="btn btn-primary mb-3">Agregar Mecanico</a>
        <div class="clontainer">
          <div class="col-xs-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar por nombre" id='q' onkeyup="load(1);">
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
                  <th>Direccion</th>
                  <th>Comuna</th>
                  <th>Correo</th>
                  <!-- <th>Fecha Creacion</th> -->
                </tr>
              </thead>
              <tbody>
                <?php while ($mechanic = $mechanics->fetch_object()): ?>
                <tr>
                  <td><?= $mechanic->RUT ?></td>
                  <td><?= $mechanic->FIRSTNAME . ' ' . $mechanic->LASTNAME?></td>
                  <td><?= $mechanic->PHONE?></td>
                  <td><?= $mechanic->ADDRESS?></td>
                  <td><?= $mechanic->COMMUNE?></td>
                  <td><?= $mechanic->EMAIL ?></td>
                  <!-- <td><?= $mechanic->CREATED_AT ?></td> -->
                  <td>
                    <div class="icons">
                      <a href="<?= APP_URL . 'admin/EditMechanic?rut=' . $mechanic->RUT ?>" type="button" class="btn btn-warning btn-square btn-xs">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a type="button" class="btn btn-danger btn-square btn-xs" data-bs-toggle="modal" data-bs-target="#deleteMechanic<?= str_replace(array(".", "-"), "", $mechanic->RUT) ?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="deleteMechanic<?= str_replace(array(".", "-"), "", $mechanic->RUT) ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar este mecanico?</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <b>RUT: <?= $mechanic->RUT ?></b>
                        <br>
                        Una vez eliminado, no podrás recuperarlo.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= APP_URL . 'admin/deleteMechanic?rut=' . $mechanic->RUT ?>" class="btn btn-danger">Eliminar</a>
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