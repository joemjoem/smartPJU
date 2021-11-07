<?php
require "functions.php";
$datPJU = query("SELECT * FROM pju1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/tampilData.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <nav>
      <div class="logo">
        <img src="../img/logo-login.png" alt="">
      </div>
      <div class="navbar">
        <li>
          <ul><a href="dashbord.php">Monitoring PJU</a></ul>
          <ul><a href="tampilData.php">Monitoring data</a></ul>
          <ul><a href="contact-page.php">Contact</a></ul>
        </li>
      </div>
    </nav>

    <!-- main -->
    <div class="main">
      <div class="judul">
        <img src="img/icon-pju.png" alt="">
        <h1>PJU 1</h1>
      </div>

      <div class="data">
        <div class="box-nilai">
          <div class="nilai">
            <div class="nilai-data">
              <h2><?= $datPJU["tegangan"]; ?></h2><span>V</span>
            </div>
            <p>Voltage</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2><?= $datPJU["arus"]; ?></h2><span>A</span>
            </div>
            <p>Current</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2><?= $datPJU["power"]; ?></h2><span>W</span>
            </div>
            <p>Power</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2><?= $datPJU["energy"]; ?></h2><span>V</span>
            </div>
            <p>Energy</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2><?= $datPJU["frekuensi"]; ?></h2><span>Hz</span>
            </div>
            <p>Frequency</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2><?= $datPJU["powerFactor"]; ?></h2><span>V</span>
            </div>
            <p>Power Factor</p>
          </div>
        </div>
        <div class="status-lokasi">
          <div class="data-status">
            <div class="status">
              <h3>status:</h3>
              <p>Aktif</p>
            </div>

            <div class="lokasi">
              <h3>Lokasi: </h3>
              <p><?= $datPJU["lokasi"]; ?></p>
            </div>

            <div class="kota">
              <h3>kota: </h3>
              <p><?= $datPJU["kota"]; ?></p>
            </div>
          </div>

          <div class="tombol">
            <a href="../dashbord.php" class="btn-kembali"> <img src="../img/kembali.png" alt=""> Kembali</a>
            <a href="" class="btn-cek-lokasi">cek lokasi</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>