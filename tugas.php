<?php
$listkeluarga = [
    "Suyono",
    "Nurhayati",
    "Ade Kurniawan Wibowo",
    "Putri Saptia Puspita",
    "Rakha Syafiq Febrian"
];
?>

<?php

function hitung_vocal($keluarga){
  $a = substr_count($keluarga, 'a');
  $i = substr_count($keluarga, 'i');
  $u = substr_count($keluarga, 'u');
  $e = substr_count($keluarga, 'e');
  $o = substr_count($keluarga, 'o');
  $jumlah = ($a+$i+$u+$e+$o);

return $jumlah;
}

function hitung_konsonan($keluarga){
  $pjg_str = strlen($keluarga);
  $a = substr_count($keluarga, 'a');
  $i = substr_count($keluarga, 'i');
  $u = substr_count($keluarga, 'u');
  $e = substr_count($keluarga, 'e');
  $o = substr_count($keluarga, 'o');
  $jumlah = $pjg_str - ($a+$i+$u+$e+$o);

  return $jumlah;
}  
?>

<DOCTYPE html>
<html>
    <body>
        <title> MODUL 1 Praktikum </title>
            <head>
                <h>Praktikum PewMeb 1 Modul 1 </h>
                <p> Nama : Putri Saptia Puspita </p>
                <p> NIM : 11191060 </p>
            </head>
            <p> Nomor 1 : Nama Anggota Keluarga </p>
    <?php 
    foreach ($listkeluarga as $keluarga) {
        echo $keluarga . "<br>";
      }

    ?>
    
                <p> Nomor 2 : Jumlah Huruf </p>
    <?php
    foreach ($listkeluarga as $keluarga) {
        echo strlen ($keluarga) . "<br>" ;
      }    
    ?>
                <p> Nomor 2 : Jumlah Kata </p>
    <?php
    foreach ($listkeluarga as $keluarga) {
        echo str_word_count ($keluarga) . "<br>" ;
    }
    ?>
                <p> Nomor 3 : Kebalikan Nama </p>
    <?php
    foreach ($listkeluarga as $keluarga) {
        echo strrev ($keluarga) . "<br>" ;
    }
    ?>
                <p> Nomor 4 : Jumlah Huruf Vokal </p>
    <?php 
    foreach ($listkeluarga as $keluarga) {
      echo hitung_vocal($keluarga)."<br>" ;
        
    }
    ?>
               <p> Nomor 4 : Jumlah Huruf Konsonan </p>
    <?php
    foreach ($listkeluarga as $keluarga) {
      echo hitung_konsonan($keluarga). "<br>";
    }
    ?>
    
    
    </body>
</html>