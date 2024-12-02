<?php 

class Car {
    // Properties / Fields
    private $brand;
    private $color;
    // public $vehicleType = "car";

    // Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter & Setter Methods
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $allowedColors = [
            "red",
            "blue",
            "green",
            "yellow"
        ];
        if(in_array($color, $allowedColors)){
            $this->color = $color;
        }
     
    }

    // Method
    public function getCarInfo(){
        return "Brand: ". $this->brand .", Color: ". $this->color;
    }
}

// $car01 = new Car("Volvo", "green");
// echo $car01->brand;

// echo $car01->getCarInfo();
// echo "<br>";
// echo $car01->vehicleType;