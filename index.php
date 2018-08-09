<?php

require_once "OO/Car.php";
require_once "OO/Motorcycle.php";

$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 300;
$ferrari->setDoors(2);

$mustang = new Car("Mustang", "Black");
$mustang->engine = 280;
$mustang->setDoors(4);

$moto = new Motorcycle("Honda", "Blue");
$moto->engine = 160;

// echo $mustang->getEngine();
echo $ferrari->getBrand();
