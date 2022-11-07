<?php

require './Vehicle.php';
//require_once './Bicycle.php';
require_once './Car.php';
//require './Truck.php';

//$bike = new Bicycle('blue',1);
$car = new Car('green',5,'regular');
//$truck = new Truck('black',2,'diesel');

//echo $bike->forward();
//echo $bike->brake();

//echo $car->forward();
//echo $car->brake();

//echo $truck->forward();
//echo $truck->brake();
//echo $truck->load();

try {
    $car->start();
} catch (Exception $e) {
    echo 'Exception received : ' . $e->getMessage() . PHP_EOL;
} finally {
    echo "Ma voiture roule comme un donut!!" . PHP_EOL;
}
