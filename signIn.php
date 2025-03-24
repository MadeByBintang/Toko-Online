<?php
session_start();

// Data pengguna default
$defaultUser = [
  "name" => "Admin",
  "email" => "admin@redstore.com",
  "alamat" => "Jl. Admin No.1",
  "tanggal_lahir" => "2005-08-21",
  "saldo" => 1000000,
  "password" => password_hash("admin123", PASSWORD_DEFAULT)
];

// Menangani pesan login
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = trim($_POST["email"]);
  $password = $_POST["password"];

  // Cek jika user ada dalam sesi
  if (isset($_SESSION['users'])) {
    foreach ($_SESSION['users'] as $user) {
      if ($user["email"] === $email && password_verify($password, $user["password"])) {
        $_SESSION["logged_in"] = true;
        $_SESSION["user"] = $user;
        echo "<script>alert('Login berhasil!'); window.location.href = 'index.php';</script>";
        exit();
      }
    }
  }

  // Cek default user
  if ($defaultUser["email"] === $email && password_verify($password, $defaultUser["password"])) {
    $_SESSION["logged_in"] = true;
    $_SESSION["user"] = $defaultUser;
    echo "<script>alert('Login berhasil!'); window.location.href = 'index.php';</script>";
    exit();
  }

  $_SESSION['message'] = "Email atau password salah!";
  echo "<script>alert('Email atau password salah!'); window.location.href = 'signIn.php';</script>";
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style-auth.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
  <title>Login to RedStore</title>
</head>

<body>
  <div class="login-outer-container">
    <div class="login-container">
      <div class="login-area">
        <h3>LOGIN TO REDSTORE</h3>

        <?php if (!empty($message)): ?>
          <p style="color: red; font-size: 14px; font-weight: bold; margin-bottom: 10px;">
            <?php echo htmlspecialchars($message); ?>
          </p>
        <?php endif; ?>


        <form class="login-items" method="POST">
          <label>Email:</label>
          <input type="email" class="login" name="email" placeholder="Masukkan Email" required />

          <label>Password:</label>
          <input type="password" class="login" name="password" placeholder="Masukkan Password" required />

          <input type="submit" class="login-btn" value="Login" />
        </form>
        <p class="p">Belum punya akun? <a class="a" href="signUp.php">Daftar</a></p>
      </div>
    </div>
  </div>
</body>

</html>