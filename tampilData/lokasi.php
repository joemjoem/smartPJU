<?php
require "functions.php";
// $hasil = mysqli_query($conn, "SELECT * FROM PJU ORDER BY id DESC");
$hasil = mysqli_query($conn, "SELECT * FROM pju ORDER BY id DESC");
$data = mysqli_fetch_array($hasil);
$lokasi = $data["lokasi"];

if ($lokasi == "") {
  $lokasi = null;
}

echo $lokasi;
