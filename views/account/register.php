<?php if (!isset($_SESSION['logged'])) : ?>
  <div class="login-register">
    <div class="login-box register">
      <?php if (isset($_SESSION['signup_message']) && isset($_SESSION['signup_message_type'])) : ?>
        <div class="alert alert-<?= $_SESSION['signup_message_type'] ?> alert-dismissible fade show">
          <?= $_SESSION['signup_message'] ?>
          <button type="button" data-bs-dismiss="alert" aria-label="Cerrar" class="btn-close"></button>
        </div>
      <?php unset($_SESSION['signup_message']);
        unset($_SESSION['signup_message_type']);
      endif; ?>
      <h2>Registrarse</h2>
      <form action="<?= APP_URL . 'account/signup' ?>" method="POST">
        <div class="user-box register">
          <input type="text" name="id" required="">
          <label>ID orden de trabajo</label>
        </div>
        <div class="user-box">
          <input type="text" name="rut" required="" maxlength="10">
          <label>Rut</label>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="user-box">
              <input type="text" name="firstname" required="">
              <label>Nombre</label>
            </div>
          </div>
          <div class="col-6">
            <div class="user-box">
              <input type="text" name="lastname" required="">
              <label>Apellido</label>
            </div>
          </div>
        </div>
        <div class="user-box">
          <input type="email" name="email" required="">
          <label>Correo Electronico</label>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="user-box">
              <input type="password" name="password" required="">
              <label>Contraseña</label>
            </div>
          </div>
          <div class="col-6">
            <div class="user-box">
              <input type="password" name="confirm-password" required="">
              <label>Confirmar Contraseña</label>
            </div>
          </div>
        </div>
        <button type="submit">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Ingresar
        </button>
      </form>
    </div>
  </div>
<?php else : header('Location: ' . APP_URL . 'admin/dashboard');
endif; ?>