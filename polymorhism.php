<?php
        abstract class Animal {
            abstract public function makeSound();
        }
        
        
        class Dog extends Animal {
            public function makeSound() {
                return "Woof!";
            }
        }
        
        class Cat extends Animal {
            public function makeSound() {
                return "Meow!";
            }
        }
        
        class Cow extends Animal {
            public function makeSound() {
                return "Moo!";
            }
        }
        
        class Sheep extends Animal {
            public function makeSound() {
                return "Baa!";
            }
        }
        
        
        class Duck extends Animal {
            public function makeSound() {
                return "Quack!";
            }
        }
        
        
        function animalSound(Animal $animal) {
            echo $animal->makeSound() . "<br>";
        }
        
        
        $dog = new Dog();
        $cat = new Cat();
        $cow = new Cow();
        $sheep = new Sheep();
        $duck = new Duck();
        
        
        // animalSound($dog); 
        // animalSound($cat);
        // animalSound($cow); 
        // animalSound($sheep); 
        // animalSound($duck); 
    ?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Animal {

        abstract class animal{
        abstract public function makeSound();
        }
        
        class Dog extends Animal {
            public function makeSound() {
                return "Woof!";
            }
        }
        
        class Cat extends Animal {
            public function makeSound() {
                return "Meow!";
            }
        }
        
        class Cow extends Animal {
            public function makeSound() {
                return "Moo!";
            }
        }
        
        class Sheep extends Animal {
            public function makeSound() {
                return "Baa!";
            }
        }
        
        
        class Duck extends Animal {
            public function makeSound() {
                return "Quack!";
            }
        }
        
        function animalSound(Animal $animal) {
            echo $animal->makeSound();
        }
        
        $dog = new Dog();
        $cat = new Cat();
        $cow = new Cow();
        $sheep = new Sheep();
        $duck = new Duck();
        ;</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">
        <?=animalSound($dog)?>
        <?=animalSound($cat)?>
        <?=animalSound($cow)?>
        <?=animalSound($sheep)?>
        <?=animalSound($duck)?>
</code></pre>
    </div>

<?php include 'footer.php'; ?>