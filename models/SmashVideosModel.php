<?php

namespace models;

use models\base\SQL;
use models\classes\SmashVideos;

class SmashVideosModel extends SQL
{
    public function __construct()
    {
        parent::__construct('smash_videos', 'id');
    }

    /**
     * Liste les images d'un jeu
     * @param string $smash_id
     * @return SmashVideos[]
     */
    public function allSmashGameVideos(string $smash_id): array
    {
        $query = "SELECT * FROM smash_videos WHERE smash_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$smash_id]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, SmashVideos::class);
    }

    /**
     * Ajoute une image en base pour le jeu $smash_id
     * @param SmashVideos $path
     * @return string
     */
    public function createSmashVideo(SmashVideos $image): string
    {
        $query = "INSERT INTO smash_videos (id, smash_id, path) VALUE (NULL, smash_id, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$image->getSmashId(), $image->getPath()]);
        return $this->getPdo()->lastInsertId();
    }
}
