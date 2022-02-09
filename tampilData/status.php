<?php
require "functions.php";
// $hasil = mysqli_query($conn, "SELECT * FROM PJU ORDER BY id DESC");
$hasil = mysqli_query($conn, "SELECT * FROM pju ORDER BY id DESC");
$data = mysqli_fetch_array($hasil);
$status = $data["power"];

if ($status > 0) {
  echo "aktif";
} elseif ($status <= 0) {
  echo "tidak aktif";
}
