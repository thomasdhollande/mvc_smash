<?php

namespace routes;

use controllers\SampleWebController;
use controllers\SmashGamesController;
use controllers\SmashOneGameController;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);

        $SmashGamesController = new SmashGamesController();
        Route::Add('/games', [$SmashGamesController, 'listGames']);

        $SmashOneGameController = new SmashOneGameController();
        Route::Add('/game/{game_id}', [$SmashOneGameController, 'getByGameId']);

                //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

