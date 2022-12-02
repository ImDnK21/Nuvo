<!-- <?php if(isset($_SESSION['supply']) && $_SESSION['supply'] == 'complete'): ?>
<strong class="alert_green">El insumo se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['supply']) && $_SESSION['supply'] != 'complete'): ?>
<strong class="alert_red">El insumo NO se ha creado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('supply'); ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
<strong class="alert_green">El insumo se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
<strong class="alert_red">El insumo NO se ha borrado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?> -->

<div class="container py-3">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <h2 class="fw-bold mb-3">Lista de Insumos</h2>
                <a href="<?= APP_URL . 'admin/AddSupply' ?>" class="btn btn-primary mb-3">Agregar Insumo</a>
                <a href="<?= APP_URL . 'admin/ViewCatalog' ?>" class="btn btn-primary mb-3">Ver Catalogo</a>

                <div class="clontainer">
                    <div class="col-xs-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar por nombre" size="50" id='q'
                                onkeyup="load(1);">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick='load(1);'><i
                                        class='fa fa-search'></i></button>
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
                                    <th>Id Insumo</th>
                                    <th>Nombre Categoria</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Stock</th>
                                    <th>Fecha Creacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($supply = $supplies->fetch_object()): ?>
                                <tr>
                                    <!-- <td><?= var_dump($supply) ?></td> -->
                                    <td><?= $supply->ID_SUPPLY ?></td>
                                    <td><?= $supply->NAME_CATEGORY?></td>
                                    <td><?= $supply->NAME?></td>
                                    <td><?= $supply->DESCRIPTION ?></td>
                                    <td><?= $supply->STOCK ?></td>
                                    <td><?= $supply->CREATED_AT ?></td>
                                    <td>
                                        <div class="icons">
                                            <a href="<?= APP_URL . 'admin/EditSupply?id=' . $supply->ID_SUPPLY ?>"
                                                type="button" class="btn btn-warning btn-square btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a type="button" class="btn btn-danger btn-square btn-xs"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteSupply<?= str_replace(array(".", "-"), "", $supply->ID_SUPPLY) ?>">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade"
                                    id="deleteSupply<?= str_replace(array(".", "-"), "", $supply->ID_SUPPLY) ?>" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="color: red;">
                                                <h5 class=" modal-title fs-6 fw-bold">¿Estás seguro que deseas eliminar
                                                    este insumo?</h5>
                                                <button type="button" data-bs-dismiss="modal"
                                                    class="btn-close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <b>ID insumo : <?= $supply->ID_SUPPLY ?></b>
                                                <br>
                                                <b>Nombre : <?= $supply->NAME ?></b>
                                                <br>
                                                Una vez eliminado, no podrás recuperarlo. </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <a href="<?= APP_URL . 'admin/deleteSupply?id=' . $supply->ID_SUPPLY ?>"
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
</div>