<?php

namespace Transport;

class Train extends TransportAbstract
{
    public $wagonCount;

    public function drive()
    {
        print 'Driving ...';
    }

    public function transport()
    {
        print 'Transporting ...';
    }

    /**
     * @param mixed $wagonCount
     */
    public function setWagonCount($wagonCount)
    {
        $this->wagonCount = $wagonCount;
    }

    /**
     * @return mixed
     */
    public function getWagonCount()
    {
        return $this->wagonCount;
    }

}
