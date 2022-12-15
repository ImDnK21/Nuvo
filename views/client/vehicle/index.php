
<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Informacion de mi vehiculo</span>
        </div>
        <div class="card-body">
        <?php        ?>

            <?php while ($vehicle = $vehicles->fetch_object()): ?>
                <?php 
                    // var_dump($vehicle);    
                ?>
                <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="patent" class="form-label required"><b>Patente</b></label>
                        <input type="text" name="patent" class="form-control" value="<?= $vehicle->PATENT ?>" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="brand" class="form-label required"><b>Marca</b></label>
                        <input type="text" name="brand" value="<?= $vehicle->BRAND ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="model" class="form-label required"><b>Modelo</b></label>
                        <input type="text" name="model" value="<?= $vehicle->MODEL ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="year" class="form-label required"><b>Año de Fabricacion</b></label>
                        <input type="number" name="year" class="form-control" placeholder="YYYY" min="1980" max="2023"
                            value="<?= $vehicle->YEAR ?>" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="fuel_type" class="form-label required"><b>Tipo de Combustible</b></label>
                        <input type="text" name="fuel_type" class="form-control" value="<?= $vehicle->FUEL_NAME ?>" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="transmission" class="form-label required"><b>Transmision</b></label>
                        <input type="text" name="transmission" class="form-control"
                            value="<?= $vehicle->NAME_TRANSMISSION ?>" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-4">
                        <label for="color" class="form-label required"><b>Color Primario</b></label>
                        <div class="control">
                            <input type="color" name="color" value="<?=$vehicle->COLOR ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="chassis_number" class="form-label required"><b>N° de Chasis</b></label>
                        <input type="text" name="chassis_number" readonly value="<?=$vehicle->CHASSIS_NUMBER?> "
                            class="form-control">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="mileage" class="form-label required"><b>Kilometraje</b></label>
                        <input type="text" name="mileage" value="<?=$vehicle->MILEAGE ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="vehicle_type" class="form-label required"><b>Tipo de Vehiculo</b></label>
                        <input type="text" name="vehicle_type" class="form-control"
                            value="<?= $vehicle->NAME ?>" readonly>
                    </div>
                </div>
                <div style="padding: 30px 0px 30px 0px;" >
                    <hr style="height: 10px;  width: 50%;  background-color: black; margin: auto; border-radius: 20px;">
                </div>
                

            </div>

                
            <?php endwhile; ?>
            

        </div>
    </div>
</div>
