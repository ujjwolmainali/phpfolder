<?php
// class Animal
// {
//   public $name;
//   public $color;
//   function set_name($name)
//   {
//     $this->name = $name;
//   }
//   function get_name()
//   {
//     return $this->name;
//   }
// }
// $deer = new Animal();
// $lion = new Animal();
// $deer->set_name('i love deer');
// $lion->set_name('lion is very dangerous');
// echo $deer->get_name();
// echo "<br>";
// echo $lion->get_name();

// class bmc
// {
//   public $studentname;

//   function showname($studentname)
//   {
//     return $studentname;
//   }
// }

// $student1 = new bmc();
// $student2 =  new bmc();
// echo $student1->showname("ujjwol");
// echo $student2->showname("sanwor");

//anonymous class
// $x = new class {
//   public function display()
//   {
//     echo "hello";
//   }
// };
// $x->display();

// class Car
// {
//   public $make;
//   public $model;

//   public function setMake($make)
//   {
//     $this->make = $make;  // Accessing the property using $this
//   }

//   public function getMake()
//   {
//     return $this->make;  // Accessing the property using $this
//   }

//   public function displayInfo()
//   {
//     return "This car is a " . $this->make . " " . $this->model . "."; // Accessing properties within the class
//   }
// }

// // Create an instance of the Car class
// $myCar = new Car();

// // Setting properties using methods
// $myCar->setMake("Toyota");  // Calls the setMake method to set the $make property

// // Accessing a property directly (if it's public)
// $myCar->model = "Corolla";  // Directly setting the $model property

// // Getting a property value using a method
// echo $myCar->getMake();  // Outputs: Toyota

// // Accessing a method directly
// echo $myCar->displayInfo();  // Outputs: This car is a Toyota Corolla.

// class BMC
// {
//   public $name;
//   public $age;

//   public function set_name($name, $age)
//   {
//     $this->name = $name;
//     $this->age = $age;
//   }
//   public function get_name()
//   {
//     return $this->name . $this->age;
//   }
// }

// $object = new BMC();
// $object->set_name('ujjwol', 22);
// echo $object->get_name();

$bmc = new class {
  public $name;
  public $age;
  public function set_name($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
  public function get_name()
  {
    return "the name is $this->name and age is $this->age";
  }
};

$bmc->set_name('kishan', 22);
echo $bmc->get_name();
