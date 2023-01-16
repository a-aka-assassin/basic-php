<?php 
class Vehicle {

    private $numberOfWheels;
    private $cost;
    public function __construct($numberOfWheels, $cost) {
        $this->numberOfWheels = $numberOfWheels;
        $this->cost = $cost;
    }

    public function get_numberOfWheels() {
        return $this->numberOfWheels;
    }

    public function set_numberOfWheels($numberOfWheels){
        $this->numberOfWheels = $numberOfWheels;
    }

    public function get_cost(){
        return $this->cost;
    }

    public function set_cost($cost){
        $this->cost = $cost;
    }


}




?>
