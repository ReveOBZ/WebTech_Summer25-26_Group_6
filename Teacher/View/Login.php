<?php include "../Control/LoginValidation.php" ;
if(isset($_SESSION["Email"])){
    header("location: Dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="../js/LoginValidation.js"></script>
<link rel="stylesheet" href="../css/style.css">
<title>Teacher Login</title>
</head>
<body class="login-page">

<div class="login-container">
    <h1>Teacher Login</h1>
    <?php if($loginInfo!=""): ?><p class="error"><?php echo $loginInfo; ?></p><?php endif; ?>

    <form method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="Email" placeholder="Enter your email">
            <p class="field-error"><?php echo $validateemail; ?></p>
            <p class="field-error" id="errormail"></p>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <p class="field-error"><?php echo $validatepassword; ?></p>
            <p class="field-error" id="errorpass"></p>
        </div>

        <button type="submit" name="Login">Login</button>
    </form>

    <p class="account-text">Don't have an account? <a href="Registration.php">Register</a></p>
</div>

</body>
</html>