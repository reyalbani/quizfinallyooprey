<?php

class Calculator {
    // Magic method __call untuk menangani metode yang tidak didefinisikan
    public function __call($name, $arguments) {
        if ($name == 'add') {
            return $this->addNumbers(...$arguments);
        } elseif ($name == 'multiply') {
            return $this->multiplyNumbers(...$arguments);
        } else {
            throw new BadMethodCallException("Method $name does not exist");
        }
    }

    private function addNumbers($a, $b) {
        return $a + $b;
    }

    private function multiplyNumbers($a, $b) {
        return $a * $b;
    }
}

$calc = new Calculator();
// echo $calc->add(3, 4); // Output: 7
// echo "\n";
// echo $calc->multiply(3, 4); // Output: 12
?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Calculator {
    // untuk menangani metode yang tidak didefinisikan
    public function __call($name, $arguments) {
        if ($name == 'add') {
            return $this->addNumbers(...$arguments);
        } elseif ($name == 'multiply') {
            return $this->multiplyNumbers(...$arguments);
        } else {
            throw new BadMethodCallException
            ("Method $name does not exist");
        }
    }

    private function addNumbers($a, $b) {
        return $a + $b;
    }

    private function multiplyNumbers($a, $b) {
        return $a * $b;
    }
}

$calc = new Calculator();
// echo $calc->add(3, 4); // Output: 7
// echo "\n";
// echo $calc->multiply(3, 4); // Output: 12 ;
</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">Output + : <?= $calc->add(5, 2) ?> <br>
Output x : <?= $calc->multiply(5, 5) ?> <br>
</code></pre>
    </div>

<?php include 'footer.php'; ?>