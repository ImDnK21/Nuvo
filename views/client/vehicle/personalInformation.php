<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Mis Datos personales</span>
        </div>
        <?php
        // var_dump($_SESSION['logged']) ;
        // var_dump($perfil);

        ?>
        <!-- <form action="<?= APP_URL . 'admin/SaveClient' ?>" method="post" enctype="multipart/form-data"> -->
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label"><b> Rut: </b><span style="color: red;"></label>
                            <input type="text" name="rut" class="form-control" value="<?= $_SESSION['logged']->RUT?>"
                                required readonly>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label class="form-label"><b> Nombres: </b></label>
                            <input type="text" name="firstname" class="form-control"
                                value="<?= $_SESSION['logged']->FIRSTNAME?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label class="form-label"><b> Apellidos: </b></label>
                            <input type="text" name="lastname" class="form-control"
                                value="<?= $_SESSION['logged']->LASTNAME?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label class="form-label"><b> Telefono de contacto: (+569 XXXXXXXX) </b> </label>
                            <input type="text" name="phone" class="form-control"
                                value="<?= $_SESSION['logged']->PHONE?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label class="form-label"><b>Direccion:</b></label>
                            <input type="text" name="address" class="form-control"
                                value="<?= $_SESSION['logged']->ADDRESS?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            
                            <label class="form-label"><b> Comuna: </b></label>
                            <input type="text" name="commune" class="form-control"

                                value="<?= $_SESSION['logged']->NOMBRE?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                            <label class="form-label"><b> Correo electrónico:</b></label>
                            <input type="text" name="email" class="form-control"
                                value="<?= $_SESSION['logged']->EMAIL?>">
                        </div>
                    </div>

                    <div class="col-12">

                        <button type="submit" class="btn btn-primary float-end">Actualizar Datos</button>
                    </div>
                </div>
            </div>
        <!-- </form> -->

    </div>
</div>