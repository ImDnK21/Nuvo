<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?= APP_URL . 'admin/dashboard' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Administración</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTaller" aria-expanded="false" aria-controls="collapseTaller">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Gestión del taller
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTaller" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <b><a class="nav-link" href="<?= APP_URL . 'admin/ViewListClient' ?>">Clientes</a></b>
                        <b><a class="nav-link" href="<?= APP_URL . 'admin/ViewListMechanic' ?>">Mecánico</a></b>
                        <b><a class="nav-link" href="<?= APP_URL . 'admin/ViewListVehicle' ?>">Vehículos</a></b>
                        <b><a class="nav-link" href="<?= APP_URL . 'admin/ViewListWorkOrder' ?>">Ordenes de trabajo</a></b>

                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSupply" aria-expanded="false" aria-controls="collapseTaller">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Gestión de Insumos
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSupply" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                    <b><a class="nav-link" href="<?= APP_URL . 'admin/ViewListCategories' ?>">Categorias</a></b>
                        <b><a class="nav-link" href="<?= APP_URL . 'admin/ViewListSupplies' ?>">Insumos</a></b>
                        
                      

                    </nav>
                </div>
                <!-- <a class="nav-link" href="<?= APP_URL . 'admin/ViewListSupplies' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Gestión de insumos
                </a> -->
                <a class="nav-link" href="<?= APP_URL . 'admin/ViewListServices' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Servicios
                </a>
                <!-- <a class="nav-link" href="<?= APP_URL . 'admin/ToDoList' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    To-do List
                </a> -->
                <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Conectado como:</div>
            <?= $_SESSION['logged']->LASTNAME?>
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