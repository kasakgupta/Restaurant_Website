<!-- send-reset-link.php -->
<?php
include('database.php'); // Your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];

        // Generate a unique token for password reset
        $token = bin2hex(random_bytes(50));

        // Store the token in the database (expires in 1 hour)
        $expire_time = date("Y-m-d H:i:s", strtotime("+1 hour"));
        $update_sql = "UPDATE users SET reset_token = '$token', reset_token_expiry = '$expire_time' WHERE email = '$email'";
        mysqli_query($conn, $update_sql);

        // Send the reset link via email
        $reset_link = "http://yourwebsite.com/reset-password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Hello $username,\n\nClick the following link to reset your password: $reset_link\n\nThis link will expire in 1 hour.";
        $headers = "From: no-reply@yourwebsite.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "<script>alert('A password reset link has been sent to your email.'); window.location.href = './login.php';</script>";
        } else {
            echo "<script>alert('Error sending email. Please try again later.');</script>";
        }
    } else {
        echo "<script>alert('Email not found in our system.'); window.location.href = './forgot-password.php';</script>";
    }
}
?>