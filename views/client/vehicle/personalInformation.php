

<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Mis Datos personales</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/SaveClient' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                        <label class="form-label"><b> Rut: </b><span style="color: red;"></label>
                        <input type="text" name="rut" class="form-control" value="<?= $_SESSION['logged']->RUT?>" required readonly>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                        <label class="form-label"><b> Nombres: </b></label>
                        <input type="text" name="firstname" class="form-control" value="<?= $_SESSION['logged']->FIRSTNAME?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                        <label class="form-label"><b> Apellidos: </b></label>
                        <input type="text" name="lastname" class="form-control" value="<?= $_SESSION['logged']->LASTNAME?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                        <label class="form-label"><b> Telefono de contacto: (+569 XXXXXXXX) </b> </label>
                        <input type="text" name="phone" class="form-control" value="<?= $_SESSION['logged']->PHONE?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                        <label class="form-label"><b>Direccion:</b></label>
                        <input type="text" name="address" class="form-control" value="<?= $_SESSION['logged']->ADDRESS?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                        <label class="form-label"><b> Comuna: </b></label>
                        <input type="text" name="commune" class="form-control" value="<?= $_SESSION['logged']->COMMUNE?>">
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-4">
                        <div class="mb-3">
                        <label class="form-label"><b> Comuna: </b></label>
                        <select name="comune" class="form-select">
                                <option selected="selected" value="La Florida">La Florida</option>
                                <option value="Cerrillos">Cerrillos</option>
                                <option value="Cerro Navia">Cerro Navia</option>
                                <option value=" Conchalí">Conchalí</option>
                                <option value=" El Bosque">El Bosque</option>
                                <option value=" Estación Central">Estación Central</option>
                                <option value=" Huechuraba">Huechuraba</option>
                                <option value=" Independencia">Independencia</option>
                                <option value=" La Cisterna">La Cisterna</option>
                                <option value=" La Granja">La Granja</option>
                                <option value=" La Pintana">La Pintana</option>
                                <option value=" La Reina">La Reina</option>
                                <option value=" Las Condes">Las Condes</option>
                                <option value=" Lo Barnechea">Lo Barnechea</option>
                                <option value=" Lo Espejo">Lo Espejo</option>
                                <option value=" Lo Prado">Lo Prado</option>
                                <option value=" NatuMaculral">Macul</option>
                                <option value=" Maipú">Maipú</option>
                                <option value=" Ñuñoa">Ñuñoa</option>
                                <option value=" Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                                <option value=" Peñalolén">Peñalolén</option>
                                <option value=" Providencia">Providencia</option>
                                <option value=" Pudahuel">Pudahuel</option>
                                <option value=" Quilicura">Quilicura</option>
                                <option value=" Quinta Normal">Quinta Normal</option>
                                <option value=" Recoleta">Recoleta</option>
                                <option value=" Renca">Renca</option>
                                <option value=" San Joaquín">San Joaquín</option>
                                <option value=" San Miguel">San Miguel</option>
                                <option value=" San Ramón">San Ramón</option>
                                <option value=" Vitacura">Vitacura</option>
                                <option value=" Puente Alto">Puente Alto</option>
                                <option value=" Pirque">Pirque</option>
                                <option value=" San José de Maipo">San José de Maipo</option>
                                <option value=" Colina">Colina</option>
                                <option value=" Lampa">Lampa</option>
                                <option value=" San Bernardo">San Bernardo</option>
                                <option value=" Buin">Buin</option>
                                <option value=" Peñaflor">Peñaflor</option>
                                </option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                        <label class="form-label"><b> Correo electrónico:</b></label>
                        <input type="text" name="email" class="form-control" value="<?= $_SESSION['logged']->EMAIL?>">
                        </div>
                    </div>
                    
                    <div class="col-12">
                        
                        <button type="submit" class="btn btn-primary float-end">Actualizar Datos</button>
                    </div>
                </div>
                


            </form>
        </div>
    </div>
</div>
