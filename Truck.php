<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel' ,
        'electirc',
    ];

    private int $storageCapacity;
    private int $loading = 0;
    private $energy;




    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        if ($this->loading <= $this->getStorageCapacity()) {
            $this->loading = $loading;
        } else {
            $this->loading = $this->getStorageCapacity();
        }
    }
    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy): Truck
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function checkCapacity(): string
    {
        if ($this->getStorageCapacity() === $this->getLoading()) {
            return "full";
        } else {
            return "in filling";
        }
    }


}