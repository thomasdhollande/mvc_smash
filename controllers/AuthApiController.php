<?php

namespace controllers;

use controllers\base\ApiController;
use models\AuthModel;
use utils\SessionHelpers;

class AuthApiController extends ApiController
{
    function auth()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return json_encode(['error' => 'Problème lors de la connexion']);
        }

        if (!$data['identifiant'] || trim($data['identifiant']) === '') {
            return json_encode(['error' => 'Identifiant ou mot de passe invalide']);
        }

        if (!$data['password'] || trim($data['password']) === '') {
            return json_encode(['error' => 'Identifiant ou mot de passe invalide']);
        }

        $authModel = new AuthModel();
        $user = $authModel->getUserByEmailOrPseudo(trim($data['identifiant']));
        
        if (!$user) {
            return json_encode(['error' => 'Identifiant ou mot de passe invalide']);
        }

        if (!$authModel->checkUser($data['password'], $user->password)) {
            return json_encode(['error' => 'Identifiant ou mot de passe invalide']);
        }

        SessionHelpers::login([
            "logged" => true,
            "name" => $user->last_name,
            "firstname" => $user->first_name,
            "pseudo" => $user->pseudo
        ]);

        return json_encode(['success' => "Connexion réussie. Vous allez être redirigé vers la page d'acceuil"]);
    }
}