<div class="overlay">
    <ul class="menu-items">
        <li class="menu-item">
            <a href="./">Accueil</a>
        </li>
        <li class="menu-item">
            <a href="./games">Liste des jeux</a>
        </li>
        <li class="menu-item">
            <a href="./characters">Liste des personnages</a>
        </li>
        <li class="menu-item">
            <a href="./galery">Gallerie</a>
        </li>

        <ul class="menu-items-admin">
            <div class="menu-item-parent">
                Admin
            </div>
            <div class="menu-items-child">
                <li class="menu-item child">
                    <a href="./admin/games">Gestion des jeux</a>
                </li>
                <li class="menu-item child">
                    <a href="./admin/characters">Gestion des personnages</a>
                </li>
                <li class="menu-item child">
                    <a href="./admin/galery">Gestion de la gallerie</a>
                </li>
            </div>
        </ul>
    </ul>
</div>

<script src="./public/js/main.js"></script>
<?php if (isset($js_file_name) && $js_file_name !== '') : ?>
    <script src="./public/js/<?= $js_file_name ?>.js"></script>
<?php endif; ?>


</body>

</html>