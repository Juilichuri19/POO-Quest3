<?php

abstract class HighWay
{
    protected $currentVehicles = array();
    protected int $nbLane ;
    protected int $maxSpeed;
    
    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicleType);

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane()
    {
        return $this->nbLane;
    }
    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }



}