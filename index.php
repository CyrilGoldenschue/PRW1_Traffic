<?php
require_once "Controller/Controller.php";


if(isset($_POST["action"])) {
    switch ($_POST["action"]) {
        case "Next":
            NextState();
            break;

        case "HS":
            HS();
            break;

        default:
            IncludeView($_POST['state']);
            break;
    }
}else{
    IncludeView($_POST['state']);
}

?>