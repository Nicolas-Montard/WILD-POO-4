<?php

require_once 'Bike.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$clio = new car('red', 4, 'fuel');
var_dump($clio);
try {
echo $clio->start();
} catch(Exception $e){
    $clio->setHasParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}
var_dump($clio);