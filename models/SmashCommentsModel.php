<?php

namespace models;

use models\base\SQL;
use models\classes\SmashComments;
use models\classes\SmashUsers;

class SmashCommentsModel extends SQL
{
    public function __construct()
    {
        parent::__construct('comments', 'id');
    }

    /**
     * Liste les commentaires présentes en base de données
     * @return SmashComments[]
     */
    public function listComments(): array
    {
        $query = "SELECT * FROM comments;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashComments::class);
    }

    /**
     * Liste les informations d'un utilisateur selon un commentaire
     * @param string $smash_id
     * @return SmashUsers[]
     */
    public function getUserByCommentId(int $userId): array
    {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashUsers::class);
    }

    /**
     * Liste les commentaires d'un utilisateur
     * @param int $userId
     * @return SmashComments[]
     */
    public function getCommentsByUserId(int $userId): array
    {
        $query = "SELECT * FROM comments WHERE user_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashComments::class);
    }

    /**
     * Liste les commentaires d'un jeu
     * @param int $userId
     * @return SmashComments[]
     */
    public function allSmashGameComments(int $smashId): array
    {
        $query = "SELECT * FROM comments WHERE smash_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$smashId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashComments::class);
    }

    /**
     * Ajoute un commentaire en base pour le jeu $smash_id et l'utilisateur $user_id
     * @param SmashComments $comment
     * @return string
     */
    public function createSmashComment(SmashComments $comment): string
    {
        $query = "INSERT INTO comments (id, smash_id, user_id,comment) VALUE (NULL, ?, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$comment->getSmashId(), $comment->getUserId(), $comment->getComment()]);
        return $this->getPdo()->lastInsertId();
    }


}
