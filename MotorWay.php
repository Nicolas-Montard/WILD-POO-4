<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct(){
        parent::setNbLane(4);
        parent::setMaxSpeed(130);
    }
    public function addVehicle(Vehicle $vehicle){
        if($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            return "this vehicle is not allowed";
        } else {
            $this->currentVehicles[] = $vehicle;
        }
    }
}