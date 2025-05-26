<?php 
require_once "../../app/classes/vehicle_manager.php";
$id=2;

$delete_vehicle = new vehicle_manager('','','','');
$delete_vehicle->delete_vehicle($id);
echo "Vehicle with ID $id deleted successfully!";

?>