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
        <form class="login-items">
          <label for="email">Email</label>
          <input type="email" class="login" name="email" placeholder="your-email@gmail.com" required />

          <label for="password">Password</label>
          <input type="password" class="login" name="password" placeholder="Your Password" required />

          <input type="submit" class="login-btn" value="Login" />
        </form>

        <p class="p">New to RedStore? <a class="a" href="signUp.php">Create an Account</a></p>
      </div>
    </div>
  </div>
</body>

</html>