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
                            <input type="text" name="id" class="form-control" id="validarId" required disabled>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Patente de vehiculo</label>
                            <select name="patent_vehicle" class="form-select">
                                <?php while ($vehicle = $vehicles->fetch_object()) : ?>
                                <option value="<?= $vehicle->PATENT ?>"><?= $vehicle->PATENT ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
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
                                <option value="<?= $mechanic->RUT ?>">
                                    <?= $mechanic->FIRSTNAME . ' ' . $mechanic->LASTNAME  ?>
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
                    <p>Con Chosen y las opciones por defecto<p>
                        <select name="chosen-multiple" class="chosen1" data-placeholder="Elige tus colores" multiple>
                        <option value="azul">Azul</option>
                        <option value="amarillo">Amarillo</option>
                        <option value="blanco">Blanco</option>
                        <option value="gris">Gris</option>
                        <option value="marron">Marrón</option>
                        <option value="naranja">Naranja</option>
                        <option value="negro">Negro</option>
                        <option value="rojo">Rojo</option>
                        <option value="verde">Verde</option>
                        <option value="violeta">Violeta</option>
                        </select>
            </form>
        </div>
    </div>
</div>
</div>