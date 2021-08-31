<?php

require_once "Model/Model.php";

function NextState()
{
    if($_POST['state'] != 4) {
        $_SESSION['state'] = ($_POST['state'] + 1) % 4;;
        IncludeView($_SESSION['state']);
    }else {
        IncludeView();
    }
}

function HS()
{
    if ($_POST['state'] == 4) {
        $_SESSION['state'] = 0;
    } else {
        $_SESSION['state'] = 4;
    }
    IncludeView($_SESSION['state']);
}

function IncludeView($state = 4)
{
    $trafficLight = new TrafficLight($state);
    include "View/View_TrafficLight.php";
}
