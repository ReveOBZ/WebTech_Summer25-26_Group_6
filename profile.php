<?php

$role = "Student";
$name = "Rifat";
$email = "rifat@gmail.com";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];

    if (empty($name) || empty($email)) {
        $message = "Please fill all fields";
    } else {
        $message = "Profile updated successfully";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="login-page">

<div class="login-container">

    <h1>My Profile</h1>

    <?php if ($message != ""): ?>

        <p class="enrolled-text">
            <?php echo $message; ?>
        </p>

    <?php endif; ?>

    <form method="POST">

        <div class="form-group">

            <label>Role</label>

            <input
                type="text"
                value="<?php echo $role; ?>"
                readonly>

        </div>

        <div class="form-group">

            <label>Full Name</label>

            <input
                type="text"
                name="name"
                value="<?php echo $name; ?>"
                required>

        </div>

        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="<?php echo $email; ?>"
                required>

        </div>

        <div class="form-group">

            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Enter new password">

        </div>

        <button type="submit">
            Update Profile
        </button>

    </form>

    <p>
        <a href="login.php">Back to Login</a>
    </p>

</div>

</body>

</html>