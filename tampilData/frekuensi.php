<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$frekuensi = $data["frekuensi"];

if ($frekuensi == 0) {
  $frekuensi = 0;
}

echo $frekuensi;
