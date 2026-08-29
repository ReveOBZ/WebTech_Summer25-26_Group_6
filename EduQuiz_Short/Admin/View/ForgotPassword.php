<?php include "../Control/ForgotPasswordValidation.php"; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reset Password - EduQuiz</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../JavaScript/Validation.js"></script>
</head>
<body>
<header>
    <a class="brand" href="../../index.php">EduQuiz</a>
    <nav><a href="Login.php">Login</a><a href="Registration.php">Register</a></nav>
</header>
<main class="container">
    <div class="card auth">
        <h1>Reset Password</h1>
        <?php if($message!=""){ ?><div class="alert error"><?php echo htmlspecialchars($message); ?></div><?php } ?>
        <form method="post" action="" onsubmit="return validateForgotPassword()">
            <label>Email</label><input id="forgotEmail" type="email" name="email" required><br><br>
            <label>Username</label><input id="forgotUsername" name="username" required><br><br>
            <label>New password</label><input id="forgotPassword" type="password" name="password" required><br><br>
            <label>Confirm new password</label><input id="forgotConfirm" type="password" name="confirm" required><br><br>
            <button class="btn" type="submit">Reset Password</button>
        </form>
    </div>
</main>
</body>
</html>
