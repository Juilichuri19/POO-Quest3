<?php

require_once __DIR__.'/HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;

    }
}