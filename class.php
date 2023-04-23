<!DOCTYPE html>
<html>
<body>

<?php
// Define a Car class
class Car {
  // Define public properties
  public $color;
  public $model;
  
  // Define a constructor method that takes color and model as parameters
  public function __construct($color, $model) {
    // Assign the color and model parameters to the object's properties
    $this->color = $color;
    $this->model = $model;
  }
  
  // Define a message method that returns a string describing the car's color and model
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

// Create a new Car object with a black color and Volvo model
$myCar = new Car("black", "Volvo");
// Call the message method of the Car object to print the car's description
echo $myCar -> message();
// Print a line break
echo "<br>";

// Create a new Car object with a red color and Toyota model
$myCar = new Car("red", "Toyota");
// Call the message method of the Car object to print the car's description
echo $myCar -> message();
?>

</body>
</html>
