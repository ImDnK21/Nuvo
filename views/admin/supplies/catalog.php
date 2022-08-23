<div class="row justify-content-start">
        <?php while ($supply = $supplies->fetch_object()) : ?>
        <div class="col-6 col-md-3 py-2">
          <div class="disk-border">
            <div class="disk-container">
              <a href="<?= APP_URL . 'album/view?id=' . $supply->ID_SUPPLY ?>" class="disk-link">
                <?php if(!empty($supply->IMG)): ?>
                  <img src="<?= APP_URL . 'uploads/images/' . $supply->IMG ?>" alt="<?= $supply->NAME ?>" class="w-100 disk-cover" loading="lazy">
                <?php else: ?>
                <img src="<?= APP_URL . 'assets/img/no-image.jpg' ?>" alt="Placeholder" class="w-100 disk-image" loading="lazy">
                <?php endif; ?>
                <div class="text-center p-3">
                  <p class="disk-name fw-bold mb-0"><?= $supply->NAME ?></p>
                  <p class="disk-author mb-0"><?= $supply->NAME_CATEGORY ?></p>

                </div>
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>