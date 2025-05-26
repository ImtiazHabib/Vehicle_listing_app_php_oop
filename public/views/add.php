<?php

require_once "../../app/classes/vehicle_manager.php";

$new_vehicle = [
     'name' => 'BMW i4',
    'type' => 'Turbo',
    'price' => 400002,
    'image' => 'https://shorturl.at/Kn89z'
];

$add_vehicle = new vehicle_manager('','','','');
$add_vehicle->add_vehicle($new_vehicle);
echo "Vehicle added successfully!";

?>