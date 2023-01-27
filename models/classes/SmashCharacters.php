<?php

namespace models\classes;

class SmashCharacters
{
    private int $id;
    private string $name;
    private string $number;
    private string $origin_game;
    private string $first_apparition;
    private string $main_image;

    /**
     * Affichage des informations de base d'un personnage
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->id, $this->name, $this->number, $this->origin_game, $this->first_apparition, $this->main_image]));
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
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

        /**
     * @return string
     */
    public function getOriginGame(): string
    {
        return $this->origin_game;
    }

    /**
     * @param string $origin_game
     */
    public function setOriginGame(string $origin_game): void
    {
        $this->origin_game = $origin_game;
    }

        /**
     * @return string
     */
    public function getFirstApparition(): string
    {
        return $this->first_apparition;
    }

    /**
     * @param string $first_apparition
     */
    public function setFirstApparition(string $first_apparition): void
    {
        $this->first_apparition = $first_apparition;
    }

        /**
     * @return string
     */
    public function getMainImage(): string
    {
        return $this->main_image;
    }

    /**
     * @param string $main_image
     */
    public function setMainImage(string $main_image): void
    {
        $this->main_image = $main_image;
    }
}
