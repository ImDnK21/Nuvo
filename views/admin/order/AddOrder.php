<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Orden de Trabajo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/SaveOrder' ?>" method="post">
                <div class="row">



                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="form-label required"><b></label>Patente del vehiculo</b></label>
                            <select name="patent_vehicle" class="form-select">
                                <?php while ($vehicle = $vehicles->fetch_object()) : ?>
                                <option value="<?= $vehicle->PATENT ?>"><?= $vehicle->PATENT ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="form-label required"><b></label>Mecanico a cargo:</b></label>
                            <select name="rut_mechanic" class="form-select">
                                <?php while ($mechanic = $mechanics->fetch_object()) : ?>
                                <option value="<?= $mechanic->RUT ?>">
                                    <?= $mechanic->FIRSTNAME . ' ' . $mechanic->LASTNAME  ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="observations"><b>Observaciones</b></label>
                            <textarea name="observations" class="form-control"
                                placeholder="Ingrese las observaciones detectadas aqui "></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="selectpicker"><b></label>Servicios solicitados:</b></label>
                            <select name="services[]" class="chosen" data-placeholder="Seleccione Servicios" multiple>
                                <?php while ($service = $services->fetch_object()) : ?>
                                <option value="<?= $service->ID ?>">
                                    <?= $service->NAME      . '  ' . $service->PRICE  ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><b>Estado de orden de trabajo:</b></label>
                            <select name="id_status" class="form-select">
                                <option value="1">En Preparacion</option>
                                <option value="2">En Reparacion</option>
                                <option value="3">Finalizado</option>
                            </select>
                        </div>
                    </div>
                    
                   
                </div>
                <button type="submit" class="btn btn-primary">Agregar Orden de trabajo</button>
            </form>
        </div>
    </div>
</div>
</div>