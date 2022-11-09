<div class="container-fluid d-flex justify-content-center align-items-center" style="height: calc(100vh - 62px)">
  <div class="d-block text-center">
    <h1 class="fs-2">Error</h1>
    <h2 class="fs-1 fw-bold">Aun no tienes un vehiculo registrado</h2>
    <p class="fs-5">Contactese con el taller</p>
  </div>
</div>

<?php
  if (isset($_SESSION['message'])) {
    echo "hola";

  }
    else{
      echo "adios";

    }
?>