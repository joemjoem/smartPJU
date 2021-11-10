<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$lokasi = $data["lokasi"];

if ($lokasi == "") {
  $lokasi = null;
}

echo $lokasi;
