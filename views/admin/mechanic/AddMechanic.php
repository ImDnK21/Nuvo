<!-- <div class="container py-3">
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="<?= APP_URL . 'admin/SaveMechanic' ?>" method="post">
        <div class="mb-3">
          <label class="form-label">RUT</label>
          <input type="text" name="rut" class="form-control" id="validarRut" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="firstname" class="form-control">
        </div>
        <div class="row">
            <div class="mb-3">
              <label class="form-label">Apellido paterno</label>
              <input type="text" name="lastname" class="form-control">

          </div>
        <div class="mb-3">
          <label class="form-label">Teléfono de contacto</label>
          <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Dirección</label>
          <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Comuna</label>
          <input type="text" name="commune" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="text" name="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary" id="btnvalida">Agregar Mecanico</button>
      </form>
    </div>
  </div>
</div> -->
<div class="container py-3">
  <div class="card">
    <div class="card-header">
      <span class="fw-bold">Agregar Mecanico</span>
    </div>
    <div class="card-body">
      <form class="needs-validation" action="<?= APP_URL . 'admin/SaveMechanic' ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="mb-3">
              <label class="form-label"><span style="color: red;">*</span><b> Rut: (Ej: XXXXXXXX-X) </b><span style="color: red;">*</span></label>
              <input type="text" name="rut" class="form-control" id="validarRut" required>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="mb-3">
              <label class="form-label"><span style="color: red;">*</span><b> Nombres: </b><span style="color: red;">*</span></label>
              <input type="text" name="firstname" class="form-control" required>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="mb-3">
              <label class="form-label"><span style="color: red;">*</span><b> Apellidos: </b><span style="color: red;">*</span></label>
              <input type="text" name="lastname" class="form-control" required>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3">
              <label class="form-label"><span style="color: red;">*</span><b> Telefono de contacto: (+569XXXXXXXX) </b><span style="color: red;">*</span> </label>
              <input type="text" name="phone" class="form-control" maxlength="12" required>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="mb-3">
              <label class="form-label"><b>Direccion:</b></label>
              <input type="text" name="address" class="form-control" required>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3">
              <label class="form-label"><b> Comuna: </b></label>
              <select name="commune" class="form-select" required>
                <option selected="selected" value="La Florida">La Florida</option>
                <option value="Cerrillos">Cerrillos</option>
                <option value="Cerro Navia">Cerro Navia</option>
                <option value=" Conchalí">Conchalí</option>
                <option value=" El Bosque">El Bosque</option>
                <option value=" Estación Central">Estación Central</option>
                <option value=" Huechuraba">Huechuraba</option>
                <option value=" Independencia">Independencia</option>
                <option value=" La Cisterna">La Cisterna</option>
                <option value=" La Granja">La Granja</option>
                <option value=" La Pintana">La Pintana</option>
                <option value=" La Reina">La Reina</option>
                <option value=" Las Condes">Las Condes</option>
                <option value=" Lo Barnechea">Lo Barnechea</option>
                <option value=" Lo Espejo">Lo Espejo</option>
                <option value=" Lo Prado">Lo Prado</option>
                <option value=" NatuMaculral">Macul</option>
                <option value=" Maipú">Maipú</option>
                <option value=" Ñuñoa">Ñuñoa</option>
                <option value=" Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                <option value=" Peñalolén">Peñalolén</option>
                <option value=" Providencia">Providencia</option>
                <option value=" Pudahuel">Pudahuel</option>
                <option value=" Quilicura">Quilicura</option>
                <option value=" Quinta Normal">Quinta Normal</option>
                <option value=" Recoleta">Recoleta</option>
                <option value=" Renca">Renca</option>
                <option value=" San Joaquín">San Joaquín</option>
                <option value=" San Miguel">San Miguel</option>
                <option value=" San Ramón">San Ramón</option>
                <option value=" Vitacura">Vitacura</option>
                <option value=" Puente Alto">Puente Alto</option>
                <option value=" Pirque">Pirque</option>
                <option value=" San José de Maipo">San José de Maipo</option>
                <option value=" Colina">Colina</option>
                <option value=" Lampa">Lampa</option>
                <option value=" San Bernardo">San Bernardo</option>
                <option value=" Buin">Buin</option>
                <option value=" Peñaflor">Peñaflor</option>
                </option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-12">
            <div class="mb-3">
              <label class="form-label"><b> Correo electrónico:</b></label>
              <input type="text" name="email" class="form-control" required>
            </div>
          </div>

          <div class="col-12">
            <div class="float-start">
              <span class="required"><span style="color: red;"> * </span>: campo obligatorio</span>
            </div>
            <button type="submit" class="btn btn-primary float-end">Agregar Cliente</button>
          </div>
        </div>



      </form>
    </div>
  </div>
</div>