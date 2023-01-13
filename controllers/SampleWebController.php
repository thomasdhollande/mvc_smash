<?php

namespace controllers;

use controllers\base\WebController;
use utils\Template;

class SampleWebController extends WebController
{
    function home(): string
    {
        return Template::render(
            "views/global/home.php",
            array(
                "page_title" => "Smash",
                "css_file_name" => "home",
                "js_file_name" => "home"
            )
        );
    }

    function exemple($parametre = 'Valeur par défaut'): string
    {
        return "Voilà votre paramètre : $parametre";
    }
}
