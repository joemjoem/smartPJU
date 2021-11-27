<?php
require "tampilData/functions.php";

if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password  = $_POST["password"];

  $cek = mysqli_query($conn, "SELECT * FROM dataakun WHERE Email = '$email'");
  if (mysqli_num_rows($cek) === 1) {
    $row = mysqli_fetch_assoc($cek);

    if (password_verify($password, $row["password"])) {
      header("location: dashbord.php");
      exit;
    }
  }
  $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>smartPJU</title>
</head>

<body>
  <div class="container">
    <div class="logo">
      <div class="gambar">
        <img src="img/logo-login.png" alt="">
      </div>
    </div>
    <div class="login-form">
      <form action="" method="POST">
        <h1>Login</h1>
        <label for="">Email</label>
        <input type="text" name="email" id="email">
        <label for="">Password</label>
        <input type="password" name="password" id="password">
        <p>create your account?<a href="signUp.php">SignUp</a></p>
        <button type="submit" name="login">login</button>

        <!-- jika email atau password salah -->
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">email/password salah</p>
        <?php endif; ?>
      </form>
    </div>
  </div>
</body>

</html>