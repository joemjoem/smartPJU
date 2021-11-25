<!-- php -->
<?php
require 'tampilData/functions.php';

//query data ke database
$data = query("SELECT * FROM pju WHERE namaPJU = 'PJU1' ORDER BY id DESC;");

// query data untuk filter
$data_kota = query("SELECT DISTINCT kota FROM pju");

//pilihan
if (isset($_POST["filter_input"])) {
  if ($_POST["filter_kota"] != "0") {
    $filter = "kota";
    $data = cari($_POST["filter_kota"], $filter);
  } elseif ($_POST["filter_status"] != "0") {
    $filter = "status";
    $data = cari($_POST["filter_status"], $filter);
  } else {
    $data = query("SELECT * FROM pju");
  }
}
?>

<!-- html -->
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
  <?php require "navbar.php" ?>

  <!-- main -->
  <div class="main">
    <h1>monitoring data</h1>
    <!-- filter -->
    <div class="box-filter">
      <select class="filter" name="filter" id="filter">
        <option selected id="default">filter berdasarkan</option>
        <option id="kota">kota</option>
        <option id="status">status</option>
      </select>

      <form action="" method="POST">
        <select class="filter-kota" name="filter_kota" id="filter_kota">
          <option value="0">pilih kota</option>
          <?php foreach ($data_kota as $kota) : ?>
            <option value="<?= $kota["kota"]; ?>"><?= $kota["kota"]; ?></option>
          <?php endforeach; ?>
        </select>

        <select class="filter-status" name="filter_status" id="filter_status">
          <option value="0">pilih status</option>
          <option value="aktif">aktif</option>
          <option value="tidak_aktif">tidak aktif</option>
        </select>

        <button type="submit" name="filter_input">cari</button>
      </form>

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
            <?= $row["namaPJU"]; ?>
          </td>
          <td>
            <?= $row["lokasi"]; ?>
          </td>
          <td>
            <?= $row["kota"]; ?>
          </td>
          <td>
            <?php if ($row["tegangan"] > 200) : ?>
              <p style="color: green;">aktif</p>
            <?php endif; ?>

            <?php if ($row["tegangan"] < 200) : ?>
              <p style="color: red;">tidak aktif</p>
            <?php endif; ?>
          </td>
          <td><a href="tampilData/tampilData.php">cek</a></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>
  <div class="kotak-hitam"></div>
  </div>

  <!-- javascript -->
  <script src="js/dashbord.js"> </script>
</body>

</html>