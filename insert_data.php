<?php

if (isset($_GET["tegangan"])) {
  $tegangan = $_GET["tegangan"]; // get temperature value from HTTP GET
  $arus = $_GET["arus"];
  $power = $_GET["power"];
  $energi = $_GET["energi"];
  $frekuensi = $_GET["frekuensi"];
  $PF = $_GET["PF"];
  $nama = "pju1";
  $lokasi = "Jl.rojomino";
  $kota = "surabaya";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database_name = "smartPJU";

  // menghubungkan ke database
  $connection = new mysqli($servername, $username, $password, $database_name);
  // Cek koneksi
  if ($connection->connect_error) {
    die("MySQL connection failed: " . $connection->connect_error);
  }

  // mengim data ke database
  $sql = "INSERT INTO pju VALUES ('', '$nama', '$lokasi', '$kota', '$tegangan', '$arus', '$power', '$energi', '$frekuensi', '$PF')";
  $result = mysqli_query($connection, $sql);
  if ($result === TRUE) {
    echo "kirim data berhasil";
  } else {
    echo "Error: " . $sql . " => " . $connection->error;
  }

  $connection->close();
} else {
  echo "kirim data gagal ";
}
