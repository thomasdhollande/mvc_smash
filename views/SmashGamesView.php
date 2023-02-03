<section id="smashGames" class="top-section">
    <div class="game-list">
    <?php
    foreach ($smashGames as $smashGame) {
    ?>
        <a class="game-card" href="./game/<?= $smashGame->getId() ?>">
            <div class="game-card-background" style="background-image: url('<?= PUBLIC_PATH . $smashGame->getBgImage() ?>')"></div>
            <div class="game-card-content">
                <div class="game-card-info"><?= $smashGame->getName() ?></div>
            </div>
        </a>
    <?php
    }
    ?>
    </div>
</section>