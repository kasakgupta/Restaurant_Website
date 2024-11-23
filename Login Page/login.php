<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant Login</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <div class="login-container">
    <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <h2 class="form-heading">Log In to Your Account</h2> <!-- Updated heading -->
      <div class="input-group">
        <label for="username">Username or Email:</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
      </div>
      <div class="input-group">
        <label for="captcha">Enter CAPTCHA:</label>
        <input type="text" id="captchaInput" name="captchaInput" required />
        <span id="captchaOutput"></span>
      </div>
      <button type="submit">Login</button>
      <div class="links">
        <p class="account-action">Don't have an account? <a href="./registeration.php">Sign Up</a></p> <!-- Updated link -->
        <p class="password-action"><a href="./forgot-password.php">Forgot Password?</a></p>
      </div>
    </form>
  </div>

  <script>
    function generateCaptcha() {
      let chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      let captcha = '';
      for (let i = 0; i < 6; i++) {
        let index = Math.floor(Math.random() * chars.length);
        captcha += chars[index];
      }
      document.getElementById('captchaOutput').innerText = captcha;
    }

    function validateCaptcha() {
      let userCaptcha = document.getElementById('captchaInput').value.trim();
      let generatedCaptcha = document.getElementById('captchaOutput').innerText;
      if (userCaptcha === generatedCaptcha) {
        alert('CAPTCHA matched! Proceed with login.');
      } else {
        alert('CAPTCHA not matched! Try again.');
        event.preventDefault();
      }
    }

    window.onload = function() {
      generateCaptcha();
      document.getElementById('loginForm').addEventListener('submit', validateCaptcha);
    };
  </script>
</body>

</html>
