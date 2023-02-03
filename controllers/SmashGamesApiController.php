<?php

namespace controllers;

use controllers\base\ApiController;
use models\SmashGamesModel;

class SmashGamesApiController extends ApiController
{
    function addSmashGame()
    {
        $game_name = $_POST['game_name'];
        $game_date_release = $_POST['game_date_release'];
        $game_text = $_POST['game_text'];
        $game_video = $_POST['game_video'];

        $file = $_FILES['game_img'];
        $fileName = $file['name'];
        $fileTmp = $file['tmp_name'];
        $fileSize = $file['size'];

        $fileExt = explode('.', $fileName);
        $fileExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');


        if (!in_array($fileExt, $allowed)) {
            return json_encode(['error' => 'Format de fichier non pris en charge']);
        }

        $fileDestination = 'public/images/smashGames/' . $fileName;
        $fileDestinationForDatabase = '/images/smashGames/' . $fileName;

        if (!move_uploaded_file($fileTmp, $fileDestination)) {
            return json_encode(['error' => "Problème lors de l'enregistrement de l'image"]);
        }

        $smashGamesModel = new SmashGamesModel();
        $gameCreated = $smashGamesModel->createGame($game_name, $game_date_release, $game_text, $fileDestinationForDatabase, $game_video);

        if (!$gameCreated) {
            return json_encode(['error' => "Problème lors de l'enregistrement du jeu"]);
        }

        return json_encode(['success' => "Jeu créé avec succès ! Vous allez être redirigé"]);
    }


    function editSmashGame()
    {
        $game_name = $_POST['game_name'];
        $game_date_release = $_POST['game_date_release'];
        $game_text = $_POST['game_text'];
        $game_video = $_POST['game_video'];
        $game_img = !empty($_FILES) && isset($_FILES['game_img']) ? $_FILES['game_img'] : null;
        $game_id = $_POST['game_id'];

        if (!is_null($game_img)) {
            $file = $game_img;
            $fileName = $file['name'];
            $fileTmp = $file['tmp_name'];
            $fileSize = $file['size'];

            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');


            if (!in_array($fileExt, $allowed)) {
                return json_encode(['error' => 'Format de fichier non pris en charge']);
            }

            $fileDestination = 'public/images/smashGames/' . $fileName;
            $fileDestinationForDatabase = '/images/smashGames/' . $fileName;

            if (!move_uploaded_file($fileTmp, $fileDestination)) {
                return json_encode(['error' => "Problème lors de l'enregistrement de l'image"]);
            }

            $smashGamesModel = new SmashGamesModel();
            $gameEdited = $smashGamesModel->updateOne(
                $game_id,
                array(
                    "name" => $game_name,
                    "date_release" => $game_date_release,
                    "text" => $game_text,
                    "bg_image" => $fileDestinationForDatabase,
                    "trailer_video" => $game_video
                )
            );

            if (!$gameEdited) {
                return json_encode(['error' => "Problème lors de l'enregistrement du jeu"]);
            }
        } else {
            $smashGamesModel = new SmashGamesModel();
            $gameEdited = $smashGamesModel->updateOne(
                $game_id,
                array(
                    "name" => $game_name,
                    "date_release" => $game_date_release,
                    "text" => $game_text,
                    "trailer_video" => $game_video
                )
            );

            if (!$gameEdited) {
                return json_encode(['error' => "Problème lors de l'enregistrement du jeu"]);
            }
        }

        return json_encode(['success' => "Jeu créé avec succès ! Vous allez être redirigé"]);
    }
}
