<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay {

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($car)
    {
        // TODO: Implement addVehicule() method.
        if ($car instanceof Car){
            $this->currentVehicules [] = $car;
        }
    }

}