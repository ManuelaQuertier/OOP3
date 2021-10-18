<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue',1 );

require_once 'Skateboard.php';
$skate = new Skateboard ('green', 0);


/*echo $bike-> forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();*/

//echo '<br><hr>';

require_once 'Car.php';
$auto = new Car('green', 5, 'electric');


/*echo $auto-> forward();
echo '<br>Vitesse de la voiture : ' . $auto->getCurrentSpeed() . 'km/h' . '<br>';
echo $auto-> brake();
echo '<br>Vitesse de la voiture : ' . $auto->getCurrentSpeed() . 'km/h' . '<br>';
echo $auto-> brake();*/

//echo'<br><hr>';

//require_once 'Truck.php';
//$truck = new Truck('black', 3, 6,'fuel');
//var_dump($truck);

/*echo $truck-> forward();
echo '<br>Vitesse du camion : ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck-> brake();
echo '<br>Vitesse du camion : ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck-> brake();
echo'<br>Capacité du camion : ' . $truck->getCapacity() . 'tonnes' . '<br>';
echo 'Stock actuel: ' . $truck->getStock() . 'tonnes' . '<br> Etat: <br>';
echo $truck-> isFull();*/

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
$road = new MotorWay(4,130);
$pedestrianRoad = new PedestrianWay(1,10);
$residentialRoad = new ResidentialWay(2,50);

var_dump($road);
var_dump($pedestrianRoad);
var_dump($residentialRoad);


$road->addVehicle($auto);
var_dump($road->getCurrentVehicles());
echo '<br><br>';

$road->addVehicle($bike);
var_dump($road->getCurrentVehicles());
echo '<br><br>';





