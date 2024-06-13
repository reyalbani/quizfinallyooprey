
<?php

class Vehicle {
    public $brand;
    public $model;

   
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

   
    public function describe() {
        return "Ini Adalah  {$this->brand} {$this->model}.";
    }

  
    public function makeSound() {
        return "The vehicle makes a generic sound.";
    }
}


class Car extends Vehicle {
    
    public $numberOfDoors;

   
    public function __construct($brand, $model, $numberOfDoors) {
        
        parent::__construct($brand, $model);
        $this->numberOfDoors = $numberOfDoors;
    }

    
    public function makeSound() {
        return "Mobil itu Membunyikan Klakson";
    }

    
    public function getNumberOfDoors() {
        return "Mobil Ini Memiliki {$this->numberOfDoors} ban";
    }
}


class Motorcycle extends Vehicle {
   
    public $type;

    
    public function __construct($brand, $model, $type) {
        
        parent::__construct($brand, $model);
        $this->type = $type;
    }

    
    public function makeSound() {
        return "Motor Itu Membunyikan Klakson";
    }

    
    public function getType() {
        return "Ini Adalah Motor Kawasaki {$this->type}.";
    }
}


$myCar = new Car("Toyota", "lexus", 4);
// echo $myCar->describe(); 
// echo "<br>";
// echo $myCar->makeSound(); 
// echo "<br>";
// echo $myCar->getNumberOfDoors(); 

// echo "<br><br>"; 


$myMotorcycle = new Motorcycle("Kawasaki", "ZX-25R", "sport");
// echo $myMotorcycle->describe(); 
// echo "<br>";
// echo $myMotorcycle->makeSound(); 
// echo "<br>";
// echo $myMotorcycle->getType(); 
?>


<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Vehicle {
    
    public $brand;
    public $model;

   
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

   
    public function describe() {
        return "Ini Adalah  {$this->brand} {$this->model}.";
    }

  
    public function makeSound() {
        return "The vehicle makes a generic sound.";
    }
}


class Car extends Vehicle {
    
    public $numberOfDoors;

   
    public function __construct($brand, $model,
    $numberOfDoors){
        
        parent::__construct($brand, $model);
        $this->numberOfDoors = $numberOfDoors;
    }

    
    public function makeSound() {
        return "Mobil itu Membunyikan Klakson";
    }

    
    public function getNumberOfDoors() {
        return "Mobil Ini Memiliki {$this->numberOfDoors} 
        ban";
    }
}

class Motorcycle extends Vehicle {
   
    public $type;

    
    public function __construct($brand, $model, $type) {
        
        parent::__construct($brand, $model);
        $this->type = $type;
    }

    
    public function makeSound() {
        return "Motor Itu Membunyikan Klakson";
    }

    
    public function getType() {
        return "Ini Adalah Motor Kawasaki {$this->type}.";
    }
}


$myCar = new Car("Toyota", "lexus", 4);
$myMotorcycle = new Motorcycle("Kawasaki", "ZX-25R", "sport");
</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content"> 
         <?=$myCar->describe()?><br>
         <?=$myCar->makesound()?><br>
         <?=$myCar->getNumberOfDoors()?><br>

         <?=$myMotorcycle->describe()?><br>
         <?=$myMotorcycle->makeSound()?><br>
         <?=$myMotorcycle->getType()?>
    </code></pre>
    </div>

<?php include 'footer.php'; ?>