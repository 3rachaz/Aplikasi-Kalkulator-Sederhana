<?php 
$a = $_POST['bilangan1']; //variabel
$b = $_POST['bilangan2'];//variabel 

//function penjumlahan
function penjumlahan($a, $b){ //nama function penjumlahan dengan value a dan b
  $tambah = $a + $b; //statement dimana variabel tambah akan menjumlahkan nilai a dan b
  return $tambah; //mengembalikan nilai tambah
}

function pengurangan($a, $b){ //nama function pengurangan dengan value a dan b
  $kurang = $a - $b; //statement dimana variabel kurang akan mengurangi nilai a dengan nilai b
  return $kurang; //mengembalikan nilai kurang
}

function perkalian($a, $b){  //nama function perkalian dengan value a dan b
  $kali = $a * $b; //statement dimana variabel kali akan mengalikan nilai a dengan nilai b
  return $kali; //mengambalikan nilai kali
}

function pembagian($a, $b){  //nama function pembagian dengan value a dan b
  $bagi = $a / $b; //statement dimana variabel bagi akan membagi nilai a dengan nilai b
  return $bagi; //mengembalikan nilai bagi
}


$sum = penjumlahan($a, $b); //menjalankan fungsi penjumlahan dalam variabel sum
$divide = pembagian($a,$b); //menjalankan variabel pembagian dalam variabel divide
$ex = pengurangan($a, $b);
$exp = perkalian($a, $b);


 ?>

<link rel="stylesheet" type="text/css" href="style.css">
<section id="iqqo1" class="gpd-section">
  <div id="iost7" class="gpd-container">
    <h1 id="ikb9j" class="gpd-header">Kalkulator sederhana
    </h1>
  </div>
</section>
<section class="gpd-section" id="ip3zj">
  <div class="gpd-container gpd-cnt">
    <form method="post" class="form" id="ijg4f">
      <div class="form-group">
        <label class="label">Bilangan 1</label>
        <input type="number" placeholder="Masukkan bilangan 1" name="bilangan1" required class="input"/>
      </div>
      <div class="form-group">
        <label class="label">Bilangan 2</label>
        <input type="number" placeholder="Masukkan bilangan 2" name="bilangan2" required class="input"/>
      </div>
      <div class="form-group">
        <button type="submit" class="button" id="iojb74">Hitung</button>
      </div>
      <div data-form-state="success" class="state-success" id="ixby4l">Thanks! We received your request
      </div>
      <div data-form-state="error" class="state-error" id="ipxclk">An error occurred on processing your request, try again!
      </div>
    </form>
    <div class="gpd-text" id="i61zr">
      Hasil penjumlahan adalah: <?php echo $sum; ?>
      <br>Hasil pengurangan adalah: <?php echo $ex; ?>
      <br>Hasil perkalian adalah: <?php echo $exp; ?>
      <br>Hasil pembagian adalah: <?php echo $divide; ?>
      <br>
    </div>
  </div>
</section>

