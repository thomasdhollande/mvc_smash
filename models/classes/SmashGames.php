<?php

namespace models\classes;

use models\SmashImagesModel;
use models\SmashVideosModel;
use models\SmashCommentsModel;

class SmashGames
{
    private int $id;
    private string $name;
    private string $date_release;
    private string $text;
    private string $bg_image;
    private string $trailer_video;
    private SmashImagesModel $smashImagesModel;
    private SmashVideosModel $smashVideosModel;
    private SmashCommentsModel $SmashCommentsModel;

    function __construct()
    {
        $this->smashImagesModel = new SmashImagesModel();
        $this->smashVideosModel = new SmashVideosModel();
        $this->SmashCommentsModel = new SmashCommentsModel();
    }

    /**
     * Retourne la liste des images d'un jeu'
     * @return SmashImages[]
     */
    public function allImages(): array
    {
        return $this->smashImagesModel->allSmashGameImages($this->id);
    }

    /**
     * Retourne la liste des vidéos d'un jeu
     * @return SmashVideos[]
     */
    public function allVideos(): array
    {
        return $this->smashVideosModel->allSmashGameVideos($this->id);
    }

        /**
     * Retourne la liste des commentaires d'un jeu'
     * @return SmashComments[]
     */
    public function allComments(): array
    {
        return $this->SmashCommentsModel->allSmashGameComments($this->id);
    }

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
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getBgImage(): string
    {
        return $this->bg_image;
    }

    /**
     * @param string $bg_image
     */
    public function setBgImage(string $bg_image): void
    {
        $this->bg_image = $bg_image;
    }

    /**
     * @return string
     */
    public function getTrailerVideo(): string
    {
        return $this->trailer_video;
    }

    /**
     * @param string $trailer_video
     */
    public function setTrailerVideo(string $trailer_video): void
    {
        $this->trailer_video = $trailer_video;
    }
}
