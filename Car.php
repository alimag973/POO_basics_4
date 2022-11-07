<?php

require_once 'Vehicule.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'diesel',
        'regular',
    ];

    protected string $energy;
    protected int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function start(): string 
    {
        if ( $hasParkBrake === true) {
            throw new Exception('départ impossible, enlever le frein à main' . PHP_EOL);
        } else {
            return 'GO' . PHP_EOL;
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }

        }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}