<?php

namespace controllers;

use controllers\base\WebController;
use models\SmashImagesModel;
use utils\Template;

class SmashImagesController extends WebController
{
    private $smashImagesModel;

    public function __construct()
    {
        $this->smashImagesModel = new SmashImagesModel();
    }

    public function listImages(): string
    {
        $smashImages = $this->smashImagesModel->listImages();

        return Template::render(
            "views/SmashImagesView.php",
            array(
                "smashImages" => $smashImages,
                "css_file_name" => "smashImages"
                )

        );
    }
}
