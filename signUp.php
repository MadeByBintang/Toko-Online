<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style-auth.css">
  <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <title>Sign Up to RedStore</title>
</head>

<body>
  <div class="login-outer-container">
    <div class="login-container">
      <div class="login-area">
        <h3>REGISTER TO REDSTORE</h3>
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
          <input type="number" class="login" name="saldo" required />

          <label>Password:</label>
          <input type="password" class="login" name="password" placeholder="Masukkan Password" required />

          <label for="birthdate">Birthdate</label>
          <input type="date" class="login" name="birthdate" required

          <input type="submit" class="login-btn" value="Register" />
        </form>

        <p class="p">Sudah punya akun?
          <a class="a" href="signIn.php">Masuk</a>
        </p>
      </div>
    </div>
  </div>
</body>

</html>