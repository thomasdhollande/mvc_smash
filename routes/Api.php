<?php

namespace routes;

use controllers\SampleApiController;
use controllers\AuthApiController;
use routes\base\Route;

class Api
{
    function __construct()
    {
        $videoApiController = new SampleApiController();

        Route::Add('/api/sample', [$videoApiController, 'sample']);

        // Auth
        $authApiController = new AuthApiController();
        Route::Add('/api/auth', [$authApiController, 'auth']);
        Route::Add('/api/logout', [$authApiController, 'logout']);
    }
}

