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

    public function listCharactersAdmin(): string
    {
        $smashCharacters = $this->smashCharactersModel->listCharacters();

        return Template::render(
            "views/admin/SmashCharactersAdminView.php",
            array(
                "smashCharacters" => $smashCharacters,
                "css_file_name" => "smashCharacters"
            )
        );
    }

    public function addCharacterAdmin(): string
    {
        return Template::render(
            "views/admin/addSmashCharacterView.php",
            array(
                "css_file_name" => "smashCharacters",
                "js_file_name" => "addSmashCharacter"
            )
        );
    }

    public function editCharacterAdmin($character_id): string
    {
        $smashCharacter = $this->smashCharactersModel->getByCharacterId($character_id);

        return Template::render(
            "views/admin/editSmashCharacterView.php",
            array(
                "smashCharacter" => $smashCharacter,
                "characterId" => $character_id,
                "css_file_name" => "smashCharacters",
                "js_file_name" => "editSmashCharacter"
            )
        );
    }

    public function deleteCharacterAdmin($character_id)
    {
        $characterDeleted = $this->smashCharactersModel->deleteOne($character_id);
        if ($characterDeleted) {
            $webC = new WebController();
            return $webC->redirect('/admin/characters');
        }
    }
}
