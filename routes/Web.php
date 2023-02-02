<?php

namespace routes;

use controllers\HomeController;
use controllers\SmashGamesController;
use controllers\SmashOneGameController;
use controllers\AuthController;
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
    }
}
