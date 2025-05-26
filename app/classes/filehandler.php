<?php 
// here i need to declare traits to handle file read and write,

trait filehandler{
    
    // file path
    public $file_path = __DIR__ . "/../../data/vehicles.json";

    //  reading form file
    public function read_file(){

        // file check
        if(!file_exists($this->file_path)){
            // create a null array file
            file_put_contents($this->file_path,json_encode([]));

        }
        // return file data as array
        return  json_decode(file_get_contents($this->file_path),true);
    }

    // function to write on json file array data
    public function write_file($data){
        file_put_contents($this->file_path,json_encode($data,JSON_PRETTY_PRINT));
    }
}
?>