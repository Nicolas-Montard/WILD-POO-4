<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$camion = new Truck(50, 'red', 2, 'fuel');

var_dump($camion);

echo $camion->forward() . '<br>';

echo $camion->brake() . '<br>';

echo $camion->loadAnalyzer() . '<br>';

$camion->setLoad(50);

echo $camion->loadAnalyzer() . '<br>';
