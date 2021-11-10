<!-- php -->
<?php
require 'tampilData/functions.php';
$data = query("SELECT * FROM pju1");
$data_kota = query("SELECT DISTINCT kota FROM pju1");

//pilihan
if (isset($_POST["filter_input"])) {
  if ($_POST["filter_kota"] == "0") {
    $data = query("SELECT * FROM pju1");
  } else {
    $data = cari($_POST["filter_kota"]);
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
            <option value="tidak aktif">tidak aktif</option>
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

  <!-- javascript -->
  <script src="js/dashbord.js"> </script>
</body>

</html>