<?php

include ('Vehicle.php');
include('Plane.php');
include ('Car.php');
include('Bike.php');

$plane = new Plane();
$plane-> velocidad(1000);
$plane-> fly();	 
$plane-> maxpassengers(600);

$car = new Car();
$car-> velocidad(160);
$car-> notfly();
$car-> maxpassengers(5);


$bike = new Bike();
$bike-> velocidad(30);
$bike-> notfly();
$bike-> maxpassengers(2);

?>