<section id="addSmashGame" class="top-section">
    <div class="title_container">
        <h1>Ajouter un jeu</h1>
    </div>

    <div class="form-container">
        <form action="" method="post" id="add_game_form">
            <input type="text" name="game_name" id="game_name" placeholder="Nom du jeu" required>
            <input type="text" name="game_date_release" id="game_date_release" placeholder="Date de sortie" required>
            <input type="text" name="game_text" id="game_text" placeholder="Description" required>
            <div class="file_input_container">
                <label for="game_img">Image</label>
                <input type="file" name="game_img" id="game_img" required>
            </div>
            <input type="text" name="game_video" id="game_video" placeholder="Lien embed de la vidéo" required>
            <button type="submit">Créer le jeu</button>
            <div class="container_error">
                <p>Error message</p>
            </div>
            <div class="container_success">
                <p>Success message</p>
            </div>
        </form>
    </div>
</section>