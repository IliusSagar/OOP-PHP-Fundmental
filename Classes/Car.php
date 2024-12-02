<?php 

class Car {
    // Properties / Fields
    public $brand;
    private $color;
    public $vehicleType = "car";

    // Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$car01 = new Car("Volvo", "green");
// echo $car01->brand;