<?php

final class PedestrianWay extends HighWay{

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($bicycle)
    {
        // TODO: Implement addVehicule() method.
        if ($bicycle instanceof Bicycle){
            $this->currentVehicules [] = $bicycle;
    }
    }

}