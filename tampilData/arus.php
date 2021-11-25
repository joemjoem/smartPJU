<?php
require "functions.php";
// $hasil = mysqli_query($conn, "SELECT * FROM PJU ORDER BY id DESC");
$hasil = mysqli_query($conn, "SELECT * FROM pju ORDER BY id DESC");
$data = mysqli_fetch_array($hasil);
$arus = $data["arus"];

if ($arus == 0) {
  $arus = 0;
}

echo $arus;
