<?php
require 'tampilData/functions.php';
$data = query("SELECT * FROM pju1");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/dashboard.css">
  <title>Document</title>
</head>

<body>
  <!-- nav -->
  <div class="container">
    <nav>
      <div class="logo">
        <img src="img/logo-login.png" alt="">
      </div>
      <div class="navbar">
        <li>
          <ul><a href="dashbord.php">Monitoring PJU</a></ul>
          <ul><a href="">Monitoring data</a></ul>
          <ul><a href="contact-page.php">Contact</a></ul>
        </li>
      </div>
    </nav>

    <!-- main -->
    <div class="main">
      <h1>monitoring data</h1>
      <!-- filter -->
      <div class="box-filter">
        <select class="filter" name="filter" id="filter">
          <option value="0">filter berdasarkan</option>
          <option value="kotak">kota</option>
          <option value="status">status</option>
        </select>

        <select class="filter-kota" name="filter-kota" id="filter-kota">
          <option value="0">pilih kota</option>
          <option value="surabaya">surabaya</option>
          <option value="jombang">jombang</option>
        </select>

        <select class="filter-status" name="filter-status" id="filter-status">
          <option value="0">pilih status</option>
          <option value="aktif">aktif</option>
          <option value="tidak aktif">tidak aktif</option>
        </select>

      </div>
      <!-- akhir filter -->

      <table>
        <tr>
          <th>no</th>
          <th>PJU</th>
          <th>Lokasi</th>
          <th>kota/kabupaten</th>
          <th>Status</th>
          <th>cek</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($data as $row) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <?= $row["nama"]; ?>
            </td>
            <td>
              <?= $row["lokasi"]; ?>
            </td>
            <td>
              <?= $row["kota"]; ?>
            </td>
            <td>
              <p>aktif</p>
            </td>
            <td><a href="tampilData/tampilData.php">cek</a></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
  </div>

  <script src="js/dashbord.js"> </script>
</body>

</html>