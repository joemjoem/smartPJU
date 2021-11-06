<?php
$conn = mysqli_connect("localhost", "root", "", "smartPJU");


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows = $row;
  }

  return $rows;
}

function daftar($data)
{
  global $conn;
  $nama = strtolower(stripslashes($data["name"]));
  $email = stripslashes($data["email"]);
  $password = mysqli_real_escape_string($conn, $data["password"]);

  // cek apakah ada data email yang sama
  $cek1 = mysqli_query($conn, "SELECT name from dataAkun WHERE name = '$nama'");
  $cek2 = mysqli_query($conn, "SELECT Email from dataAkun WHERE email = '$email'");

  if (mysqli_fetch_assoc($cek1)) {
    echo "
            <script>nama sudah terdafta</script>
        ";
    return false;
  } elseif (mysqli_fetch_assoc($cek2)) {
    echo "
    <script>email sudah terdafta</script>
    ";
    return false;
  }

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  // memasukkan data ke databse
  mysqli_query($conn, "INSERT INTO dataAkun VALUES('', '$nama', '$email', '$password')");
  return mysqli_affected_rows($conn);
}
