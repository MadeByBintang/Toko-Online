<?php
session_start();

$usersFile = 'users.json';
$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

$defaultUser = [
  'email' => 'admin@example.com',
  'password' => password_hash('admin123', PASSWORD_DEFAULT),
  'name' => 'Admin',

  'email' => 'adrianbintang3@gmail.com',
  'password' => password_hash('adrian123', PASSWORD_DEFAULT),
  'name' => 'Bintang'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $loginDate = date('Y-m-d H:i:s');

  foreach ($users as $user) {
    if ($user['email'] === $email && password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user['name'];
      $_SESSION['login_date'] = $loginDate;
      header("Location: index.php");
      exit;
    }
  }

  if ($email === $defaultUser['email'] && password_verify($password, $defaultUser['password'])) {
    $_SESSION['user'] = $defaultUser['name'];
    $_SESSION['login_date'] = $loginDate;
    header("Location: index.php");
    exit;
  }

  echo "<script>alert('Sign In gagal! Cek email atau password.');</script>";
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
        <form class="login-items" method="POST">
          <label for="email">Email</label>
          <input type="email" class="login" name="email" placeholder="your-email@gmail.com" required />

          <label for="password">Password</label>
          <input type="password" class="login" name="password" placeholder="Your Password" required />

          <input type="hidden" name="login_date" value="<?php echo date('Y-m-d H:i:s'); ?>" />
          <input type="submit" class="login-btn" value="Login" />
        </form>

        <p class="p">New to RedStore? <a class="a" href="signUp.php">Create an Account</a></p>
      </div>
    </div>
  </div>
</body>

</html>