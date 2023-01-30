<?php

namespace models;

use models\base\SQL;
use models\classes\SmashUsers;

class SmashUsersModel extends SQL
{
    public function __construct()
    {
        parent::__construct('users', 'id');
    }

    /**
     * Liste les utilisateurs présents en base de données
     * @return SmashUsers[]
     */
    public function listUsers(): array
    {
        $query = "SELECT * FROM users";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashUsers::class);
    }

    /**
     * Ajoute un nouveau utilisateur en base de données
     * @param SmashUsers $user
     * @return bool|string
     */
    public function createUser(SmashUsers $user): bool|string
    {
        $query = "INSERT INTO users (id, first_name, last_name, pseudo, email, password) VALUES (null, ?, ?, ?, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$user->getFirstName(), $user->getLastName(), $user->getPseudo(), $user->getEmail(), $user->getPassword()]);

        return $this->getPdo()->lastInsertId();
    }

    /**
     * Sélectionne un utilisateur précis selon l'id
     */

    public function getByUserId($userId): SmashUsers
    {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$userId]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, SmashUsers::class);
        return $stmt->fetch();
    }

    /**
     * Retourne une liste d'utilisateurs correspondant au critère de recherche
     * @param string $keyword
     * @return SmashUsers[]
     */
    public function searchUsers(string $keyword = ""): array
    {
        $query = "SELECT * FROM users WHERE first_name LIKE :first_name OR last_name like :last_name OR email like :email LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([
            ":first_name" => "%$keyword%",
            ":last_name" => "%$keyword%",
            ":email" => "%$keyword%",
        ]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashUsers::class);
    }

}
