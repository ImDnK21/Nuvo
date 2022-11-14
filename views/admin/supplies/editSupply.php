<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Insumo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/updateSupply' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label required"> <span style="color: red;"> * </span>
                                Id Insumo</label>
                            <input type="text" name="name" value="<?= $supply->ID_SUPPLY ?>" class="form-control">
                        </div>
                    </div>
                   
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label required"> <span style="color: red;"> * </span>
                                Nombre Insumo</label>
                            <input type="text" name="name" value="<?= $supply->NAME ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="description" class="form-label required"> <span style="color: red;"> * </span>
                                Descripcion</label>
                            <input type="text" name="description" value="<?= $supply->DESCRIPTION ?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="stock" class="form-label required">Stock</label>
                            <input type="number" name="stock" min="0" value="<?= $supply->STOCK ?>"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="img" class="form-label required">Imagen</label>
                            <input type="file" name="img" value="<?= $supply->ID_SUPPLY ?>"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="float-start">
                            <span class="required"><span style="color: red;"> * </span>: campo obligatorio</span>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Agregar Insumo</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>