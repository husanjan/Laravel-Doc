<?php

error_reporting(-1);
require_once 'classes/Car.php';


function debug($data)
{
    echo '<pre>'.print_r($data,1).'</pre>';
}
echo Car::$countCar;
$car1=new Car('Black',4,180,'volvo');
$car2=new Car('Black',4,200,'bmw');
echo Car::getCount();
echo $car1->getCarInfo();
echo $car2->getCarInfo();
echo $car2->Test();
echo $car1->getPrototypeInfo();

echo  '<br>';
$car1->getLorem();