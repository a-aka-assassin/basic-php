<?php
require "Vehicle.php";
require "Car.php";
require "Truck.php";

$car = new Car(4, 2490);
$truck = new Truck(18, 300000);

echo "The car has " . $car->get_numberOfWheels() . " and is worth " . $car->get_cost() . '<br /><br />';
echo "The truck has " . $truck->get_numberOfWheels() . " and is worth " . $truck->get_cost();


?>