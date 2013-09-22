<?php

namespace Transport;

class Plane extends TransportAbstract
{
    public $flightCount;

    public function drive(){
        print 'Flying ...';
    }

    public function transport(){
        print 'Transporting ...';
    }

    /**
     * @param mixed $flightCount
     */
    public function setFlightCount($flightCount)
    {
        $this->flightCount = $flightCount;
    }

    /**
     * @return mixed
     */
    public function getFlightCount()
    {
        return $this->flightCount;
    }


}
