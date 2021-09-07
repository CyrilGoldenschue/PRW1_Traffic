<?php

require_once "Model/Class/TrafficLight.php";

class Controller {

    public function next(TrafficLight $light)
    {
        $light->nextState();
        require_once "View/View_TrafficLight.php";
    }

    public function hs(TrafficLight $light)
    {
        $light->stop();
        require_once "View/View_TrafficLight.php";
    }

}