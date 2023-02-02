<?php

namespace routes;

use controllers\HomeController;
use controllers\SmashGamesController;
use controllers\SmashOneGameController;
use controllers\AuthController;
use controllers\SmashImagesController;
use controllers\SmashCharactersController;
use routes\base\Route;
use utils\SessionHelpers;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new HomeController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);

        $SmashGamesController = new SmashGamesController();
        Route::Add('/games', [$SmashGamesController, 'listGames']);

        $SmashOneGameController = new SmashOneGameController();
        Route::Add('/game/{game_id}', [$SmashOneGameController, 'getByGameId']);

        $authController = new AuthController();
        Route::Add('/auth', [$authController, 'auth']);

        if (SessionHelpers::isLogin()) {
            Route::Add('/logout', [$authController, 'logout']);
        }
        $SmashImagesController = new SmashImagesController();
        Route::Add('/gallery', [$SmashImagesController, 'listImages']);

        $SmashCharactersController = new SmashCharactersController();
        Route::Add('/characters', [$SmashCharactersController, 'listCharacters']);

                //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}
