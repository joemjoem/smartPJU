<?php
require "functions.php";
// $hasil = mysqli_query($conn, "SELECT * FROM PJU ORDER BY id DESC");
$hasil = mysqli_query($conn, "SELECT * FROM pju ORDER BY id DESC");
$data = mysqli_fetch_array($hasil);
$tegangan = $data["tegangan"];

if ($tegangan == 0) {
  $tegangan = 0;
}

echo $tegangan;
