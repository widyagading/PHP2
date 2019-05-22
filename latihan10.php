<?php
    $arrNilai = array ("Ani" => 80, "otim" => 90, "Ana" => 75, "Budi" => 85);

    echo "menampilkan isi array dengan foreach : <br>";
    foreach ($arrNilai as $nama => $nilai) {
      // code...
      echo "Nilai $nama = $nilai<br>";
    }
    reset ($arrNilai);
    echo "<br>Menanpilkan isi array dengan while dan list : <br>";
    while (list ($nama, $nilai) = each($arrNilai)) {
      // code...
      echo "Nilai $nama = $nilai<br";
    }
 ?>
