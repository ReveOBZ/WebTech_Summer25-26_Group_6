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
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>Admin Login</title>
</head>
<body class="login-page">

<div class="login-container">
    <h1>Admin Login</h1>
    <?php if($loginInfo!=""): ?><p class="error"><?php echo $loginInfo; ?></p><?php endif; ?>

    <form method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label>Email</label>
            <input type="text" placeholder="Enter Email" name="email" id="Email">
            <p class="field-error"><?php echo $validateemail; ?></p>
            <p class="field-error" id="errormail"></p>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Enter Password" name="password" id="password">
            <p class="field-error"><?php echo $validatepassword; ?></p>
            <p class="field-error" id="errorpass"></p>
        </div>

        <button type="submit" name="Login">Login</button>
    </form>

    <p class="account-text"><a href="../../MainPage.php">Back to Home</a></p>
</div>

</body>
</html>