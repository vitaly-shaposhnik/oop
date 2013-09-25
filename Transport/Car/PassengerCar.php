<?php

namespace Transport\Car;

use Transport\Car;

class PassengerCar extends Car
{
    public function __construct()
    {
        $this->driveType = 'front';
    }
}
