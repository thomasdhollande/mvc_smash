<?php

namespace models\classes;

use models\SmashGamesModel;

class SmashVideos
{
    private int $id;
    private int $smash_id;
    private string $path;
    private SmashGamesModel $smashGamesModel;

    public function __construct()
    {
        $this->smashGamesModel = new SmashGamesModel();
    }

    public function thisSmashGame(): SmashGames
    {
        return $this->smashGamesModel->getByGameId($this->smash_id);
    }

    /**
     * Affichage des informations de base d'une image
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->id, $this->smash_id, $this->path]));
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
    public function getSmashId(): int
    {
        return $this->smash_id;
    }

    /**
     * @param int $smash_id
     */
    public function setSmashId(int $smash_id): void
    {
        $this->smash_id = $smash_id;
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
