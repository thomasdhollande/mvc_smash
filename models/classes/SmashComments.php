<?php

namespace models\classes;

use models\SmashUsersModel;

class SmashComments
{
    private int $id;
    private int $smash_id;
    private string $user_id;
    private string $comment;
    private string $date;
    private SmashUsersModel $SmashUsersModel;

    function __construct()
    {
        $this->SmashUsersModel = new SmashUsersModel();
    }

    /**
     * Retourne les informations d'un utilisateur à propos d'un commentaire
     * @return SmashUsers[]
     */
    public function userInfo(): SmashUsers
    {
        return $this->SmashUsersModel->getByUserId($this->user_id);
    }

    /**
     * Affichage des informations de base d'un commentaire
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->id, $this->smash_id, $this->user_id, $this->comment, $this->date]));
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
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }
}
