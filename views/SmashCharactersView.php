<section id="smashCharacters" class="top-section">

        <div class="characters-gallery">
                <div class="characters-gallery-title">Personnages</div>
                <div class="characters-gallery-image">

                        <?php

                        foreach ($smashCharacters as $smashCharacter) {
                                if (!empty($smashCharacter->getMainImage())) {
                        ?>
                                        <img src="<?= PUBLIC_PATH . $smashCharacter->getMainImage() ?>">
                        <?php
                                }
                        }
                        ?>
                </div>
        </div>

</section>