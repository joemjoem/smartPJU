<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$kota = $data["kota"];

if ($kota == "") {
  $kota = null;
}

echo $kota;
