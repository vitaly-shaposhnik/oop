<?php

namespace Transport\Car;

class Car extends TransportAbstract
{
    public $wheelCount;
    public $oil;
    public $gears;
    public $engine;
    public $doorsCount;
    public $brand;
    public $model;
    public $year;

    function __construct()
    {
        $this->doorsCount = 4;
        $this->engine = 1.9;
        $this->gears = 5;
        $this->oil = 'diesel';
        $this->wheelCount = 4;
    }


    /*public function __construct()
    {
        $this->wheelCount = 4;
    }*/


    public function drive(){
        print 'Driving ...';
    }

    public function transport(){
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
     * @param mixed $doorsCount
     */
    public function setDoorsCount($doorsCount)
    {
        $this->doorsCount = $doorsCount;
    }

    /**
     * @return mixed
     */
    public function getDoorsCount()
    {
        return $this->doorsCount;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $gears
     */
    public function setGears($gears)
    {
        $this->gears = $gears;
    }

    /**
     * @return mixed
     */
    public function getGears()
    {
        return $this->gears;
    }

    /**
     * @param mixed $oil
     */
    public function setOil($oil)
    {
        $this->oil = $oil;
    }

    /**
     * @return mixed
     */
    public function getOil()
    {
        return $this->oil;
    }

    /**
     * @param int $wheelCount
     */
    public function setWheelCount($wheelCount)
    {
        $this->wheelCount = $wheelCount;
    }

    /**
     * @return int
     */
    public function getWheelCount()
    {
        return $this->wheelCount;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }



}
