<?php

use utils\SessionHelpers;

if (SessionHelpers::isLogin()) :
?>
    <section id="auth" class="top-section logged">
        <div class="title_container">
            <h1>Connecter en tant que <?= SessionHelpers::getConnected()['firstname'] . " " . SessionHelpers::getConnected()['name'] . " (" . SessionHelpers::getConnected()['pseudo'] . ")" ?></h1>
        </div>
        <div class="logout_btn_container">
            <button class="button logout_btn">
                <a href="/logout"></a>
                Déconnexion
            </button>
        </div>
    </section>

<?php else : ?>
    <section id="auth" class="top-section">
        <div class="title_container">
            <h1>Connexion</h1>
        </div>

        <div class="form_container">
            <form action="" method="post" id="auth-form">
                <input type="text" name="identifiant" id="identifiant" value="" placeholder="Pseudo ou Email" required>
                <input type="password" name="password" id="password" value="" placeholder="Mot de passe" required>
                <button type="submit">Envoyer</button>
                <div class="container_error">
                    <p>Error message</p>
                </div>
                <div class="container_success">
                    <p>Success message</p>
                </div>
            </form>
        </div>
    </section>
<?php endif; ?>