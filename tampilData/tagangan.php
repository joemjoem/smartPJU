<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$tegangan = $data["tegangan"];

if ($tegangan == 0) {
  $tegangan = 0;
}

echo $tegangan;
