<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $nbStorage;
    private int $lading = 0;

    public function __construct(int $nbStorage, string $color, int $nbSeats, string $energy)
    {
        $this->nbStorage = $nbStorage;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;        
    }

    /**
     * Getters and Setters
    */
    public function getNbStorage(): int
    {
        return $this->nbStorage;
    }

    public function setNbStorage($nbStorage): void
    {
        $this->nbStorage = $nbStorage;
    }

    public function getLading(): int
    {
        return $this->lading;
    }

    public function setLading($lading): void
    {
        $this->lading = $lading;
    }


    /**
     * Methods
    */
    public function hasFuel(Truck $truck): string
    {
        $full = "";

        if($truck->nbStorage >= $truck->lading) $full = "full";
        else $full = "in filling";

        return $full;
    }
}

