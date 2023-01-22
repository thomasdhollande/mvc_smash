<?php

namespace models;

use models\base\SQL;
use models\classes\SmashGames;

class SmashGamesModel extends SQL
{
    public function __construct()
    {
        parent::__construct('smash', 'id');
    }

    /**
     * Liste les jeux présents en base de données
     * @param int $limit
     * @param int $page
     * @return SmashGames[]
     */
    public function listGames(): array
    {
        $query = "SELECT * FROM smash;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashGames::class);
    }

    /**
     * Ajoute un nouveau jeu en base de données
     * @param SmashGames $oneGame
     * @return bool|string
     */
    public function createGame(SmashGames $oneGame): bool|string
    {
        $query = "INSERT INTO smash (id, name, date_release,) VALUES (null, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$oneGame->getName(), $oneGame->getDateRelease()]);

        return $this->getPdo()->lastInsertId();
    }

    /**
     * Sélectionne un jeu précis selon l'id
     */

    public function getByGameId($gameId): SmashGames
    {
        $query = "SELECT * FROM smash WHERE id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$gameId]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, SmashGames::class);
        return $stmt->fetch();
    }
}
