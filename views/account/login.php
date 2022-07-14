<?php if(!isset($_SESSION['logged'])): ?>
<div class="login-register">
  <div class="login-box">
    <?php if (isset($_SESSION['login_message']) && isset($_SESSION['login_message_type'])): ?>
    <div class="alert alert-<?= $_SESSION['login_message_type'] ?> alert-dismissible fade show">
      <?= $_SESSION['login_message'] ?>
      <button type="button" data-bs-dismiss="alert" aria-label="Cerrar" class="btn-close"></button>
    </div>
    <?php unset($_SESSION['login_message']); unset($_SESSION['login_message_type']); endif; ?>
    <h2>Iniciar Sesion</h2>
    <form action="<?= APP_URL . 'account/signin' ?>" method="POST">
      <div class="user-box">
        <input type="text" name="email" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
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
<?php else: header('Location: ' . APP_URL . 'admin/dashboard');
endif; ?>