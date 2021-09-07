<?php

require_once "Model/Class/TrafficLight.php";

function NextState()
{
    $state = 0;
    $trafficLight = new TrafficLight($_SESSION['state']);
    if ($trafficLight->canStart()) {
        $state = ($_SESSION['state'] + 1) % 4;;
        IncludeView($state);
    } else {
        IncludeView();
    }
}

function HS()
{
    $state = 4;
    $trafficLight = new TrafficLight($_SESSION['state']);
    if ($trafficLight->canStop() || $_SESSION['state'] == 4) {
        if ($_SESSION['state'] == 4) {
            $state = 0;
        } else {
            $state = 4;
        }
        IncludeView($state);
    }else{
        IncludeView($_SESSION['state']);
    }

}

function IncludeView($state = 4)
{
    $_SESSION['state'] = $state;
    $trafficLight = new TrafficLight($_SESSION['state']);
    include "View/View_TrafficLight.php";
}
