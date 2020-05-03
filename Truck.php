<?php
class Truck extends Vehicle
{
    private $stockageCapacity;

    private $load;

    private $energy;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    public function __construct(string $color, int $nbSeats, int $stockageCapacity, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->stockageCapacity = $stockageCapacity;
        $this->setEnergy($energy);
    }

    public function setLoad($load) :void {
        $this->load = $load;
    }

    public function getLoad() : string {
        if ($this->load >= $this->stockageCapacity ){
           return $load = 'full';
        }else{
            return $load = 'in filling';
        }
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy){
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }



}