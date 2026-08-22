<?php include "../Control/RegValidation.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="../js/RegValidation.js"></script>
<script src="../js/CheckEmail.js"></script>
<script src="../js/CheckUsername.js"></script>
<link rel="stylesheet" href="../css/style.css">
<title>Teacher Registration</title>
</head>
<body class="login-page">

<div class="login-container">
    <h1>Teacher Registration</h1>
    <?php if($dbValidation): ?><p class="success">Registered successfully. <a href="Login.php">Login here</a></p><?php endif; ?>

    <form method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter your name">
            <p class="field-error"><?php echo $ValidName ?? ""; ?></p>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" id="username" placeholder="Choose a username" onblur="Checkmyuser()">
            <p class="field-error"><?php echo $ValidUserName; ?></p>
            <p class="field-error" id="errorusername"></p>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="Email" placeholder="Enter your email" onblur="showmyuser()">
            <p class="field-error"><?php echo $validateemail; ?></p>
            <p class="field-error" id="erroremail"></p>
            <p class="field-error" id="errormail"></p>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Create password">
            <p class="field-error"><?php echo $validatepassword; ?></p>
            <p class="field-error" id="errorpass"></p>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password">
            <p class="field-error"><?php echo $validateconfirmpassword; ?></p>
            <p class="field-error" id="errorconfirm"></p>
        </div>

        <button type="submit" name="Register">Register</button>
    </form>

    <p class="account-text">Already have an account? <a href="Login.php">Login</a></p>
</div>

</body>
</html>