<?php

namespace utils;

class Template
{
    static function render($filepath, $variables = array(), $withHeader = true): string
    {
        ob_start();
        // Déclare l'ensemble des variables présent dans la variable $variales pour
        // les rendres accessibles directement. Exemple :
        // array("nom" => "Brosseau", "prenom" => "Valentin") va générer
        // $nom = "Brosseau" et $prenom = "Valentin"
        extract($variables);

        if ($withHeader) Template::header($variables);
        include($filepath);
        if ($withHeader) Template::footer($variables);

        return ob_get_clean();
    }

    static private function header($variables = array()): void
    {
        extract($variables);
        include_once("./views/common/header.php");
    }

    static private function footer($variables = array()): void
    {
        extract($variables);
        include_once("./views/common/footer.php");
    }
}