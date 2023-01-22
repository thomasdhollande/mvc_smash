<?php

use routes\base\Router;
use utils\SessionHelpers;

include("autoload.php");
$configs = include("./configs.php");

$path = $configs['PATH'];
$public_path = $configs['PUBLIC_PATH'];

define('PATH', $path);
define('PUBLIC_PATH', $public_path);

/*
 * Permet l'utilisation du serveur PHP interne et l'affichage des contenus static.
 */
if (php_sapi_name() == 'cli-server') {
    if (str_starts_with($_SERVER["REQUEST_URI"], '/public/')) {
        return false;
    }
}

class EntryPoint
{
    private Router $router;
    private SessionHelpers $sessionHelpers;

    function __construct()
    {
        $this->sessionHelpers = new SessionHelpers();

        $this->router = new Router();
        $this->router->LoadRequestedPath();
    }
}

new EntryPoint();
