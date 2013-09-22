<?php

namespace Transport;

abstract class TransportAbstract
{
    public $color;
    public $price;
    public $weight;
    public $maxSpeed;
    public $seatCount;

    abstract public function drive();
    abstract public function transport();

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $seatCount
     */
    public function setSeatCount($seatCount)
    {
        $this->seatCount = $seatCount;
    }

    /**
     * @return mixed
     */
    public function getSeatCount()
    {
        return $this->seatCount;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
