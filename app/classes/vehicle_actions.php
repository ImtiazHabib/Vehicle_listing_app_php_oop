<?php 

interface vehicle_actions{
    public function add_vehicle($data);
    public function edit_vehicle($id,$data);
    public function delete_vehicle($id);
    public function get_vehicle();
}
 
?>