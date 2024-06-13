<?php
class Motor {
    private $merk;
    private $warna;

    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function __toString() {
        return "Motor {$this->merk} berwarna {$this->warna}";
    }

    public function __call($namaMetode, $argumen) {
        echo "'$namaMetode' <br>";
    }

    public function __isset($property) {
        if (property_exists($this, $property)) {
            return isset($this->$property);
        }
        return false;
    }

    public function __unset($property) {
        if (property_exists($this, $property)) {
            unset($this->$property);
        }
    }

    // Getter for merk
    public function getMerk() {
        return $this->merk;
    }

    // Setter for merk
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    // Getter for warna
    public function getWarna() {
        return $this->warna;
    }

    // Setter for warna
    public function setWarna($warna) {
        $this->warna = $warna;
    }
}

$motor1 = new Motor("Supperleggera V4", "Merah");

//  echo $motor1 . "\n";

// $motor->tidaktersedia();"<br>";

// if (isset($motor->warna)) {
//     echo "Warna Tersedia<br>";
// } 
// else {
//     echo "Warna is not set<br>";
// }

$motor1->setMerk("Panigale V4");
$motor1->setWarna("Hitam");
// echo "Merk baru: " . $motor->getMerk() . "<br>";
// echo "Warna baru: " . $motor->getWarna() . "\n";
?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Mobil {
    
    private $merk;
    private $warna;

    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function __toString() {
        return "Mobil {$this->merk} berwarna {$this->warna}";
    }

    public function __call($namaMetode, $argumen) {
        echo "Metode '$namaMetode' tidak ditemukan atau tidak tersedia\n";
    }

    public function __isset($warna) {
        $warna = $this->warna;
        echo "warna mobil: $warna";
    }

    public function __unset($merek) {
        $merek = $this->merk;
        echo "merek mobil: $merek";
    }

}

$mobil = new Mobil("Toyota", "Merah");

//Menggunakan __toString()
echo "Info Mobil: $mobil\n";

// Mencoba memanggil metode yang tidak ada
$mobil->metodeTidakAda();

// Mengecek apakah properti ada menggunakan __isset()
echo isset($mobil->harga);</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">info Motor: <?=$motor1->getmerk();?><br>
        <?= $motor1->tidaktersedia()?><br>
        <?= isset($motor1->Warna)?>Warna   :<?= $motor1->getWarna();?>
    </code></pre>
    </div>

<?php include 'footer.php'; ?>

