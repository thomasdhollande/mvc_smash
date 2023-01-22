<?php

$DB_SERVER = getenv("MVC_SERVER") ?: "127.0.0.1";
$DB_DATABASE = getenv("MVC_DB") ?: "mvc_smash";
$DB_USER = getenv("MVC_USER") ?: "root";
$DB_PASSWORD = getenv("MVC_TOKEN") ?: "";
$DEBUG = getenv("MVC_DEBUG") ?: true;

if (php_sapi_name() === 'cli-server') {
    $PUBLIC_PATH = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $PUBLIC_PATH .= $_SERVER['HTTP_HOST'];
    $PUBLIC_PATH .= '/public/';
} else {
    $PUBLIC_PATH = 'http://localhost/mvc_smash/public/';
}

return array(
    "DB_USER" => $DB_USER,
    "DB_PASSWORD" => $DB_PASSWORD,
    "DB_DSN" => "mysql:host=$DB_SERVER;dbname=$DB_DATABASE;charset=utf8",
    "DEBUG" => $DEBUG,
    "PUBLIC_PATH" => $PUBLIC_PATH
);

