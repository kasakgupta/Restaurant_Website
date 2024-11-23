<!-- reset-password.php -->
<?php
include('database.php');

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token is valid and has not expired
    $sql = "SELECT * FROM users WHERE reset_token = '$token' AND reset_token_expiry > NOW()";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

            // Update the user's password in the database
            $update_sql = "UPDATE users SET password = '$new_password', reset_token = NULL, reset_token_expiry = NULL WHERE email = '$email'";
            if (mysqli_query($conn, $update_sql)) {
                echo "<script>alert('Your password has been updated successfully.'); window.location.href = './login.php';</script>";
            } else {
                echo "<script>alert('Error updating password. Please try again.');</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid or expired reset link.'); window.location.href = './forgot-password.php';</script>";
    }
} else {
    header("Location: ./forgot-password.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="reset-password-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h2>Reset Your Password</h2>
            <div class="input-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required />
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required />
            </div>
            <button type="submit">Update Password</button>
        </form>
    </div>
</body>

</html>