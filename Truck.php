<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacity;

    private int $load = 0;

    private string $energy;

    public function __construct($capacity, $color, $nbSeats, $energy){
        parent::__construct($color, $nbSeats);
        $this->capacity = $capacity;
        $this->energy = $energy;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getLoad()
    {
        return $this->load;
    }

    public function setLoad($load)
    {
        $this->load = $load;

        return $this;
    }
    
    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    public function loadAnalyzer(){
        if(!$this->load < $this->capacity){
            return 'full';
        } else {
            return 'in filling';
        }
    }

}