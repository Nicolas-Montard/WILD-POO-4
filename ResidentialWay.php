<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(){
        parent::setNbLane(2);
        parent::setMaxSpeed(50);
    }

    public function addVehicle(Vehicle $vehicle){
            $this->currentVehicles[] = $vehicle;
    }
}