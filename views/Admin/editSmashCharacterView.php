<section id="editSmashCharacter" class="top-section">
    <div class="title_container">
        <h1>Modifier un personnage</h1>
    </div>

    <div class="form-container">
        <form action="" method="post" id="edit_character_form">
            <div class="input_container">
                <label for="character_name">Nom du personnage</label>
                <input type="text" name="character_name" id="character_name" value="<?= $smashCharacter->getCharacterName() ?>" required>
            </div>
            <div class="input_container">
                <label for="character_number">Numéro du personnage</label>
                <input type="text" name="character_number" id="character_number" value="<?= $smashCharacter->getNumber() ?>" required>
            </div>
            <div class="input_container">
                <label for="character_origin_game">Jeu d'origine</label>
                <input type="text" name="character_origin_game" id="character_origin_game" value="<?= $smashCharacter->getOriginGame() ?>" required>
            </div>
            <div class="input_container">
                <label for="character_first_apparition">Date de première apparition</label>
                <input type="text" name="character_first_apparition" id="character_first_apparition" value="<?= $smashCharacter->getFirstApparition() ?>" required>
            </div>
            <div class="input_container">
                <label for="character_main_image">Image</label>
                <input type="file" name="character_main_image" id="character_main_image">
            </div>
            <button type="submit">Modifier le personnage</button>
            <input type="hidden" name="character_id" id="character_id" value="<?= $characterId ?>">
            <div class="container_error">
                <p>Error message</p>
            </div>
            <div class="container_success">
                <p>Success message</p>
            </div>
        </form>
    </div>
</section>