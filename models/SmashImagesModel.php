<?php

namespace models;

use models\base\SQL;
use models\classes\SmashImages;

class SmashImagesModel extends SQL
{
    public function __construct()
    {
        parent::__construct('smash_images', 'id');
    }

    /**
     * Liste les images présentes en base de données
     * @return SmashImages[]
     */
    public function listImages(): array
    {
        $query = "SELECT * FROM smash_images;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashImages::class);
    }

    /**
     * Liste les images d'un jeu
     * @param string $smash_id
     * @return SmashImages[]
     */
    public function allSmashGameImages(string $smash_id): array
    {
        $query = "SELECT * FROM smash_images WHERE smash_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$smash_id]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashImages::class);
    }

    /**
     * Ajoute une image en base pour le jeu $smash_id
     * @param SmashImages $path
     * @return string
     */
    public function createSmashImage(SmashImages $image): string
    {
        $query = "INSERT INTO smash_images (id, smash_id, path) VALUE (NULL, smash_id, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$image->getSmashId(), $image->getPath()]);
        return $this->getPdo()->lastInsertId();
    }
}
