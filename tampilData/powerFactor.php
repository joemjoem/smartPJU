<?php
require "functions.php";
// $hasil = mysqli_query($conn, "SELECT * FROM PJU ORDER BY id DESC");
$hasil = mysqli_query($conn, "SELECT * FROM pju ORDER BY id DESC");
$data = mysqli_fetch_array($hasil);
$powerFactor = $data["PF"];

if ($powerFactor == 0) {
  $powerFactor = 0;
}

echo $powerFactor;
