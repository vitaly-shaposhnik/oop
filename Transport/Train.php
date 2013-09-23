<?php

namespace Transport;

class Train extends TransportAbstract
{
    protected $wagonCount;

    function __construct($color, $maxSpeed, $price, $seatCount, $weight, $wagonCount)
    {
        parent::__construct($color, $maxSpeed, $price, $seatCount, $weight);
        $this->wagonCount = $wagonCount;
    }

    public function drive()
    {
        print 'Driving ...';
    }

    public function transport()
    {
        print 'Transporting ...';
    }

    /**
     * @return mixed
     */
    public function getWagonCount()
    {
        return $this->wagonCount;
    }

}
