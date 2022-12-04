<div class="container py-3">
  <div class="card">
    <div class="card-header">
      <span class="fw-bold">Editar Orden de Trabajo</span>
    </div>
    <div class="card-body">
      <form action="<?= APP_URL . 'admin/UpdateOrder' ?>" method="post">
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
                <option value="<?= $vehicle->PATENT ?>"
                  <?= ($vehicle->PATENT == $order->PATENT_VEHICLE) ? 'selected' : '' ?>><?= $vehicle->PATENT ?>
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
          
          <div class="col-12 col-md-6">
            <div class="mb-3">
              <label class="form-label" for="observations"><b>Observaciones</b></label>
              <!-- <textarea name="observations" class="form-control"
                placeholder="Ingrese las observaciones detectadas aqui "></textarea> -->
                <!-- <input type="text" name="id" class="form-control" vale readonly> -->
                <textarea name="order" class="form-control" ><?=$order->OBSERVATIONS?></textarea>

            </div>
          </div>
          

          <div class="col-12 col-md-6">
            <div class="mb-3">
              <label class="form-label"><b>Estado de orden de trabajo:</b></label>
              <select name="status" class="form-select">
                <option value="En Preparacion">En Preparacion</option>
                <option value="En Reparacion">En Reparacion</option>
                <option value="Finalizado">Finalizado</option>
              </select>
            </div>
          </div>


        </div>
        <button type="submit" class="btn btn-primary">Editar Orden de trabajo</button>
      </form>
    </div>
  </div>
</div>
</div>