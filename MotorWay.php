<?php

require_once __DIR__.'/HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane = 4 , int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}