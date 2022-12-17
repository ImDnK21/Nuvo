

<div class="container py-3">
  <div class="row">
    <div class="col-12 -9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de Servicios</h2>
        <a href="<?= APP_URL . 'admin/AddService' ?>" class="btn btn-primary mb-3">Agregar Servicio Automotriz</a>
        <div class="clontainer">
          <div class="col-xs-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar por id" id='q' onkeyup="load(1);">
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
            <table class="table" style="width: 100%; margin: auto; ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre del servicio automotriz</th>
                  <th>Descripcion del servicio</th>
                  <th>Precio del servicio ($)</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($service = $services->fetch_object()): ?>
                <tr>
                  <td><?= $service->ID ?></td>
                  <td><?= $service->NAME?></td>
                  <td><?= $service->DESCRIPTION?></td>
                  <td>$<?= $service->PRICE?></td>
                  <!-- <td><?= $category->CREATED_AT?></td> -->


                  
                  <td>
                    <div class="icons">
                      <a href="<?= APP_URL . 'admin/EditService?id=' . $service->ID ?>" type="button"
                        class="btn btn-warning btn-square btn-xs">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a type="button" class="btn btn-danger btn-square btn-xs" data-bs-toggle="modal"
                        data-bs-target="#deleteService<?=$service->ID?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="deleteService<?=$service->ID?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header" style="color: red ;">
                    <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar este servicio Automotriz?</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <b>ID Servicio: <?= $service->ID ?></b>
                        <br>
                        <b>Nombre: <?= $service->NAME ?></b>

                        <br>
                        Una vez eliminado, no podrás recuperarla.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= APP_URL . 'admin/deleteService?id=' . $service->ID ?>"
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