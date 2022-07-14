<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Orden de Trabajo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/SaveOrder' ?>" method="post">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Id Orden</label>
                            <input type="text" name="id" class="form-control" id="validarId" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Patente de vehiculo</label>
                            <input type="text" name="patent_vehicule" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="rut_client" class="form-label required">Rut de cliente</label>
                            <select name="rut_client" class="form-select">
                                <?php while ($client = $clients->fetch_object()) : ?>
                                <option value="<?= $client->RUT ?>"><?= $client->FIRSTNAME . ' ' . $client->LASTNAME  ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="rut_mechanic" class="form-label required">Rut de mecanico</label>
                            <select name="rut_mechanic" class="form-select">
                                <?php while ($mechanic = $mechanics->fetch_object()) : ?>
                                <option value="<?= $mechanic->RUT ?>"><?= $mechanic->FIRSTNAME . ' ' . $mechanic->LASTNAME  ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Observaciones</label>
                            <input type="text" name="observations" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-primary" id="btnvalida">Agregar Orden</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>