<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container-fluid.py-3{

    }
    @media print{
      @page{

      
      size: 210mm 297mm;
      margin: 5mm 5mm 5mm 5mm;
      orphans: 0;
      widows: 0;
    }
  }
  </style>
</head>
<body>
  
</body>
</html>
<div class="container-fluid py-3 " >
    <div class="row justify-content-center">
        <div class="col-12 ">
            <div class='invoice'>
                <div class='header' style="padding-bottom:10px';">
                    <div class='company col-4'>
                        <img src="<?= APP_URL . 'assets/img/logo.png' ?>" width=75 alt="logo">
                        <span class="name"><b>Nuvo Automotive</b></span><br>
                        <span>(+569) 12345678 ~ (+562) 98765432</span><br>
                        <span><b>Porto Seguro #4955 ~ Santiago ~ Chile</b></span>
                    </div>
                    <div class="company col-4" style="margin:auto;">
                        <h3><b>Orden de trabajo:</b></h3>
                        <h1 class="order">N°<?= $wo->ID ?></h1>
                    </div>
                    <div class='company-tax col-4 text-center'>
                        <p style="padding-top:10px;"><b>Fecha y Hora de recepcion: </b></p>
                        <p><?= $wo->CREATED_AT ?></p><br>
                        <p><b>Fecha y Hora de entrega: </b></p><br>
                        <hr/ style="width: 180px; margin: auto;">

                    </div>
                </div>
                <!-- seccion vehicle and client-->
                <div class='header'>
                    <div class='company col-6' style='text-align:left;'>
                        <p class='col-10'><b>Rut Cliente: </b><?=$wo->RUT_CLIENT?></p>
                        <p class='col-10'><b>Nombre Cliente:
                            </b><?=$wo->FIRSTNAME . ' ' . $wo->LASTNAME ?></p>
                        <p class='col-10'><b>Domicilio:</b> <?= $wo->ADDRESS . ' - ' . $wo->NOMBRE?></p>
                        <p class='col-10'><b>Correo de contaco: </b> <?= $wo->EMAIL?> </p>
                        <p class='col-10'><b>Telefono de contacto: </b> <?= $wo->PHONE?> </p>
                    </div>
                    <div class='company-tax col-6 '>
                        <div class="row">
                            <p class='col-6'><b>Patent:</b> <?=$wo->PATENT?></p>
                            <p class='col-6'><b>Marca:</b> <?=$wo->BRAND?></p>
                            <p class='col-6'><b>Modelo:</b> <?=$wo->MODEL?></p>
                            <p class='col-6'><b>Año:</b> <?=$wo->YEAR?></p>
                            <p class='col-6'><b>Combustible:</b> <?=$wo->FUEL_NAME?></p>
                            <p class='col-6'><b>Transmision:</b> <?=$wo->NAME_TRANSMISSION?></p>
                            <p class='col-6'><b>Color: </b><input type="color" name="color" class="color"
                                    style="width: inherit;" value="<?=$wo->COLOR?>"></p>
                            <p class='col-6'><b>N° de chasis:</b> <?=$wo->CHASSIS_NUMBER?></p>
                            <p class='col-6'><b>Kilometraje:</b> <?=$wo->MILEAGE?>Km</p>
                            <p class='col-6'><b>Tipo de vehiculo:</b> <?=$wo->NAME?></p>
                        </div>
                    </div>
                </div>
                <div class='header'>
                    <div class='company col-6' style='text-align:left; margin-bottom: -20px;'>
                        <h4 class="title-vehicle">Observaciones y
                            requerimientos del cliente</h4>
                        <p class='col-12' style='text-align: justify'><b>
                                <?= str_replace("-","<br>-" , $wo->OBSERVATIONS);?>
                        </p></b>
                    </div>
                    <div class='company col-6 '>
                        <h4 class="title-vehicle">Servicios Solicitados</h4>
                        <ol class="service-list" style="text-align: left; ">
                            <?php $total = 0 ;foreach ($services as $service) { ?>
                            <?php if ($service['ID_WO'] == $wo->ID) { ?>
                            <li><b><?= $service['NAME'] . ' $' . $service['PRICE'] ?> </li></b>
                            <?php $total += intval($service['PRICE']) ?>

                            <?php } ?>
                            <?php }
                            ?>
                        </ol>
                        <div class="totalCost" style="text-align: right;">

                            <b>Valor Total (Sin IVA): </b>
                            <?php 
                                echo $total ?><br>
                            <b>Valor Total (Con IVA): </b>
                            <?php echo $total * 1.19 ?>
                        </div>
                    </div>
                </div>
                <div class='header'>
                    <div class='company col-6'>
                        <div class="form-check">
                            <div class="row">
                                <div class="col-md-6" style="text-align: left;">
                                    <label><input type="checkbox" id="cbox1" value="first_checkbox"> Vehiculo
                                        inventariado
                                    </label>
                                    <br>
                                    <br>
                                    <label>
                                        <input type="checkbox" id="cbox1" value="first_checkbox">
                                        Vehiculo con daños
                                    </label>
                                    <br>
                                    <br>
                                    <label><input type="checkbox" id="cbox1" value="first_checkbox"> Set de seguridad
                                    </label>
                                    <br>
                                    <br>
                                    <label>
                                        <input type="checkbox" id="cbox1" value="first_checkbox">
                                        Pisos de goma
                                    </label>
                                    <br>
                                    <br>
                                    <label><input type="checkbox" id="cbox1" value="first_checkbox"> Rueda de repuesto
                                    </label>
                                    <br>
                                </div>
                                <div class="col-md-6" style="text-align: left;">
                                    <label><input type="checkbox" id="cbox1" value="first_checkbox"> Extintor
                                    </label>
                                    <br>
                                    <br>
                                    <label>
                                        <input type="checkbox" id="cbox1" value="first_checkbox">
                                        Plumillas
                                    </label>
                                    <br>
                                    <br>
                                    <label><input type="checkbox" id="cbox1" value="first_checkbox"> Gata
                                    </label>
                                    <br>
                                    <br>
                                    <label>
                                        <input type="checkbox" id="cbox1" value="first_checkbox">
                                        Documentos
                                    </label>
                                    <br>
                                    <br>
                                    <label><input type="checkbox" id="cbox1" value="first_checkbox"> TAG
                                    </label>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='company-tax col-6'>
                        <div class="img-vehicle center">
                            <img src="<?= APP_URL . 'VehicleReport.png' ?>" alt="" width="250" height="250">
                        </div>
                    </div>
                </div>
                <div class="btn-print" style="margin-top: 10px; text-align: center;">
                    <button class="btn btn-primary" onclick="window.print()">Imprimir Orden</button>
                </div>
            </div>

        </div>

    </div>
</div>