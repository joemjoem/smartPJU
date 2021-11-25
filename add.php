<?php
include 'tampilData/functions.php';

$namaPJU = "PJU1";
$lokasi = "jl.arif rahman hakim";
$kota = "surabaya";
$tegangan = mysqli_real_escape_string($conn, $_REQUEST['tegangan']);
$arus = mysqli_real_escape_string($conn, $_REQUEST['arus']);
$power = mysqli_real_escape_string($conn, $_REQUEST['power']);
$enerrgy = mysqli_real_escape_string($conn, $_REQUEST['enerrgy']);
$frekuensi = mysqli_real_escape_string($conn, $_REQUEST['frekuensi']);
$powerFactor = mysqli_real_escape_string($conn, $_REQUEST['powerFactor']);

$sql = "INSERT INTO PJU VALUES ('', '$namaPJU', '$lokasi', '$kota', '$tegangan', '$arus', '$power', '$enerrgy', '$frekuensi', '$powerFactor');";

if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
