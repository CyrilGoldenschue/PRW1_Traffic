<?php

class Light
{
    private $color;

    public function __construct($color = "Extinct")
    {
        $this->color = $color;
    }

    function GetColor(){
        return $this->color;
    }


}