<?php

namespace Transport;

abstract class TransportAbstract
{
    protected $color;
    protected $price;
    protected $weight;
    protected $maxSpeed;
    protected $seatCount;

    public function __construct(array $params)
    {
        foreach ($params as $field => $value) {
            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
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
        return $this->maxSpeed . 'km/h';
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price . 'UAH';
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
        return $this->weight . 'kg';
    }
}
