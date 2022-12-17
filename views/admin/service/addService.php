<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Servicio (En Desarrollo)</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/saveService' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-8 col-md-8">
                        <div class="mb-3">
                            <label for="name" class="form-label required"> <span style="color: red;"> * </span>
                                Nombre del servicio </label>
                            <input type="text" name="name" value="<?= Utils::old('name') ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="mb-3">
                            <label for="price" class="form-label required">Precio</label>
                            <input type="text" name="price" placeholder="$" value="<?= Utils::old('price') ?>"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripcion</label>
                            <textarea name="description" id="description" width="100%" height="100px"  
                            placeholder="Ingrese la descripcion del producto" class="form-control"></textarea>
                        </div>
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