<?php
require_once 'Transport/TransportAbstract.php';
require_once 'Transport/Plane.php';
require_once 'Transport/Train.php';
require_once 'Transport/Car.php';
require_once 'Transport/Car/Bus.php';
require_once 'Transport/Car/Truck.php';
require_once 'Transport/Car/PassengerCar.php';
require_once 'Transport/Car/PassengerCar/Hatchback.php';
require_once 'Transport/Car/PassengerCar/Sedan.php';
require_once 'Transport/Car/PassengerCar/Universal.php';

$car = new \Transport\Car;
print $car->getGears();
$car->setGears(6);
print "<pre>";
print_r($car);
print "</pre>";
//unset($car->test);

$truck = new \Transport\Car\PassengerCar;
print "<pre>";
print_r($truck);
print "</pre>";
