<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pju1 ORDER BY id DESC");
$data = mysqli_fetch_array($result);
$status = $data["tegangan"];

if ($status > 200) {
  echo "aktif";
} elseif ($status < 200) {
  echo " tidak aktif";
}
