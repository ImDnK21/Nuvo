<div class="container py-3">
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="<?= APP_URL . 'admin/UpdateMechanic' ?>" method="post">
        <div class="mb-3">
          <label class="form-label">RUT</label>
          <input type="text" name="rut" value="<?= $mechanic->RUT ?>" class="form-control" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="firstname" value="<?= $mechanic->FIRSTNAME ?>" class="form-control">
        </div>
          <div class="mb-3">
            <label class="form-label">Apellido paterno</label>
            <input type="text" name="lastname" value="<?= $mechanic->LASTNAME ?>" class="form-control">
          </div>
        <div class="mb-3">
          <label class="form-label">Dirección</label>
          <input type="text" name="address" value="<?= $mechanic->ADDRESS ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Comuna</label>
          <input type="text" name="commune" value="<?= $mechanic->COMMUNE ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Telefono de Contacto</label>
          <input type="text" name="phone" value="<?= $mechanic->PHONE ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="text" name="email" value="<?= $mechanic->EMAIL ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Editar Mecanico</button>
      </form>
    </div>
  </div>
</div>