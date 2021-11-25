<?php
require "functions.php";
// $hasil = mysqli_query($conn, "SELECT * FROM PJU ORDER BY id DESC");
$hasil = mysqli_query($conn, "SELECT * FROM pju ORDER BY id DESC");
$data = mysqli_fetch_array($hasil);
$frekuensi = $data["frekuensi"];

if ($frekuensi == 0) {
  $frekuensi = 0;
}

echo $frekuensi;
