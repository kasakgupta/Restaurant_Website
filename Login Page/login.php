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
      <h2 class="form-heading">Log In to Your Account</h2>
      <div class="input-group">
        <label for="username">Username or Email:</label>
        <input type="text" id="username" name="username" required aria-label="Username or Email" />
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required aria-label="Password" />
      </div>
      <div class="input-group">
        <label for="captcha">Enter CAPTCHA:</label>
        <input type="text" id="captchaInput" name="captchaInput" required aria-label="CAPTCHA Input" />
        <span id="captchaOutput"></span>
        <span id="captchaError" style="color: red; display: none;">CAPTCHA not matched! Try again.</span>
      </div>
      <button type="submit">Login</button>
      <div class="links">
        <p class="account-action">Don't have an account? <a href="./registration.php">Sign Up</a></p>
        <p class="password-action"><a href="./forgot-password.php">Forgot Password?</a></p>
      </div>
    </form>
  </div>

  <script>
    let generatedCaptcha = '';

    function generateCaptcha() {
      const chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      generatedCaptcha = '';
      for (let i = 0; i < 6; i++) {
        const index = Math.floor(Math.random() * chars.length);
        generatedCaptcha += chars[index];
      }
      document.getElementById('captchaOutput').innerText = generatedCaptcha;
    }

    function validateCaptcha(event) {
      const userCaptcha = document.getElementById('captchaInput').value.trim();
      if (userCaptcha !== generatedCaptcha) {
        document.getElementById('captchaError').style.display = 'block';
        event.preventDefault();
      } else {
        document.getElementById('captchaError').style.display = 'none';
      }
    }

    window.onload = function() {
      generateCaptcha();
      document.getElementById('loginForm').addEventListener('submit', validateCaptcha);
    };
  </script>
</body>

</html>