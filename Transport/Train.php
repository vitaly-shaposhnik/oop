<?php

namespace Transport;

class Train extends TransportAbstract
{
    protected $wagonCount;

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
