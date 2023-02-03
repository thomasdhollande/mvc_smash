<section id="smashCharacters" class="top-section">
    <div class="add_btn_container">
        <button class="button add">
            <a href="/admin/character/add"></a>
            Ajouter un personnage
        </button>
    </div>
    <div class="characters-gallery">
        <div class="characters-gallery-title">Personnages</div>


        <div class="characters-gallery-list">
            <?php
            foreach ($smashCharacters as $smashCharacter) :
            ?>
                <?php
                if (!empty($smashCharacter->getMainImage())) :
                ?>
                    <div class="character_container">
                        <div class="characters-gallery-list-item">
                            <img src="<?= PUBLIC_PATH . $smashCharacter->getMainImage() ?>">
                            <div class="characters-gallery-list-name"><?= $smashCharacter->getCharacterName() ?></div>
                        </div>
                        <div class="characters_action_buttons_container">
                            <button class="button update">
                                <a href="/admin/character/edit/<?= $smashCharacter->getId() ?>"></a>
                                Modifier
                            </button>
                            <button class="button delete">
                                <a href="/admin/character/delete/<?= $smashCharacter->getId() ?>"></a>
                                Supprimer
                            </button>
                        </div>
                    </div>
                <?php
                endif;
                ?>
            <?php
            endforeach;
            ?>
        </div>
    </div>

</section>