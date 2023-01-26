<section id="smashOneGame" class="top-section">

        <div class="game-banner" style="background-image: url('<?= PUBLIC_PATH . $smashOneGame->getBgImage() ?>')">
                <div class="game-banner-title"><?= $smashOneGame->getName() ?></div>
        </div>

        <div class="game-date">Sortie le <?= $smashOneGame->getDateRelease() ?></div>
        <div class="game-trailer">
                <iframe src="<?= $smashOneGame->getTrailerVideo() ?>">
                </iframe>
        </div>
        <div class="game-text"><?= $smashOneGame->getText() ?></div>
        <div class="game-gallery">
                <?php

                foreach ($images as $image) {
                ?>
                        <img src="<?= PUBLIC_PATH . $image->getPath() ?>">
                <?php
                }
                ?>
        </div>
</section>