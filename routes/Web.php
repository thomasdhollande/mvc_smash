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

        $SmashImagesController = new SmashImagesController();
        Route::Add('/gallery', [$SmashImagesController, 'listImages']);

        $SmashCharactersController = new SmashCharactersController();
        Route::Add('/characters', [$SmashCharactersController, 'listCharacters']);

        if (SessionHelpers::isLogin()) {
            Route::Add('/logout', [$authController, 'logout']);

            Route::Add('/admin/games', [$SmashGamesController, 'listGamesAdmin']);
            Route::Add('/admin/game/add', [$SmashGamesController, 'addGameAdmin']);
            Route::Add('/admin/game/edit/{game_id}', [$SmashGamesController, 'editGameAdmin']);
            Route::Add('/admin/game/delete/{game_id}', [$SmashGamesController, 'deleteGameAdmin']);

            Route::Add('/admin/characters', [$SmashCharactersController, 'listCharactersAdmin']);
            Route::Add('/admin/character/add', [$SmashCharactersController, 'addCharacterAdmin']);
            Route::Add('/admin/character/edit/{character_id}', [$SmashCharactersController, 'editCharacterAdmin']);
            Route::Add('/admin/character/delete/{character_id}', [$SmashCharactersController, 'deleteCharacterAdmin']);
        }
    }
}
