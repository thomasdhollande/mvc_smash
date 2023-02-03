<section id="addSmashCharacter" class="top-section">
    <div class="title_container">
        <h1>Ajouter un personnage</h1>
    </div>

    <div class="form-container">
        <form action="" method="post" id="add_character_form">
            <input type="text" name="character_name" id="character_name" placeholder="Nom du personnage" required>
            <input type="text" name="character_number" id="character_number" placeholder="Numéro du personnage" required>
            <input type="text" name="character_origin_game" id="character_origin_game" placeholder="Jeu d'origine" required>
            <input type="text" name="character_first_apparition" id="character_first_apparition" placeholder="Date de première apparition" required>
            <div class="file_input_container">
                <label for="character_main_image">Image</label>
                <input type="file" name="character_main_image" id="character_main_image" required>
            </div>
            <button type="submit">Créer le personnage</button>
            <div class="container_error">
                <p>Error message</p>
            </div>
            <div class="container_success">
                <p>Success message</p>
            </div>
        </form>
    </div>
</section>