<section id="smashGames" class="top-section">
    <div class="add_btn_container">
        <button class="button add">
            <a href="/admin/game/add"></a>
            Ajouter un jeu
        </button>
    </div>
    <div class="game-list">
        <?php
        foreach ($smashGames as $smashGame) {
        ?>
            <div class="game_container">
                <div class="game-card">
                    <div class="game-card-background" style="background-image: url('<?= PUBLIC_PATH . $smashGame->getBgImage() ?>')"></div>
                    <div class="game-card-content">
                        <div class="game-card-info"><?= $smashGame->getName() ?></div>
                    </div>
                </div>
                <div class="games_action_buttons_container">
                    <button class="button update">
                        <a href="/admin/game/edit/<?= $smashGame->getId() ?>"></a>
                        Modifier
                    </button>
                    <button class="button delete">
                    <a href="/admin/game/delete/<?= $smashGame->getId() ?>"></a>
                        Supprimer
                    </button>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>