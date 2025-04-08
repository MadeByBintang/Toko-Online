<?php
session_start();
require_once("koneksi.php");

// Inisialisasi pesan
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);

// Proses sign-up
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $alamat = trim($_POST["alamat"]);
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $saldo = $_POST["saldo"];
  $password = $_POST["password"];

  if (empty($name) || empty($email) || empty($alamat) || empty($tanggal_lahir) || empty($saldo) || empty($password)) {
    $_SESSION['message'] = "Semua kolom harus diisi!";
    header("Location: signUp.php");
    exit();
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['message'] = "Format email tidak valid!";
    header("Location: signUp.php");
    exit();
  }

  // Bersihkan saldo dari titik pemisah
  $saldo = str_replace('.', '', $saldo);
  if (!is_numeric($saldo) || $saldo < 0) {
    $_SESSION['message'] = "Saldo tidak valid!";
    header("Location: signUp.php");
    exit();
  }

  $saldo = intval($saldo);
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  try {
    $sql = "INSERT INTO users (name, email, alamat, tanggal_lahir, saldo, password)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $alamat, $tanggal_lahir, $saldo, $hashedPassword]);

    $_SESSION['message'] = "Pendaftaran berhasil! Silakan login.";
    header("Location: signIn.php");
    exit();
  } catch (PDOException $e) {
    $_SESSION['message'] = "Gagal mendaftar: " . $e->getMessage();
    header("Location: signUp.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style-auth.css" />
  <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <title>Sign Up to RedStore</title>
</head>

<body>
  <div class="login-outer-container">
    <div class="login-container">
      <div class="login-area">
        <h3>REGISTER TO REDSTORE</h3>
        <?php if (!empty($message)) : ?>
          <p class="error-message"><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>
        <form class="login-items" method="POST">
          <label>Name:</label>
          <input type="text" class="login" name="name" placeholder="Masukkan Nama" required />

          <label>Email:</label>
          <input type="email" class="login" name="email" placeholder="Masukkan Email" required />

          <label>Alamat:</label>
          <input type="text" class="login" name="alamat" placeholder="Masukkan Alamat" required />

          <label>Tanggal Lahir:</label>
          <input type="date" class="login" name="tanggal_lahir" required />

          <label>Saldo:</label>
          <input type="text" class="login" id="saldo" name="saldo" placeholder="Masukkan Saldo" required />

          <label>Password:</label>
          <input type="password" class="login" name="password" placeholder="Masukkan Password" required />

          <input type="submit" class="login-btn" value="Register" />
        </form>

        <p class="p">Sudah punya akun?
          <a class="a" href="signIn.php">Masuk</a>
        </p>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("saldo").addEventListener("input", function(e) {
      let value = e.target.value.replace(/\D/g, "");
      if (value === "") {
        e.target.value = "";
        return;
      }
      e.target.value = new Intl.NumberFormat("id-ID").format(parseInt(value, 10));
    });
  </script>
</body>

</html>