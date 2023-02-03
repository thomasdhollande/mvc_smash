<section id="editSmashGame" class="top-section">
    <div class="title_container">
        <h1>Modifier un jeu</h1>
    </div>

    <div class="form-container">
        <form action="" method="post" id="edit_game_form">
            <div class="input_container">
                <label for="game_name">Nom du jeu</label>
                <input type="text" name="game_name" id="game_name" value="<?= $smashGame->getName() ?>" required>
            </div>
            <div class="input_container">
                <label for="game_date_release">Date de sortie</label>
                <input type="text" name="game_date_release" id="game_date_release" value="<?= $smashGame->getDateRelease() ?>" required>
            </div>
            <div class="input_container">
                <label for="game_text">Description</label>
                <input type="text" name="game_text" id="game_text" value="<?= $smashGame->getText() ?>" required>
            </div>
            <div class="input_container">
                <label for="game_img">Image</label>
                <input type="file" name="game_img" id="game_img">
            </div>
            <div class="input_container">
                <label for="game_video">Lien embed de la vidéo trailer</label>
                <input type="text" name="game_video" id="game_video" value="<?= $smashGame->getTrailerVideo() ?>" required>
            </div>
            <button type="submit">Modifier le jeu</button>
            <input type="hidden" name="game_id" id="game_id" value="<?= $gameId ?>">
            <div class="container_error">
                <p>Error message</p>
            </div>
            <div class="container_success">
                <p>Success message</p>
            </div>
        </form>
    </div>
</section>