<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Servicio</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/saveService' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label required"> <span style="color: red;"> * </span>
                                Nombre del servicio</label>
                            <input type="text" name="name" value="<?= Utils::old('name') ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="description" class="form-label required"> <span style="color: red;"> * </span>
                                Descripcion</label>
                            <input type="text" name="description" value="<?= Utils::old('description') ?>" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="price" class="form-label required">Precio</label>
                            <input type="number" name="price" min="0" value="<?= Utils::old('price') ?>"
                                class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="float-start">
                            <span class="required"><span style="color: red;"> * </span>: campo obligatorio</span>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Agregar Servicio</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>