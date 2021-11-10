<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$power = $data["power"];

if ($power == 0) {
  $power = 0;
}

echo $power;
