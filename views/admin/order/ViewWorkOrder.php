<div class="main container">



    <?php while ($workorder = $workorders->fetch_object()): ?>
    <div class="content wo-form">
        <h2 class="form-title">
            Detalle Orden de trabajo N <?= $workorder->ID ?>
        </h2>
        <form>

            <div class="s">
                <dl>
                    <dt class="judul-field">
                        Patente:
                    </dt>
                    <dd class="value-field">
                        <?= $workorder->PATENT_VEHICLE?>
                    </dd>
                </dl>
            </div>

            <div class="issue">
                <dl>
                    <dt class="judul-field">
                        Rut Cliente: </dt>
                    <dd class="value-field">
                        <?= $workorder->RUT_CLIENT ?></dd>
                </dl>
            </div>

            <div class="status-detail">
                <dl>
                    <dt class="judul-field">
                        Status</dt>
                    <dd class="value-field">
                        <?= $workorder->RUT_MECHANIC ?> </dd>

                </dl>
            </div>

            <div class="po-link-detail">
                <dl>
                    <dt class="judul-field">
                        Observaciones: </dt>
                    <dd class="value-field">
                        <a href="#"><?= $workorder->OBSERVATIONS ?></a></a>
                </dl>
            </div>


            <div class="pic-prod">
                <dl>
                    <dt class="judul-field">
                        Servicios </dt>
                    <dd class="value-field">
                        <?= $workorder->SERVICE ?></dd>
                </dl>
            </div>

            <div class="pic-eng">
                <dl>
                    <dt class="judul-field">
                        Fecha </dt>
                    <dd class="value-field">
                        <?= $workorder->CREATED_AT ?></dd>
                </dl>
            </div>

            <input type="submit" class="edit" value="Edit" disabled>
    </div>
            <?php endwhile; ?>