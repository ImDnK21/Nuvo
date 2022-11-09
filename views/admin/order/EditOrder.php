<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Editar Orden de Trabajo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/SaveOrder' ?>" method="post">
                <div class="row">
                  <div class="col-12 col-md-4">
                    <div class="mb-3">
                      <label class="form-label">ID</label>
                      <input type="text" name="id" class="form-control" value="<?= $order->ID ?>" readonly>
                    </div>
                  </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Patente de vehiculo</label>
                            <select name="patent_vehicle" class="form-select">
                                <?php while ($vehicle = $vehicles->fetch_object()) : ?>
                                <option value="<?= $vehicle->PATENT ?>" <?= ($vehicle->PATENT == $order->PATENT_VEHICLE) ? 'selected' : '' ?>><?= $vehicle->PATENT ?>
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
                                <option value="<?= $client->RUT ?>" <?= ($client->RUT == $order->RUT_CLIENT) ? 'selected' : '' ?>><?= $client->FIRSTNAME . ' ' . $client->LASTNAME  ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="rut_mechanic" class="form-label required">Rut de mecanico</label>
                            <select name="rut_mechanic" class="form-select">
                                <?php while ($mechanic = $mechanics->fetch_object()) : ?>
                                <option value="<?= $mechanic->RUT ?>" <?= ($mechanic->RUT == $order->RUT_MECHANIC) ? 'selected' : '' ?>>
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
                    <div class="col-12 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Servicios</label>
                        <select id="select" multiple>
                          <option value="1">Lavado</option>
                          <option value="2">Pintado</option>
                          <option value="3">Reparación</option>
                        </select>
                        <input type="text" id="servicios" name="services" hidden>
                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>
</div>