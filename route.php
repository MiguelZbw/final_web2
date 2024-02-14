<?php
include_once "./controller/cancionController.php";
include_once "./config.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$cancionController= new CancionController();

$action = 'home';

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case "home":        
        $cancionController->HolaMundo();
    break;
    case "thegame":
        $cancionController->perdiste();
    break;
}