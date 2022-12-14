<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Informacion</div>
                <a class="nav-link" href="<?= APP_URL . 'client/view' ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                    Mi Vehiculo
                </a>
                <a class="nav-link" href="<?= APP_URL . 'client/personalInformation' ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                    Mis datos personales
                </a>
                <div class="sb-sidenav-menu-heading">Administración</div>
                <a class="nav-link" href="<?= APP_URL . 'client/ClientWorkOrder' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area" ></i></div>
                    Mi Orden de Trabajo
                </a> 
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Servicios Solicitados
                </a> 
                 <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Contacto
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Conectado como:</div>
            <?= $_SESSION['logged']->FIRSTNAME?>
            <br><?= $_SESSION['logged']->LASTNAME?>
            <h6 class="correo"><b><?= $_SESSION['logged']->EMAIL ?></b></h6>
            <style>
                .correo{
                    color: #fff;
                    font-size: 18px;
                    text-decoration: underline;
                }
            </style>
        </div>
    </nav>
</div>
<div id="layoutSidenav_content">