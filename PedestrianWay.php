<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct(){
        parent::setNbLane(1);
        parent::setMaxSpeed(10);
    }

    public function addVehicle(Vehicle $vehicle){
        if($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            $this->currentVehicles[] = $vehicle;
        } else {
            return "this vehicle is not allowed";
        }
    }
}