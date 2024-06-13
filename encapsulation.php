<?php

class NamaKelas { 
    private $dataPribadi = "Ini adalah Variabel Private";
    protected $dataProtected = "Ini adalah Variabel Protected";

    private function metodePribadi() {
        return "Ini adalah Metode Private";
    }

    protected function metodeProtected() {
        return "Ini adalah Metode Protected";
    }

    public function metodePublik() {
        echo "Ini adalah Metode Publik"."<br>";
        echo $this->metodePribadi() ."<br>";
        echo $this->dataPribadi . "<br>";
        echo $this->metodeProtected() . "<br>";
        echo $this->dataProtected . "<br>";
    }
}

class TurunanNamaKelas extends NamaKelas {
    public function metodeTurunan() {
        echo "Metode dari Kelas Turunan"."<br>";
        echo $this->metodeProtected() . "<br>";
        echo $this->dataProtected . "<br>";
    }
}


$objek = new NamaKelas();

$objekTurunan = new TurunanNamaKelas();
?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python"> class NamaKelas { 

    private $dataPribadi = "Ini adalah Variabel Private";
    protected$dataProtected = "Ini adalah Variabel Protected";

    private function metodePribadi() {
        return "Ini adalah Metode Private";
    }

    protected function metodeProtected() {
        return "Ini adalah Metode Protected";
    }

    public function metodePublik() {
        echo "Ini adalah Metode Publik";
        echo $this->metodePribadi();
        echo $this->dataPribadi;
        echo $this->metodeProtected;
        echo $this->dataProtected;
    }
}

class TurunanNamaKelas extends NamaKelas {
    public function metodeTurunan() {
        echo "Metode dari Kelas Turunan";
        echo $this->metodeProtected();
        echo $this->dataProtected;
    }
}


$objek = new NamaKelas();
$objek->metodePublik();

echo "Mengakses melalui kelas turunan";
$objekTurunan = new TurunanNamaKelas();
$objekTurunan->metodeTurunan();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content"><?=$objek->metodePublik()?><br><?=$objekTurunan->metodeTurunan()?></code></pre>
    </div>

<?php include 'footer.php'; ?>