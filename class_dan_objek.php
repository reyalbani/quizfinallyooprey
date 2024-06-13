<?php
class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

$avanza = new mobil();
?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

$avanza = new mobil();
$avanza->jumlahRoda();
$avanza->aktivkanJalan();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">jumlah roda: <?=$avanza->jumlahRoda()?><br><?=$avanza->aktifkanJalan()?>
        </code></pre>
    </div>

<?php include 'footer.php'; ?>