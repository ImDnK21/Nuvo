<div class="container py-3">
<?php if (isset($_SESSION['savePatentVehicle']) && ($_SESSION['savePatentVehicle']) == 'La patente ingresada ya se encuentra registrada') : ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>La patente ingresada ya se encuentra registrada</strong>
    <button type="button" data-bs-dismiss="alert" aria-label="Cerrar" class="btn-close"></button>
  </div>
  <?php unset($_SESSION['savePatentVehicle']); ?>
  <?php endif; ?>
<?php if (isset($_SESSION['saveVehicle']) && isset($_SESSION['saveVehicle_message_type'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" <?= $_SESSION['saveVehicle_message_type'] ?> >
      <?= $_SESSION['saveVehicle'] ?>
      <button type="button" data-bs-dismiss="alert" aria-label="Cerrar" class="btn-close"></button>
    </div>
    <?php unset($_SESSION['saveVehicle']);
          unset($_SESSION['saveVehicle_message_type']);
        endif; ?>
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Vehiculo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/saveVehicle' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="patent" class="form-label required"> <span style="color: red;"> * </span>
                                Patente </label>
                            <input type="text" name="patent" value="<?= Utils::old('patent') ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="owner" class="form-label required">Propietario</label>
                            <select name="owner" class="form-select">
                                <?php while ($client = $clients->fetch_object()) : ?>
                                <option value="<?= $client->RUT ?>"><?= $client->FIRSTNAME . ' ' . $client->LASTNAME  ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="brand" class="form-label required"> <span style="color: red;"> * </span>
                                Marca</label>
                            <input type="text" name="brand" value="<?= Utils::old('brand') ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="model" class="form-label required"> <span style="color: red;"> * </span>
                                Modelo</label>
                            <input type="text" name="model" value="<?= Utils::old('model') ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="year" class="form-label required">Año de Fabricacion</label>
                            <input type="number" name="year" value="<?= Utils::old('year') ?>" class="form-control"
                                placeholder="YYYY" min="1980" max="2023">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="id_fuel_type" class="form-label required">Tipo de Combustible</label>
                            <select name="id_fuel_type" class="form-select">
                                <option selected="selected" value="1">Bencina</option>
                                <option value="2">Diesel</option>
                                <option value="3">Electrico</option>
                                <option value="4">Gas Natural</option>
                                <option value="5">Hibrido (Bencina - Gas)
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="id_transmission" class="form-label required">Transmision</label>
                            <select name="id_transmission" class="form-select">
                                <option selected="selected" value="1">Mecanico</option>
                                <option value="2">Automatico</option>
                                <option value="3">CVT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-4">
                            <label for="color" class="form-label required">Color Primario</label>
                            <div class="control">
                                <input type="color" name="color" value="<?= Utils::old('color') ?>"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="chassis_number" class="form-label required">N° de Chasis</label>
                            <input type="text" name="chassis_number" maxlength="10" value="<?= Utils::old('chassis_number') ?>"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="mileage" class="form-label required">Kilometraje</label>
                            <input type="number" min="1" name="mileage" value="<?= Utils::old('mileage') ?>" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="vehicle_type" class="form-label required">Tipo de Vehiculo</label>
                            <select name="id_vehicle_type" class="form-select">
                                <option selected="selected" value="1">Sedan</option>
                                <option value="2">Station Wagon</option>
                                <option value="3">HatchBack</option>
                                <option value="4">SUV</option>
                                <option value="5">Deportivo</option>
                                <option value="6">Vehiculo Comercial</option>
                                <option value="7">VAN</option>
                                <option value="8">PickUp</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="float-start">
                            <span class="required"><span style="color: red;"> * </span>: campo obligatorio</span>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Agregar Vehiculo</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>