<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$arus = $data["arus"];

if ($arus == 0) {
  $arus = 0;
}

echo $arus;
