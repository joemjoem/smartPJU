<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$powerFactor = $data["powerFactor"];

if ($powerFactor == 0) {
  $powerFactor = 0;
}

echo $powerFactor;
