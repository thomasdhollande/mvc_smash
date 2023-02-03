<?php

use utils\SessionHelpers;
?>

<div class="overlay">
    <ul class="menu-items">
        <li class="menu-item">
            <a href="/">Accueil</a>
        </li>
        <li class="menu-item">
            <a href="/games">Liste des jeux</a>
        </li>
        <li class="menu-item">
            <a href="/characters">Liste des personnages</a>
        </li>
        <li class="menu-item">
            <a href="/galery">Gallerie</a>
        </li>

        <?php
        if (SessionHelpers::isLogin()) :
        ?>
            <ul class="menu-items-admin">
                <div class="menu-item-parent">
                    Admin
                </div>
                <div class="menu-items-child">
                    <li class="menu-item child">
                        <a href="/admin/games">Gestion des jeux</a>
                    </li>
                    <li class="menu-item child">
                        <a href="/admin/characters">Gestion des personnages</a>
                    </li>
                    <li class="menu-item child">
                        <a href="/admin/galery">Gestion de la gallerie</a>
                    </li>
                </div>
            </ul>
        <?php endif; ?>
    </ul>
</div>

<script src="<?= PUBLIC_PATH ?>js/main.js"></script>
<?php if (isset($js_file_name) && $js_file_name !== '') : ?>
    <script src="<?= PUBLIC_PATH ?>js/<?= $js_file_name ?>.js"></script>
<?php endif; ?>


</body>

</html>