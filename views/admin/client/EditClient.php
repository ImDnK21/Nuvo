

<div class="container py-3">
  <?php if (isset($_SESSION['editClient']) && isset($_SESSION['editClient_message_type'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" <?= $_SESSION['editClient_message_type'] ?> >
      <?= $_SESSION['editClient'] ?>
      <button type="button" data-bs-dismiss="alert" aria-label="Cerrar" class="btn-close"></button>
    </div>
    <?php unset($_SESSION['editClient']);
          unset($_SESSION['editClient_message_type']);
        endif; ?>
  <div class="card">
    <div class="card-header">
      <span class="fw-bold">Editar Cliente</span>
    </div>
    <div class="card-body">
      <form action="<?= APP_URL . 'admin/UpdateClient' ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="mb-3">
              <label class="form-label"><span style="color: red;">*</span><b> Rut: </b><span style="color: red;">*</span></label>
              <input type="text" name="rut" class="form-control" id="validarRut" value="<?= $client->RUT ?>" required readonly>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="mb-3">
              <label class="form-label"><span style="color: red;">*</span><b> Nombres: </b><span style="color: red;">*</span></label>
              <input type="text" name="firstname" class="form-control" value="<?= $client->FIRSTNAME ?>">
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="mb-3">
              <label class="form-label"><span style="color: red;">*</span><b> Apellidos: </b><span style="color: red;">*</span></label>
              <input type="text" name="lastname" class="form-control" value="<?= $client->LASTNAME ?>">
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3">
              <label class="form-label"><b> Telefono de contacto: (+569XXXXXXXX) </b></label>
              <input type="text" name="phone" class="form-control" maxlength="12" value="<?= $client->PHONE ?>">
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="mb-3">
              <label class="form-label"><b>Direccion:</b></label>
              <input type="text" name="address" class="form-control" value="<?= $client->ADDRESS ?>">
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3">
              <label class="form-label" ><b> Comuna: </b></label>
              <select name="id_commune" class="form-select" >
                <option value="<?php echo $client->ID_COMMUNE;?>" hidden><?php echo $client->NOMBRE;?></option>
                <option value="1">La Florida</option>
                <option value="2">Cerrillos</option>
                <option value="3">Cerro Navia</option>
                <option value="4">Conchalí</option>
                <option value="5">El Bosque</option>
                <option value="6">Estación Central</option>
                <option value="7">Huechuraba</option>
                <option value="8">Independencia</option>
                <option value="9">La Cisterna</option>
                <option value="10">La Granja</option>
                <option value="11">La Pintana</option>
                <option value="12">La Reina</option>
                <option value="13">Las Condes</option>
                <option value="14">Lo Barnechea</option>
                <option value="15">Lo Espejo</option>
                <option value="16">Lo Prado</option>
                <option value="17">Macul</option>
                <option value="18">Maipú</option>
                <!-- <option value="19">Ñuñoa</option> -->
                <option value="20">Pedro Aguirre Cerda</option>
                <!-- <option value="21">Peñalolén</option> -->
                <option value="22">Providencia</option>
                <option value="23">Pudahuel</option>
                <option value="24">Quilicura</option>
                <option value="25">Quinta Normal</option>
                <option value="26">Recoleta</option>
                <option value="27">Renca</option>
                <option value="28">San Joaquín</option>
                <option value="29">San Miguel</option>
                <option value="30">San Ramón</option>
                <option value="31">Vitacura</option>
                <option value="32">Puente Alto</option>
                <option value="33">Pirque</option>
                <option value="34">San José de Maipo</option>
                <option value="35">Colina</option>
                <option value="36">Lampa</option>
                <option value="37">San Bernardo</option>
                <option value="38">Buin</option>
                <!-- <option value="39">Peñaflor</option> -->
                
              </select>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="mb-3">
              <label class="form-label"><b> Correo electrónico:</b></label>
              <input type="email" name="email" class="form-control" value="<?= $client->EMAIL ?>">
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3">
              <label class="form-label" ><b> Fecha de creacion:</b></label>
              <input type="text" name="date" class="form-control" value="<?= $client->CREATED_AT ?> " readonly>
            </div>
          </div>

          <div class="col-12">
            <div class="float-start">
              <span class="required"><span style="color: red;"> * </span>: campo obligatorio</span>
            </div>
            <button type="submit" class="btn btn-primary float-end">Editar Cliente</button>
          </div>
        </div>



      </form>
    </div>
  </div>
</div>