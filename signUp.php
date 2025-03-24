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
        <form class="login-items">
          <label for="name">Name</label>
          <input type="text" class="login" name="name" placeholder="Your name" required />

          <label for="address">Address</label>
          <input type="text" class="login" name="address" placeholder="Your address" required />

          <label for="email">Email</label>
          <input type="email" class="login" name="email" placeholder="your-email@gmail.com" required />

          <label for="saldo">Saldo</label>
          <div class="input-group">
            <span class="input-group-text">Rp</span>
            <input type="number" class="login" name="saldo" id="saldo" min="0" step="0.01" placeholder="Enter your balance" required />
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
</body>

</html>