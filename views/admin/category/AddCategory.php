<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Categoria</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/saveCategory' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label required"> <span style="color: red;"> * </span>
                                Nombre Categoria </label>
                            <input type="text" name="name_category" value="<?= Utils::old('name_category') ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="float-start">
                            <span class="required"><span style="color: red;"> * </span>: campo obligatorio</span>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Agregar Categoria</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>