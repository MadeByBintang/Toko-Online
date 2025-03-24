<?php
session_start();

$usersFile = 'users.json';
$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST['name']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $address = trim($_POST['address']);
  $email = trim($_POST['email']);
  $saldo = floatval(str_replace(',', '', $_POST['saldo']));

  foreach ($users as $user) {
    if ($user['email'] === $email) {
      echo "<script>alert('Email sudah terdaftar!');</script>";
      exit;
    }
  }

  $users[] = [
    'name' => $name,
    'password' => $password,
    'address' => $address,
    'email' => $email,
    'saldo' => $saldo
  ];
  file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

  echo "<script>alert('Sign Up berhasil! Silakan Sign In.'); window.location='signin.php';</script>";
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
  <title>Sign Up to RedStore</title>
</head>

<body>
  <div class="login-outer-container">
    <div class="login-container">
      <div class="login-area">
        <h3>REGISTER TO REDSTORE</h3>
        <form class="login-items" method="POST">
          <label for="name">Name</label>
          <input type="text" class="login" name="name" placeholder="Your name" required />

          <label for="address">Address</label>
          <input type="text" class="login" name="address" placeholder="Your address" required />

          <label for="email">Email</label>
          <input type="email" class="login" name="email" placeholder="your-email@gmail.com" required />

          <label for="saldo">Saldo</label>
          <div class="input-group">
            <span class="input-group-text">Rp</span>
            <input type="text" class="login" name="saldo" id="saldo" placeholder="Enter your balance" required />
          </div>

          <label for="password">Password</label>
          <input type="password" class="login" name="password" placeholder="Enter password" required />

          <input type="submit" class="login-btn" value="Register" />
        </form>

        <p class="p">Already have an account?
          <a class="a" href="signIn.php">Please Login</a>
        </p>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('saldo').addEventListener('input', function(e) {
      let value = e.target.value.replace(/[^0-9]/g, ''); // Hanya angka
      e.target.value = new Intl.NumberFormat('id-ID').format(value);
      e.target.dataset.rawValue = value; // Simpan angka asli tanpa titik
    });

    document.querySelector('form').addEventListener('submit', function(e) {
      let saldoInput = document.getElementById('saldo');
      saldoInput.value = saldoInput.dataset.rawValue; // Pastikan data yang dikirim tanpa titik
    });
  </script>

</body>

</html>