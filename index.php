<?php
require_once 'Transport/TransportAbstract.php';
require_once 'Transport/Plane.php';
require_once 'Transport/Train.php';
require_once 'Transport/Car.php';
require_once 'Transport/HyundaiElantra.php';
require_once 'Transport/Car/Bus.php';
require_once 'Transport/Car/Truck.php';
require_once 'Transport/Car/PassengerCar.php';
require_once 'Transport/Car/PassengerCar/Hatchback.php';
require_once 'Transport/Car/PassengerCar/Sedan.php';
require_once 'Transport/Car/PassengerCar/Universal.php';

use Transport\Car;
//use Transport\Car;

$carData = [
    'color'     => 'champagne',
    'maxSpeed'  => 190,
    'price'     => 120000,
    'seatCount' => 5,
    'weight'    => 1156,
    'brand'     => 'Hyundai',
    'doorsCount'=> 4,
    'engine'    => 1.6,
    'gears'     => 5,
    'model'     => 'Elantra',
    'oil'       => 'gasoline',
    'wheelCount'=> 4,
    'year'      => 2008
];

$car = new Car($carData);
print $car;

$hyundaiElantra = new \Transport\HyundaiElantra();
print $hyundaiElantra;
