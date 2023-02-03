<?php

namespace routes;

use controllers\SampleApiController;
use controllers\AuthApiController;
use controllers\SmashCharactersApiController;
use controllers\SmashGamesApiController;
use controllers\SmashGamesController;
use routes\base\Route;
use utils\SessionHelpers;

class Api
{
    function __construct()
    {
        $videoApiController = new SampleApiController();

        Route::Add('/api/sample', [$videoApiController, 'sample']);

        // Auth
        $authApiController = new AuthApiController();
        Route::Add('/api/auth', [$authApiController, 'auth']);

        if (SessionHelpers::isLogin()) {
            Route::Add('/api/logout', [$authApiController, 'logout']);

            $smashGamesApiController = new SmashGamesApiController();
            Route::Add('/api/game/add', [$smashGamesApiController, 'addSmashGame']);
            Route::Add('/api/game/edit/{game_id}', [$smashGamesApiController, 'editSmashGame']);

            $smashCharactersApiController = new SmashCharactersApiController;
            Route::Add('/api/character/add', [$smashCharactersApiController, 'addSmashCharacter']);
            Route::Add('/api/character/edit/{game_id}', [$smashCharactersApiController, 'editSmashCharacter']);
        }
    }
}
