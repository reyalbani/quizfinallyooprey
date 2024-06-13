<?php
class Kendaraan {
    public function nyalakanMesin() {
        return "Mesin kendaraan menyala";
    }
    
    public function matikanMesin() {
        return "Mesin kendaraan mati";
    }
}

class Mobil extends Kendaraan {
    public function nyalakanMesin() {
        return "Mesin mobil menderu!";
    }
    
}

// Membuat instance dari Kendaraan dan Mobil
$kendaraanUmum = new Kendaraan();
$mobil = new Mobil();

// Memanggil metode nyalakanMesin dan matikanMesin dari kedua instance
// echo $kendaraanUmum->nyalakanMesin();  
// echo "\n";
// echo $kendaraanUmum->matikanMesin();  
// echo "\n";
// echo $mobil->nyalakanMesin();          
// echo "\n";
// echo $mobil->matikanMesin();          


?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Kendaraan {
    public function nyalakanMesin() {
        return "Mesin kendaraan menyala";
    }
    
    public function matikanMesin() {
        return "Mesin kendaraan mati";
    }
}

class Mobil extends Kendaraan {
    public function nyalakanMesin() {
        return "Mesin mobil menderu!";
    }
    
    // Metode matikanMesin tidak dioverride di sini, 
    //jadi akan menggunakan implementasi dari Kendaraan
}

// Membuat instance dari Kendaraan dan Mobil
$kendaraanUmum = new Kendaraan();
$mobil = new Mobil();

// Memanggil metode nyalakanMesin dan matikanMesin dari kedua instance
// echo $kendaraanUmum->nyalakanMesin();  
// echo "\n";
// echo $kendaraanUmum->matikanMesin();  
// echo "\n";
// echo $mobil->nyalakanMesin();          
// echo "\n";
// echo $mobil->matikanMesin();        
        </code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content"><?=$kendaraanUmum->nyalakanMesin();?><br><?=$kendaraanUmum->matikanMesin();?><br><?=$mobil->nyalakanMesin();?>
        </code></pre>
    </div>

<?php include 'footer.php'; ?>