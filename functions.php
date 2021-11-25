<?php
// $conn = mysqli_connect("localhost", "root", "", "smartPJU");
$conn = mysqli_connect("sql211.epizy.com", "epiz_30433189", "xKy5OW97LnN7S", "epiz_30433189_smartPJU");

// untuk query data pusat
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

//untuk query data akun
function daftar($data)
{
  global $conn;
  $nama = strtolower(stripslashes($data["name"]));
  $email = stripslashes($data["email"]);
  $password = mysqli_real_escape_string($conn, $data["password"]);

  // cek apakah ada data email yang sama
  // $cek1 = mysqli_query($conn, "SELECT name from dataAkun WHERE name = '$nama'");
  $cek1 = mysqli_query($conn, "SELECT name from dataakun WHERE name = '$nama'");
  // $cek2 = mysqli_query($conn, "SELECT Email from dataAkun WHERE email = '$email'");
  $cek2 = mysqli_query($conn, "SELECT Email from dataakun WHERE email = '$email'");

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
  mysqli_query($conn, "INSERT INTO dataakun VALUES('', '$nama', '$email', '$password')");
  return mysqli_affected_rows($conn);
}

//untuk query data filter
function cari($pilihan, $filter)
{
  if ($filter == "kota") {
    $query = "SELECT * FROM pju WHERE kota = '$pilihan';";
  }

  if ($filter == "status") {
    if ($pilihan == "aktif") {
      $query = "SELECT * FROM pju WHERE tegangan > 200;";
    } else {
      $query = "SELECT * FROM pju WHERE tegangan < 200;";
    }
  }

  return query($query);
}
