<?php

namespace Transport\Car;

use Transport\Car;

class Truck extends Car
{
    public function __construct()
    {
        $this->doorsCount = 2;
    }
}
