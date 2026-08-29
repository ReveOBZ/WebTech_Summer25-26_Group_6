<?php include "../Control/LoginValidation.php"; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - EduQuiz</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../JavaScript/Validation.js"></script>
</head>
<body>
<header>
    <a class="brand" href="../../index.php">EduQuiz</a>
    <nav>
        <a href="Login.php">Login</a>
        <a href="Registration.php">Register</a>
    </nav>
</header>
<main class="container">
    <div class="card auth">
        <h1>Login</h1>
        <?php if($message!=""){ ?><div class="alert error"><?php echo htmlspecialchars($message); ?></div><?php } ?>
        <form method="post" action="" onsubmit="return validateLogin()">
            <label>Email</label>
            <input id="loginEmail" type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            <br><br>

            <label>Password</label>
            <input id="loginPassword" type="password" name="password" required>
            <br><br>

            <label style="font-weight:400">
                <input style="width:auto" type="checkbox" name="remember" <?php if(isset($_COOKIE["remember_email"])) echo "checked"; ?>> Remember Me
            </label>
            <br>

            <button class="btn" type="submit">Login</button>
            <a href="ForgotPassword.php">Forgot password?</a>
        </form>
    </div>
</main>
</body>
</html>
