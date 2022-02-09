<!-- fitur untuk registrasi -->
<?php
require "tampilData/functions.php";

if (isset($_POST["registrasi"])) {
  if ($_POST["email"] == "" && $_POST["password"] == "") {
    echo "
            <script>alert('isi data terlebih dahulu') </script>
        ";
  } else {
    if (daftar($_POST) > 0) {
      echo "
              <script> alert('data berhasil terdaftar') </script>
          ";
    } else {
      echo mysqli_error($conn);
    }
  }

  // header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/signUp.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <title>smartPJU</title>
</head>

<body>
  <div class="container">
    <div class="logo">
      <div class="gambar">
        <img src="img/logo-login.png" alt="">
      </div>
    </div>
    <div class="signUp-form">
      <form action="" method="POST">
        <h1>Sign Up</h1>
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <button type="submit" name="registrasi">SignUp</button>
        <a href="login.php">kembali ke login</a>
      </form>
    </div>
  </div>
</body>

</html>