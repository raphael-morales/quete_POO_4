<?php
//require_once('Bicycle.php');
//require_once 'Car.php';
//
//$bike = new Bicycle();
//
//
//// Moving bike
//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->brake() . ' km/h' . '<br>';
//echo $bike->brake();
//
//var_dump($bike);
//
//$car = new Car('red', '5','25');
//
//echo $car->forward();
//echo '<br> Vitesse du vélo : ' . $car->getCurrentSpeedCar() . ' km/h' . '<br>';
//echo $car->brake();
//echo '<br> Vitesse du vélo : ' . $car->brake() . ' km/h' . '<br>';
//echo $car->brake();
//
//var_dump($car);

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';




//$bicycle = new Bicycle('blue', 1);
//echo $bicycle->forward();
//var_dump($bicycle);
//
//$car = new Car('green', 4, 'electric');
//echo $car->forward();
//var_dump($car);
//
//$voiture = new Car('red', 5, 'electric');
//
//
//var_dump(Car::ALLOWED_ENERGIES);
//
//
//$truck = new Truck('red', '3', '100', 'fuel');
//$truck->setLoad(11);
//var_dump($truck);
//echo $truck->getLoad();
//
//$autoRoute = new MotorWay(4, 130);
//$autoRoute->addVehicule($car);
//$autoRoute->addVehicule($voiture);
//var_dump($autoRoute);
//$skate = new Skateboard('black', 0);
//
//$street = new PedestrianWay(1, 10);
//$street->addVehicule($bicycle);
//$street->addVehicule($skate);
//var_dump($street);
//
//$residenceRoad = new ResidentialWay(2, 50);
//$residenceRoad->addVehicule($truck);
//var_dump($residenceRoad);
$car = new Car('red',5,'electric');

try {
    $car->start(true);
} catch (Exception $e){
    echo $e->getMessage(). "<br>";
} finally {
    echo "Ma voiture roule comme un donut";
}





