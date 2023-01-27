<?php

namespace models;

use models\base\SQL;
use models\classes\SmashCharacters;
use models\classes\SmashGames;

class SmashCharactersModel extends SQL
{
    public function __construct()
    {
        parent::__construct('characters', 'id');
    }

    /**
     * Liste les personnages présents en base de données
     * @return SmashCharacters[]
     */
    public function listCharacters(): array
    {
        $query = "SELECT * FROM characters ORDER BY `characters`.`number` ASC;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashCharacters::class);
    }

    /**
     * Ajoute un nouveau personnage en base de données
     * @param SmashCharacters $oneCharacter
     * @return bool|string
     */
    public function createCharacter(SmashCharacters $oneCharacter): bool|string
    {
        $query = "INSERT INTO characters (id, name, number, origin_game, first_apparition, main_image) VALUES (null, ?, ?, ?, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$oneCharacter->getName(), $oneCharacter->getNumber(), $oneCharacter->getOriginGame(), $oneCharacter->getFirstApparition(), $oneCharacter->getMainImage()]);

        return $this->getPdo()->lastInsertId();
    }

    /**
     * Sélectionne un personnage précis selon l'id
     */

    public function getByCharacterId($characterId): SmashCharacters
    {
        $query = "SELECT * FROM characters WHERE id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$characterId]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, SmashCharacters::class);
        return $stmt->fetch();
    }

    /**
     * Liste les images d'un personnage
     * @param int $characterId
     * @return SmashCharactersImages[]
     */
    public function getImagesByCharacterId(int $characterId): array
    {
        $query = "SELECT * FROM character_images WHERE character_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$characterId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashCharactersImages::class);
    }

    /**
     * Liste les jeux d'un personnage
     * @param int $characterId
     * @return SmashGames[]
     */
    public function getGamesByCharacterId(int $characterId): array
    {
        $query = "SELECT * FROM smash INNER JOIN smash_characters ON smash_characters.smash_id  = smash.id INNER JOIN characters ON characters.id = smash_characters.character_id  WHERE smash_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$characterId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashGames::class);
    }
}
