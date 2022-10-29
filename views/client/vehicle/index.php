

<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Datos Del vehiculo</span>
        </div>
        <div class="card-body">
            
                <div class="row">

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="patent" class="form-label required" >Patente</label>
                            <input type="text" name="patent"  class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="brand" class="form-label required">Marca</label>
                            <input type="text" name="brand"  class="form-control">
                    </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="model" class="form-label required">Modelo</label>
                            <input type="text" name="model"  class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="year" class="form-label required">Año de Fabricacion</label>
                            <input type="number" name="year"  class="form-control"
                                placeholder="YYYY" min="1980" max="2023">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="fuel_type" class="form-label required"  >Tipo de Combustible</label>
                            <select name="fuel_type" class="form-select">
                                <option selected="selected" value="nuevo">Bencina</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Electrico">Electrico</option>
                                <option value="Gas natural">Gas Natural</option>
                                <option value="Hibrido (Bencina - Gas natural)">Hibrido (Bencina - Gas natural)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="transmission" class="form-label required"  >Transmision</label>
                            <select name="transmission" class="form-select">
                                <option selected="selected" value="mechanic">Mecanico</option>
                                <option value="Automatica">Automatico</option>
                                <option value="CVT">CVT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-4">
                            <label for="color" class="form-label required">Color Primario</label>
                            <div class="control">
                                <input type="color" name="color"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="chassis_number" class="form-label required">N° de Chasis</label>
                            <input type="text" name="chassis_number"  class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="mileage" class="form-label required">Kilometraje</label>
                            <input type="text" name="mileage"  class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="vehicle_type" class="form-label required" >Tipo de Vehiculo</label>
                            <select name="vehicle_type" class="form-select">
                                <option selected="selected" value="Sedan">Sedan</option>
                                <option value="Station Wagon">Station Wagon</option>
                                <option value="HatchBack">HatchBack</option>
                                <option value="SUV">SUV</option>
                                <option value="Deportivo">Deportivo</option>
                                <option value="Vehiculo Comercial">Vehiculo Comercial</option>
                                <option value="VAN">VAN</option>
                                <option value="Pickup">PickUp</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            
        </div>
    </div>
</div>