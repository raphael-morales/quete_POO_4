<?php

final class ResidentialWay extends HighWay{

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($vehicle)
    {
        // TODO: Implement addVehicule() method.
        if ($vehicle instanceof Vehicle){
            $this->currentVehicules [] = $vehicle;
        }
    }
}