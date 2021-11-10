<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$energy = $data["energy"];

if ($energy == 0) {
  $energy = 0;
}

echo $energy;
