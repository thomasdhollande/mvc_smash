<?php

namespace controllers;

use controllers\base\WebController;
use models\SmashCharactersModel;
use utils\Template;

class SmashCharactersController extends WebController
{
    private $smashCharactersModel;

    public function __construct()
    {
        $this->smashCharactersModel = new SmashCharactersModel();
    }

    public function listCharacters(): string
    {
        $smashCharacters = $this->smashCharactersModel->listCharacters();

        return Template::render(
            "views/SmashCharactersView.php",
            array(
                "smashCharacters" => $smashCharacters,
                "css_file_name" => "smashCharacters"
                )

        );
    }
}
