<?php

require_once 'Baza.php';
@session_start();

define('DB_HOST', 'localhost'); // set database host
define('DB_USER', 'root'); // set database user
define('DB_PASS', ''); // set database password
define('DB_NAME', 'metro'); // set database name
define("DISPLAY_DEBUG", FALSE);

$oBaza = new DB();

function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function RandomNum($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
