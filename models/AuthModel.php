<?php

namespace models;

use models\base\SQL;

class AuthModel extends SQL
{
    public function __construct()
    {
        parent::__construct('users', 'id');
    }

    public function getUserByEmailOrPseudo(string $emailOrPseudo) {
        $query = "SELECT * FROM users WHERE email = ? OR pseudo = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$emailOrPseudo, $emailOrPseudo]);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function checkUser(string $password, string $password_hashed) {
        return password_verify($password, $password_hashed);
    }
}