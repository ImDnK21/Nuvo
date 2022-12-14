
<div class="container py-3">
<?php if (isset($_SESSION['editVehicle']) && isset($_SESSION['editVehicle_message_type'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" <?= $_SESSION['editVehicle_message_type'] ?> >
      <?= $_SESSION['editVehicle'] ?>
      <button type="button" data-bs-dismiss="alert" aria-label="Cerrar" class="btn-close"></button>
    </div>
    <?php unset($_SESSION['editVehicle']);
          unset($_SESSION['editVehicle_message_type']);
        endif; ?>
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Vehiculo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/UpdateVehicle' ?>" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="patent" class="form-label required" >Patente</label>
                            <input type="text" name="patent" value="<?=$vehicle->PATENT?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="owner" class="form-label required">Propietario</label>
                            <select name="owner" class="form-select" >
                                <?php while ($client = $clients->fetch_object()) : ?>
                                <option value="<?= $client->RUT ?>" <?php
                                if ($client->RUT == $vehicle->OWNER) {
                                    echo 'selected';
                                }
                                ?>
                                ><?= $client->FIRSTNAME . ' ' . $client->LASTNAME  ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="brand" class="form-label required">Marca</label>
                            <input type="text" name="brand" value="<?=$vehicle->BRAND?>" class="form-control">
                    </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="model" class="form-label required">Modelo</label>
                            <input type="text" name="model" value="<?=$vehicle->MODEL ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="year" class="form-label required">Año de Fabricacion</label>
                            <input type="number" name="year" value="<?=$vehicle->YEAR?>" class="form-control"
                                placeholder="YYYY" min="1980" max="2023">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="id_fuel_type" class="form-label required"  >Tipo de Combustible</label>
                            <select name="id_fuel_type" class="form-select" >
                            <option value="<?php echo $vehicle->ID_FUEL;?>" hidden><?php echo $vehicle->FUEL_NAME;?></option>
                                <option value="1">Bencina</option>
                                <option value="2">Diesel</option>
                                <option value="3">Electrico</option>
                                <option value="4">Gas Natural</option>
                                <option value="4">Hibrido (Bencina - Gas)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="id_transmission" class="form-label required" >Transmision</label>
                            <select name="id_transmission" class="form-select" >
                                <option value="<?php echo $vehicle->ID_TRANSMISSION;?>" hidden><?php echo $vehicle->NAME_TRANSMISSION;?></option>
                                <option value="1">Mecanico</option>
                                <option value="2">Automatico</option>
                                <option value="3">CVT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-4">
                            <label for="color" class="form-label required">Color Primario</label>
                            <div class="control">
                                <input type="color" name="color" value="<?=$vehicle->COLOR ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="chassis_number" class="form-label required">N° de Chasis</label>
                            <input type="text" name="chassis_number" value="<?=$vehicle->CHASSIS_NUMBER?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="mileage" class="form-label required">Kilometraje</label>
                            <input type="text" name="mileage" value="<?=$vehicle->MILEAGE ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="vehicle_type" class="form-label required">Tipo de Vehiculo</label>
                            <select name="id_vehicle_type" class="form-select">
                                <option value="<?php echo $vehicle->ID_TYPE_VEHICLE;?>" hidden><?php echo $vehicle->NAME;?></option>
                                <option value="1">Sedan</option>
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
                        <button type="submit" class="btn btn-primary float-end">Editar Vehiculo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>