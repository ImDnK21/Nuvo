<div class="container py-3 mb-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 mb-3">
      <div class="card" style="margin-top:60px ;">
        <div class="card-header">Datos Personales</div>
        <div class="card-body">
          <?php if (isset($_SESSION['profile_message']) && isset($_SESSION['profile_message_type'])) : ?>
          <div class="alert alert-<?= $_SESSION['profile_message_type'] ?> alert-dismissible fade show">
            <?= $_SESSION['profile_message'] ?>
            <button type="button" data-bs-dismiss="alert" aria-label="Cerrar" class="btn-close"></button>
          </div>
          <?php unset($_SESSION['profile_message']);
            unset($_SESSION['profile_message_type']);
          endif; ?>
          <form action="<?= APP_URL . 'account/update' ?>" method="POST">
            <div class="mb-3">
              <label for="rut" class="form-label">Rut:</label>
              <input type="text" name="rut" class="form-control" value="<?= $account->RUT ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="firstname" class="form-label">Nombre:</label>
              <input type="text" name="firstname" class="form-control" value="<?= $account->FIRSTNAME ?>">
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label">Apellido</label>
              <input type="text" name="lastname" class="form-control" value="<?= $account->LASTNAME ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo electronico</label>
              <input type="text" name="email" class="form-control" value="<?= $account->EMAIL ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>