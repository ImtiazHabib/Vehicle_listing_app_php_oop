<?php 

require_once "vehicle_base.php";
require_once "vehicle_actions.php";
require_once "filehandler.php";

class vehicle_manager extends vehicle_base implements vehicle_actions{
    use filehandler;

     public function add_vehicle($data){
        // read all data from json file as array
        $vehicles = $this->read_file();
        // add new data to the last of the array
        $vehicles[] = $data;
        // write it to json data
        $this->write_file($vehicles);

     }
    public function edit_vehicle($id,$data){
       // read all data from json file as array
        $vehicles = $this->read_file();
        // check id available or not
        if(isset($vehicles[$id])){
            // add new data to the last of the array
        $vehicles[$id] = $data;
        // write it to json data
        $this->write_file($vehicles);
        }
    }
    public function delete_vehicle($id){
       // read all data from json file as array
        $vehicles = $this->read_file();
         // check id available or not
        if(isset($vehicles[$id])){
        // delete the data
        unset($vehicles[$id]);
        // write it to json data
        $this->write_file($vehicles);
        }
    }
    public function get_vehicle(){
          return $this->read_file();
    }
    public function getDetails(){
          return [
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image
        ];
    }
}

?>