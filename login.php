<?php

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $error = "Please fill all fields";
    } else {
        header("Location: student/dashboard.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Quiz</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="login-page">

<div class="login-container">

    <h1>Login</h1>

    <?php if ($error != ""): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
        </div>

        <button type="submit">Login</button>

    </form>

    <p class="account-text">
        Don't have an account?
        <a href="register.php">Register</a>
    </p>

</div>

</body>
</html>