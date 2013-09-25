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

    public function __construct(array $params)
    {
        foreach ($params as $field => $value) {
            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getTeaser() . '<br>';
    }

    /*public function __destruct()
    {
        print 'Object was destroyed!';
    }*/

    public function drive()
    {
        print 'Driving ...';
    }

    public function transport()
    {
        print 'Transporting ...';
    }

    public function __unset($name)
    {
        echo "Свойство '$name' не доступно!" . PHP_EOL;
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
        return $this->gears . ' gears';
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
        return $this->year . ' year';
    }

    public function getTeaser()
    {
        return $this->getBrand() . ' ' .
            $this->getModel() . ' ' .
            $this->getEngine() . ', ' .
            $this->getYear();
    }
}
