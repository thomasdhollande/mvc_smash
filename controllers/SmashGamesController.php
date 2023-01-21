<?php

namespace controllers;

use controllers\base\WebController;
use models\SmashGamesModel;
use utils\Template;

class SmashGamesController extends WebController
{
    private $smashGamesModel;

    public function __construct()
    {
        $this->smashGamesModel = new SmashGamesModel();
    }

    public function listGames(): string
    {
        $smashGames = $this->smashGamesModel->listGames();

        return Template::render(
            "views/SmashGamesView.php",
            array(
                "smashGames" => $smashGames,
                "css_file_name" => "smashGames"
                )

        );
    }
}
