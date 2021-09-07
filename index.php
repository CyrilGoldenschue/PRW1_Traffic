<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Controller/Controller.php";

$light = isset($_SESSION['light']) ? unserialize($_SESSION['light']) : new TrafficLight(0);

$_SESSION['action'] = isset($_POST['action']) ? $_POST['action'] : 0;

$controller = new Controller();
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}

switch ($action) {
    case 'next':
        $controller->next($light);
        break;
    case 'hs':
        $controller->hs($light);
        break;
    default:
        $controller->hs($light);
}


$_SESSION['light'] = serialize($light);
?>