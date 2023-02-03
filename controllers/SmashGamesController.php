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

    public function listGamesAdmin(): string
    {
        $smashGames = $this->smashGamesModel->listGames();

        return Template::render(
            "views/admin/SmashGamesAdminView.php",
            array(
                "smashGames" => $smashGames,
                "css_file_name" => "smashGames"
            )
        );
    }

    public function addGameAdmin(): string
    {
        return Template::render(
            "views/admin/addSmashGameView.php",
            array(
                "css_file_name" => "smashGames",
                "js_file_name" => "addSmashGame"
            )
        );
    }

    public function editGameAdmin($game_id): string
    {
        $smashGame = $this->smashGamesModel->getByGameId($game_id);

        return Template::render(
            "views/admin/editSmashGameView.php",
            array(
                "smashGame" => $smashGame,
                "gameId" => $game_id,
                "css_file_name" => "smashGames",
                "js_file_name" => "editSmashGame"
            )
        );
    }

    public function deleteGameAdmin($game_id)
    {
        $gameDeleted = $this->smashGamesModel->deleteOne($game_id);
        if ($gameDeleted) {
            $webC = new WebController();
            return $webC->redirect('/admin/games');
        }
    }
}
