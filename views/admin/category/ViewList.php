


<div class="container py-3">
  <div class="row">
    <div class="col-12 -9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de Categorias</h2>
        <a href="<?= APP_URL . 'admin/AddCategory' ?>" class="btn btn-primary mb-3">Agregar Categoria de Insumo</a>
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
                  <th>Nombre de la Categoria</th>
                  <th>Fecha de creacion</th>

                </tr>
              </thead>
              <tbody>
                <?php while ($category = $categories->fetch_object()): ?>
                <tr>
                  <td><?= $category->ID ?></td>
                  <td><?= $category->NAME_CATEGORY?></td>
                  <!-- <td><?= $category->CREATED_AT?></td> -->


                  
                  <td>
                    <div class="icons">
                      <a href="<?= APP_URL . 'admin/EditCategory?id=' . $category->ID ?>" type="button" class="btn btn-warning btn-square btn-xs">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a type="button" class="btn btn-danger btn-square btn-xs" data-bs-toggle="modal" data-bs-target="#deleteCategory<?=$category->ID?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="deleteCategory<?=$category->ID?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header" style="color: red ;">
                    <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar esta Categoria?</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <b>ID Categoria: <?= $category->ID ?></b>
                        <br>
                        <b>Nombre: <?= $category->NAME_CATEGORY ?></b>

                        <br>
                        Una vez eliminado, no podrás recuperarla.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= APP_URL . 'admin/deleteCategory?id=' . $category->ID ?>"
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