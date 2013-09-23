<?php

namespace Transport;

class Plane extends TransportAbstract
{
    protected $flightCount;

    function __construct($color, $maxSpeed, $price, $seatCount, $weight, $flightCount)
    {
        parent::__construct($color, $maxSpeed, $price, $seatCount, $weight);
        $this->wagonCount = $flightCount;
    }

    public function drive()
    {
        print 'Flying ...';
    }

    public function transport()
    {
        print 'Transporting ...';
    }

    /**
     * @return mixed
     */
    public function getFlightCount()
    {
        return $this->flightCount;
    }

}
