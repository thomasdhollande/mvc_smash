<section id="smashImages" class="top-section">

        <div class="images-gallery">
                <div class="images-gallery-title">Galerie</div>
                <div class="images-gallery-image">

                        <?php

                        foreach ($smashImages as $smashImage) {
                        ?>
                                <img src="<?= PUBLIC_PATH . $smashImage->getPath() ?>">
                        <?php
                        }
                        ?>
                </div>
        </div>

</section>