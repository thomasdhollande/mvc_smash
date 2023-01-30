<?php

namespace models\classes;

class SmashComments
{
    private int $id;
    private int $smash_id;
    private string $user_id;
    private string $text;

    /**
     * Affichage des informations de base d'un commentaire
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->id, $this->smash_id, $this->user_id, $this->text]));
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
    public function getSmashId(): string
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
     * @return int
     */
    public function getUserId(): string
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $path
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }
}
