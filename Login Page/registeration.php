<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant Registration</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <div class="register-container">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
      <h2 class="form-heading">Create Your Account</h2> <!-- Updated heading -->
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
      </div>
      <div class="input-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required />
      </div>
      <button type="submit">Register</button>
      <div class="links">
        <p class="account-action">Already have an account? <a href="./login.php">Log In</a></p> <!-- Updated link -->
      </div>
    </form>
  </div>
</body>

</html>
