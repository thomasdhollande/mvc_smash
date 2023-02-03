<?php

namespace controllers;

use controllers\base\ApiController;
use models\SmashCharactersModel;

class SmashCharactersApiController extends ApiController
{
    function addSmashCharacter()
    {
        $character_name = $_POST['character_name'];
        $character_number = $_POST['character_number'];
        $character_origin_game = $_POST['character_origin_game'];
        $character_first_apparition = $_POST['character_first_apparition'];

        $file = $_FILES['character_main_image'];
        $fileName = $file['name'];
        $fileTmp = $file['tmp_name'];
        $fileSize = $file['size'];

        $fileExt = explode('.', $fileName);
        $fileExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');


        if (!in_array($fileExt, $allowed)) {
            return json_encode(['error' => 'Format de fichier non pris en charge']);
        }

        $fileDestination = 'public/images/characters/' . $character_name . '/' . $fileName;
        $fileDestinationForDatabase = '/images/characters/' . $character_name . '/' . $fileName;

        $directory = dirname($fileDestination);
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        if (!move_uploaded_file($fileTmp, $fileDestination)) {
            return json_encode(['error' => "Problème lors de l'enregistrement de l'image"]);
        }

        $smashCharactersModel = new SmashCharactersModel();
        $characterCreated = $smashCharactersModel->createCharacter($character_name, $character_number, $character_origin_game, $character_first_apparition, $fileDestinationForDatabase);

        if (!$characterCreated) {
            return json_encode(['error' => "Problème lors de l'enregistrement du personnage"]);
        }

        return json_encode(['success' => "Personnage créé avec succès ! Vous allez être redirigé"]);
    }


    function editSmashCharacter()
    {
        $character_name = $_POST['character_name'];
        $character_number = $_POST['character_number'];
        $character_origin_game = $_POST['character_origin_game'];
        $character_first_apparition = $_POST['character_first_apparition'];
        $character_main_image = !empty($_FILES) && isset($_FILES['character_main_image']) ? $_FILES['character_main_image'] : null;
        $character_id = $_POST['character_id'];

        if (!is_null($character_main_image)) {
            $file = $character_main_image;
            $fileName = $file['name'];
            $fileTmp = $file['tmp_name'];
            $fileSize = $file['size'];

            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');


            if (!in_array($fileExt, $allowed)) {
                return json_encode(['error' => 'Format de fichier non pris en charge']);
            }

            $fileDestination = 'public/images/characters/' . $character_name . '/' . $fileName;
            $fileDestinationForDatabase = '/images/characters/' . $character_name . '/' . $fileName;

            if (!move_uploaded_file($fileTmp, $fileDestination)) {
                return json_encode(['error' => "Problème lors de l'enregistrement de l'image"]);
            }

            $smashCharactersModel = new SmashCharactersModel();
            $characterEdited = $smashCharactersModel->updateOne(
                $character_id,
                array(
                    "character_name" => $character_name,
                    "number" => $character_number,
                    "origin_game" => $character_origin_game,
                    "first_apparition" => $character_first_apparition,
                    "main_image" => $fileDestinationForDatabase
                )
            );

            if (!$characterEdited) {
                return json_encode(['error' => "Problème lors de l'enregistrement du persoonage"]);
            }
        } else {
            $smashCharactersModel = new SmashCharactersModel();
            $characterEdited = $smashCharactersModel->updateOne(
                $character_id,
                array(
                    "character_name" => $character_name,
                    "number" => $character_number,
                    "origin_game" => $character_origin_game,
                    "first_apparition" => $character_first_apparition
                )
            );

            if (!$characterEdited) {
                return json_encode(['error' => "Problème lors de l'enregistrement du personnage"]);
            }
        }

        return json_encode(['success' => "Personnage créé avec succès ! Vous allez être redirigé"]);
    }
}
