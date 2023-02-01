<section id="smashCharacters" class="top-section">



        <div class="characters-gallery">

                <div class="characters-gallery-title">Personnages</div>
                <div class="characters-gallery-list">

                        <?php

                        foreach ($smashCharacters as $smashCharacter) {
                                if (!empty($smashCharacter->getMainImage())) {
                        ?>
                                        <div class="characters-gallery-list-item">
                                                <img src="<?= PUBLIC_PATH . $smashCharacter->getMainImage() ?>">

                                                <div class="characters-gallery-list-name"><?= $smashCharacter->getCharacterName() ?></div>
                                        </div>
                        <?php
                                }
                        }
                        ?>

                </div>
        </div>

</section>