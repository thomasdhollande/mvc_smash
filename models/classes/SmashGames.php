<?php

namespace models\classes;

class SmashGames
{
    private int $id;
    private string $name;
    private string $date_release;
    private string $bg_image;


    /**
     * Affichage des informations de base du jeu
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->id, $this->name, $this->date_release, $this->bg_image]));
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDateRelease(): string
    {
        return $this->date_release;
    }

    /**
     * @param string $date_release
     */
    public function setDateRelease(string $date_release): void
    {
        $this->date_release = $date_release;
    }

    /**
     * @return string
     */
    public function getBgImage(): string
    {
        return $this->bg_image;
    }

    /**
     * @param string $date_release
     */
    public function setBgImage(string $bg_image): void
    {
        $this->bg_image = $bg_image;
    }
}
