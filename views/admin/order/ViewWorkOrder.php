<?php while ($workorder = $workorders->fetch_object()): ?>
<div class='invoice'>
    <div class='header'>
        <div class='company col-6'>
            <img src="<?= APP_URL . 'assets/img/logo.png'?>" width=75 alt="logo">
            <span>Güemes 4834 ~ Mar Del Plata ~ Buenos Aires</span><br>
            <span>(0223) 489-7464 ~ (011) 4228-5449</span><br>
            <span><b><small>IVA RESPONSABLE INSCRIPTO</small></b></span>
        </div>
        <div class='company-tax col-6'>
            <h1>Orden de Trabajo #1554</h1>
            <p><b>Fecha y Hora:</b> 30/08/2017 <b>~</b> 22:10</p>
            <p><b>CUIT:</b> 30-18330123-3</p>
            <p><b>Ingresos Brutos:</b> 000-110931-4</p>
            <p><b>Incio de Actividades:</b> 20/10/2005</p>
        </div>
    </div>
    <div class='client'>
        <p class='col-7'><b>Cliente:</b> Lucrecia  Díaz</p>
        <p class='col-5'><b>Celular:</b> (011) 4228-5449</p>
        <p class='col-12'><b>Domicilio:</b> Av San Martín 83 ~ Sarandí</p>
        <p class='col-6'><b>Marca:</b> Apple iPhone</p>
        <p class='col-4'><b>Modelo:</b> 6S</p>
        <p class='col-2'><b>Nuevo:</b> ✓</p>
        <p class='col-6'><b>N° Serie:</b> 4539692767016948</p>
        <p class='col-6'><b>IMEI:</b> 868380020765902</p>
        <p class='col-6'><b>Observaciones:</b> Pantalla rota, funda color rojo desgastada.</p>
        <div class='col-6 montos'>
            <p class='col-12'><b>Valor:</b> $ 2000</p>
            <p class='col-12'><b>Seña:</b> $ 500</p>
            <p class='col-12'><b>Saldo:</b> $ 1500</p>
            <p class='col-12'><small style='color: grey'>En caso de que no se pueda reparar tendrá un costo
                    mínimo</small></p>
        </div>
    </div>
    <div class='footer'>
        <p class='col-3'>
            <b>Fecha de Recepción:</b>
            30/08/2017
        </p>
        <p class='col-3'>
            <b>Fecha de Entrega:</b>
            05/09/2017
        </p>
        <p class='col-6' style='text-align: justify'>
            <small>Pasados 15 días de la fecha acordada (fecha de ingreso) tendrá un cargo diario de ($1,00). Pasados 45
                días de la fecha acordada será considerada como abandono de equipo y la casa tendrá derecho a darle el
                destino que considere pertinente, según lo establecido por el código civil de C.N.</small>
        </p>
    </div>
</div>
<?php endwhile; ?>