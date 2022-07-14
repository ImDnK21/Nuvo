<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="<?= APP_URL . 'admin/UpdateCategory' ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">ID Categoria</label>
                    <input type="text" name="id" value="<?= $category->ID ?>" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre Categoria</label>
                    <input type="text" name="name_category" value="<?= $category->NAME_CATEGORY ?>" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Editar Categoria</button>
            </form>
        </div>
    </div>
</div>