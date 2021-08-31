<?php
require_once "Model/Class/Light.php";
class TrafficLight
{
    private $red = false;
    private $orange = false;
    private $green = false;
    private $blink = false;

    private int $state;
    private $lights;

    public function __construct(int $state)
    {
        $this->state = $state;
        $this->lights = [
            0=>[new Light("Red"), new Light(), new Light()],
            1=>[new Light("Red"), new Light("Orange"), new Light()],
            2=>[new Light(), new Light(), new Light("Green")],
            3=>[new Light(), new Light("Orange"), new Light()],
            4=>[new Light(), new Light("Blink"), new Light()]
        ];
    }

    public function GetLights(){
        return $this->lights[$this->state];
    }

}