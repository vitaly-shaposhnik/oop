<?php

namespace Transport;

abstract class TransportAbstract
{
    protected $color;
    protected $price;
    protected $weight;
    protected $maxSpeed;
    protected $seatCount;

    function __construct($color, $maxSpeed, $price, $seatCount, $weight)
    {
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        $this->price = $price;
        $this->seatCount = $seatCount;
        $this->weight = $weight;
    }


    abstract public function drive();

    abstract public function transport();

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getSeatCount()
    {
        return $this->seatCount;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
