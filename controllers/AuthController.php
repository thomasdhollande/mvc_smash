<?php

namespace controllers;

use controllers\base\WebController;
use utils\SessionHelpers;
use utils\Template;

class AuthController extends WebController
{
    function auth(): string
    {
        return Template::render(
            "views/AuthView.php",
            array(
                "page_title" => "Authentification",
                "css_file_name" => "auth",
                "js_file_name" => "auth"
                )
            );
    }

    function logout(): void {
        SessionHelpers::logout();
        $webC = new WebController();
        $webC->redirect('/auth');
    }
}