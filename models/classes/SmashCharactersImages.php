<?php

namespace models\classes;

use models\SmashCharactersModel;

class SmashCharactersImages
{
    private int $id;
    private string $character_id;
    private string $path;
    private SmashCharactersModel $smashCharactersModel;

    public function __construct()
    {
        $this->smashCharactersModel = new SmashCharactersModel();
    }

    public function thisCharacter(): SmashCharacters
    {
        return $this->smashCharactersModel->getByCharacterId($this->character_id);
    }
    /**
     * Affichage des informations de base d'une image
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->id, $this->character_id, $this->path]));
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getCharacterId(): int
    {
        return $this->character_id;
    }

    /**
     * @param int $character_id
     */
    public function setCharacterId(int $character_id): void
    {
        $this->character_id = $character_id;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }
}
