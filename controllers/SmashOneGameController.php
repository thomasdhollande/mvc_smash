<?php

namespace controllers;

use controllers\base\WebController;
use models\SmashGamesModel;
use utils\Template;

class SmashOneGameController extends WebController
{
    private $smashOneGameModel;

    public function __construct()
    {
        $this->smashOneGameModel = new SmashGamesModel();
    }

    public function getByGameId($game_id): string
    {
        $smashOneGame = $this->smashOneGameModel->getByGameId($game_id);

        return Template::render(
            "views/SmashOneGameView.php",
            array(
                "smashOneGame" => $smashOneGame,
                "css_file_name" => "smashOneGame"
                )

        );
    }
}
