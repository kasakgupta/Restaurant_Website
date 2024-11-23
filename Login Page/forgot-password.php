<!-- forgot-password.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="forgot-password-container">
        <form action="send-reset-link.php" method="POST">
            <h2>Forgot Password?</h2>
            <div class="input-group">
                <label for="email">Enter your email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <button type="submit">Send Reset Link</button>
            <p><a href="./login.php">Back to Login</a></p>
        </form>
    </div>
</body>

</html>