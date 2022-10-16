<?php

require_once 'Bike.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$clio = new car('red', 4, 'fuel');

$skate = new Skateboard('black', 4);

$bike = new Bike('red', 2);

$autoRoute = new MotorWay();

$autoRoute->addVehicle($clio);