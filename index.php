<?php

require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'Bicycle.php';
require 'Car.php';
require 'Skateboard.php';
require 'Truck.php';

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay(2,50);

$bicycle = new Bicycle('blue', 1);
$pedestrianWay->addVehicle($bicycle);
$skateboard = new Skateboard('black',1);
$pedestrianWay->addVehicle($skateboard);
echo "Pedestrian way vehicles: \n";
print_r($pedestrianWay->getCurrentVehicles());
echo "<br>";


$car1 = new Car('green', 4, 'electric');
$motorWay->addVehicle($car1);
$car2 = new Car('red', 4, 'fuel');
$motorWay->addVehicle($car2);
echo "Motor way vehicles: \n";
print_r($motorWay->getCurrentVehicles());
echo "<br>";

$truck = new Truck('brown',2,'fuel',40);
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($car1);
$residentialWay->addVehicle($bicycle);
echo "Residential way vehicles: \n";
print_r($residentialWay->getCurrentVehicles());














