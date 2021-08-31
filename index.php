<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Controller/Controller.php";

$_SESSION['state'] = isset($_POST['state']) ? $_POST['state'] : 0;
$_SESSION['action'] = isset($_POST['action']) ? $_POST['action'] : 0;

if(isset($_SESSION["action"])) {
    switch ($_SESSION["action"]) {
        case "Next":
            NextState();
            break;

        case "HS":
            HS();
            break;

        default:
            IncludeView();
            break;
    }
}else{
    IncludeView();
}

?>