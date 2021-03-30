<?php

require_once 'Classes/Truck.php';

$truck = new Truck(20, "Green", 4, "fuel");
$truck->setLading(20);

/*
* Test truck function
*/ 
function testTruck(Truck $oneTruck)
{
    echo $oneTruck->forward().PHP_EOL;
    echo 'Vitesse du camion : '. $oneTruck->getCurrentSpeed().PHP_EOL;
    echo $oneTruck->brake().PHP_EOL;
    echo 'Vitesse camion après arrêt : '. $oneTruck->getCurrentSpeed().PHP_EOL;
    echo 'Contrôle chargement : '.$oneTruck->hasFuel($oneTruck).PHP_EOL
    ;
}

testTruck($truck);
