<?php

namespace controllers;

use controllers\base\WebController;
use utils\Template;

class HomeController extends WebController
{
    function home(): string
    {
        return Template::render(
            "views/global/HomeView.php",
            array(
                "page_title" => "Smash",
                "css_file_name" => "home"
            )
        );
    }
}
