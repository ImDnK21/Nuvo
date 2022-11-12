<div class="main container">


    <div class="content wo-form">
    <?php while ($workorder = $workorders->fetch_object()): ?>

        <h2 class="form-title">
            Detalle Orden de trabajo N <?= $workorder->ID ?>
        </h2>
        <form>

            <div class="jenis-mesin">
                <dl>
                    <dt class="judul-field">
                        Jenis Mesin
                    </dt>
                    <dd class="value-field">
                        Mesin Packing Final V.10
                    </dd>
                </dl>
            </div>

            <div class="issue">
                <dl>
                    <dt class="judul-field">
                        Issue </dt>
                    <dd class="value-field">
                        Belt Macet, mesin tidak dapat digunakan. </dd>
                </dl>
            </div>

            <div class="status-detail">
                <dl>
                    <dt class="judul-field">
                        Status</dt>
                    <dd class="value-field">
                        <span class="status urgent">Urgent</span> </dd>
                </dl>
            </div>

            <div class="po-link-detail">
                <dl>
                    <dt class="judul-field">
                        PO Link </dt>
                    <dd class="value-field">
                        <a href="#">101</a>
                </dl>
            </div>


            <div class="pic-prod">
                <dl>
                    <dt class="judul-field">
                        PIC Produksi </dt>
                    <dd class="value-field">
                        Ahmad Suherman
                </dl>
            </div>

            <div class="pic-eng">
                <dl>
                    <dt class="judul-field">
                        PIC Engineer </dt>
                    <dd class="value-field">
                        Didik Mauladi
                </dl>
            </div>

            <div class="add-note">
                <dl>
                    <dt class="judul-field">
                        Catatan Tambahan </dt>
                    <dd class="value-field">
                        <span>
                            Target produksi harus segera terpenuhi, mesin harus segera dapat digunakan dalam waktu
                            2x24jam.
                        </span>
                </dl>
            </div>


            <input type="submit" class="edit" value="Edit">
<?php endwhile; ?>