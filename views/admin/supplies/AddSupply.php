<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Insumo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/saveSupply' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="id_category" class="form-label required">Nombre Categoria</label>
                            <select name="id_category" class="form-select">
                                <?php while ($category = $categories->fetch_object()) : ?>
                                <option value="<?= $category->ID ?>"><?= $category->NAME_CATEGORY ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label required"> <span style="color: red;"> * </span>
                                Nombre Insumo</label>
                            <input type="text" name="name" value="<?= Utils::old('name') ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                            <label class="form-label" for="description"><b>Descripcion</b></label>
                            <textarea name="description" class="form-control"
                                placeholder="Ingrese las descripciones del producto" 
                                style="height: 150px;"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="stock" class="form-label required">Stock</label>
                            <input type="number" name="stock" min="0" value="<?= Utils::old('stock') ?>"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="img" class="form-label required">Imagen</label>
                            <input type="file" name="img" value="<?= Utils::old('img') ?>"
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