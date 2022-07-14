<div class="container py-3">
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="<?= APP_URL . 'admin/UpdateClient' ?>" method="post">
        <div class="mb-3">
          <label class="form-label">RUT</label>
          <input type="text" name="rut" value="<?= $client->RUT ?>" readonly class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="firstname" value="<?= $client->FIRSTNAME ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Apellido paterno</label>
          <input type="text" name="lastname" value="<?= $client->LASTNAME ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Número de teléfono</label>
          <input type="text" name="phone" value="<?= $client->PHONE ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="text" name="email" value="<?= $client->EMAIL ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Dirección</label>
          <input type="text" name="address" value="<?= $client->ADDRESS ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Comuna</label>
          <input type="text" name="commune" value="<?= $client->COMMUNE ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Editar cliente</button>
      </form>
    </div>
  </div>
</div>