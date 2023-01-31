<section id="smashOneGame" class="top-section">

        <div class="game-banner" style="background-image: url('<?= PUBLIC_PATH . $smashOneGame->getBgImage() ?>')">
                <div class="game-banner-title"><?= $smashOneGame->getName() ?></div>
                <div class="game-banner-date">Sortie le <?= date('d-m-Y', strtotime($smashOneGame->getDateRelease())) ?></div>
        </div>



        <div class="game-trailer">
                <iframe src="<?= $smashOneGame->getTrailerVideo() ?>">
                </iframe>
        </div>
        <div class="game-text"><?= $smashOneGame->getText() ?></div>

        <div class="game-gallery">
                <div class="game-gallery-title">Galerie</div>
                <div class="game-gallery-image">

                        <?php

                        foreach ($images as $image) {
                        ?>
                                <img src="<?= PUBLIC_PATH . $image->getPath() ?>">
                        <?php
                        }
                        ?>
                </div>
        </div>

        <div class="game-characters-container">
                <div class="game-characters-container-inner">
                        <div class="game-characters-title">Personnages</div>
                        <div class="game-characters-list">

                                <?php

                                foreach ($characters as $character) {
                                        if (!empty($character->getMainImage())) {
                                ?>
                                                <img src="<?= PUBLIC_PATH . $character->getMainImage() ?>">
                                <?php
                                        }
                                }
                                ?>
                        </div>
                </div>
        </div>

        <div class="game-comments">
                <div class="game-comments-title">Commentaires</div>

                <?php

                foreach ($comments as $comment) {

                ?>
                        <div class="game-comments-item">
                                <div class="game-comments-pseudo"><?= $comment->userInfo()->getPseudo() ?></div>
                                <div class="game-comments-text"><?= $comment->getComment() ?></div>
                        </div>
                <?php

                }
                ?>

        </div>

</section>