<?php

abstract class Vehicle {
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }

    abstract public function drive();
}

class Car extends Vehicle {
    public function drive() {
        return "Membawa Mobil Model: " . $this->model;
    }
}

class Motorcycle extends Vehicle {
    public function drive() {
        return "Membawa Motor Model : " . $this->model;
    }
}

$car = new Car("Doddge RAM150R");
// echo $car->drive() . "<br>";

$motorcycle = new Motorcycle("Yamaha M3 Ngatta Ngatta");
// echo $motorcycle->drive() . "<br>";

?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">abstract class Vehicle {
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }

    abstract public function drive();
}

class Car extends Vehicle {
    public function drive() {
        return "Membawa Mobil Model: " . $this->model;
    }
}

class Motorcycle extends Vehicle {
    public function drive() {
        return "Membawa Motor Model : " . $this->model;
    }
}

$car = new Car("Doddge RAM150R");
// echo $car->drive() .;

$motorcycle = new Motorcycle("Yamaha M3 Ngatta Ngatta");
// echo $motorcycle->drive() .;
</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content"><?= $car->drive();?><br><?= $motorcycle->drive();?>
        </code></pre>
    </div>

<?php include 'footer.php'; ?>