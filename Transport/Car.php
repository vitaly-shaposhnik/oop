<?php

namespace Transport;

class Car extends TransportAbstract
{
    protected $wheelCount;
    protected $oil;
    protected $gears;
    protected $engine;
    protected $doorsCount;
    protected $brand;
    protected $model;
    protected $year;

    function __construct($color, $maxSpeed, $price, $seatCount, $weight, $brand, $doorsCount, $engine, $gears, $model, $oil, $wheelCount, $year)
    {
        parent::__construct($color, $maxSpeed, $price, $seatCount, $weight);
        $this->brand = $brand;
        $this->doorsCount = $doorsCount;
        $this->engine = $engine;
        $this->gears = $gears;
        $this->model = $model;
        $this->oil = $oil;
        $this->wheelCount = $wheelCount;
        $this->year = $year;
    }

    public function drive()
    {
        print 'Driving ...';
    }

    public function transport()
    {
        print 'Transporting ...';
    }

    /*public function __destruct()
    {
        print 'Object was destroyed!';
    }*/

    public function __unset($name)
    {
        echo "Свойство '$name' не доступно!".PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getDoorsCount()
    {
        return $this->doorsCount;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return mixed
     */
    public function getGears()
    {
        return $this->gears;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getOil()
    {
        return $this->oil;
    }

    /**
     * @return mixed
     */
    public function getWheelCount()
    {
        return $this->wheelCount;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }


}
