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
        <ul>
          <li><a href="../dashbord.php">Monitoring PJU</a></li>
          <li><a href="tampilData.php">Monitoring data</a></li>
          <li><a href="../contact-page.php">Contact</a></li>
        </ul>
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
              <h2 id="tegangan"></h2><span>V</span>
            </div>
            <p>Voltage</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2 id="arus"></h2><span>A</span>
            </div>
            <p>Current</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2 id="power"></h2><span>W</span>
            </div>
            <p>Power</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2 id="energy"></h2><span>V</span>
            </div>
            <p>Energy</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2 id="frekuensi"></h2><span>Hz</span>
            </div>
            <p>Frequency</p>
          </div>

          <div class="nilai">
            <div class="nilai-data">
              <h2 id="powerFactor"></h2><span>V</span>
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
              <p id="lokasi"></p>
            </div>

            <div class="kota">
              <h3>kota: </h3>
              <p id="kota"></p>
            </div>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5616124219387!2d112.78948481441763!3d-7.290614294737927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa4227c8a8ad%3A0xa1275d5bce212771!2sJl.%20Arief%20Rahman%20Hakim%2C%20Keputih%2C%20Kec.%20Sukolilo%2C%20Kota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1636507800494!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          <div class="tombol">
            <a href="../dashbord.php" class="btn-kembali"> <img src="../img/kembali.png" alt=""> Kembali</a>
            <a href="https://goo.gl/maps/zbeeQRu9LQx5JbN37" target="blank" class="btn-cek-lokasi">cek lokasi</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- javascript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="realtime.js"></script>
</body>

</html>