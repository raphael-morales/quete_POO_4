<?php

abstract class HighWay {

    /**
     * @var array
     */
    protected $currentVehicules = [];

    /**
     * @var int
     */
    private $nbLane;

    /**
     * @var int
     */
    private $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVehicules()
    {
        return $this->currentVehicules;
    }

    /**
     * @param array $currentVehicules
     */
    public function setCurrentVehicules($currentVehicules)
    {
        $this->currentVehicules = $currentVehicules;
    }

    /**
     * @return mixed
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract function addVehicule($vehicle);

}