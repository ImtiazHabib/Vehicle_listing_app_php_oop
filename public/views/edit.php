<?php

require_once "../../app/classes/vehicle_manager.php";

$id=1;
$update_vehicle_this = [
     'name' => 'BMW i7',
    'type' => 'virgo',
    'price' => 400002,
    'image' => 'https://shorturl.at/Kn89z'
];

$update_vehicle = new vehicle_manager('','','','');
$update_vehicle->edit_vehicle($id,$update_vehicle_this,);
echo "Vehicle with ID $id updated successfully!";


?>