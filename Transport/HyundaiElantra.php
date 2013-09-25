<?php

namespace Transport;

class HyundaiElantra extends Car
{
    public function __construct()
    {
        $this->color = 'champagne';
        $this->maxSpeed = 190;
        $this->price = 120000;
        $this->seatCount = 5;
        $this->weight = 1156;
        $this->brand = 'Hyundai';
        $this->doorsCount = 4;
        $this->engine = 1.6;
        $this->gears = 5;
        $this->model = 'Elantra';
        $this->oil = 'gasoline';
        $this->wheelCount = 4;
        $this->year = 2008;
    }
}
