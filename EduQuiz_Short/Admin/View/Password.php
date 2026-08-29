<?php include "../Control/PasswordValidation.php"; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Change Password - EduQuiz</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <a class="brand" href="<?php echo $home; ?>">EduQuiz</a>
    <nav>
        <a href="<?php echo $home; ?>">Dashboard</a>
        <a href="Profile.php">Profile</a>
        <a href="Password.php">Password</a>
        <a href="../Control/logout.php">Logout</a>
    </nav>
</header>
<main class="container">
    <div class="card auth">
        <h1>Change Password</h1>
        <?php if($message!=""){ ?><div class="alert error"><?php echo htmlspecialchars($message); ?></div><?php } ?>
        <?php if($success!=""){ ?><div class="alert success"><?php echo htmlspecialchars($success); ?></div><?php } ?>
        <form method="post" action="">
            <label>Current password</label><input type="password" name="old" required><br><br>
            <label>New password</label><input type="password" name="new" required><br><br>
            <label>Confirm new password</label><input type="password" name="confirm" required><br><br>
            <button class="btn" type="submit">Change Password</button>
        </form>
    </div>
</main>
</body>
</html>
