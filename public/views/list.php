<?php

require_once "../../app/classes/vehicle_manager.php";
$get_vehicle = new vehicle_manager('','','','');

$vehicles = $get_vehicle->get_vehicle();

echo "Vehicle List:<br><br>";

foreach($vehicles as $index=>$vehicle){
    echo "ID : $index<br>";
    echo "Name: " . $vehicle['name']. "<br>";
    echo "Type: " . $vehicle['type']. "<br>";
    echo "Price: " . $vehicle['price']. "<br>";
    echo "Image: " . $vehicle['image']. "<br>";
    echo "=========================<br>";
}
