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

$car = new \Transport\Car('champagne',190,120000,5,1156,'Hyundai',4,1.6,5,'Elantra','gasoline',4,2008);
print $car->getTeaser();