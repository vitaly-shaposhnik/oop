<?php

namespace Transport;

class Plane extends TransportAbstract
{
    protected $flightCount;

    public function __construct(array $params)
    {
        foreach ($params as $field => $value) {
            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
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
