<?php

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $role = $_POST["role"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (empty($role) || empty($name) || empty($email) || empty($password) || empty($confirm_password)) {

        $error = "Please fill all fields";

    } elseif ($password != $confirm_password) {

        $error = "Passwords do not match";

    } else {

        header("Location: login.php");
        exit();

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Online Quiz</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="login-page">

<div class="login-container">

    <h1>Create Account</h1>

    <?php if ($error != ""): ?>

        <p class="error">
            <?php echo $error; ?>
        </p>

    <?php endif; ?>

    <form method="POST">

        <div class="form-group">

            <label>Role</label>

            <select name="role">

                <option value="">Select Role</option>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>

            </select>

        </div>

        <div class="form-group">

            <label>Full Name</label>

            <input
                type="text"
                name="name"
                placeholder="Enter your name">

        </div>

        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Enter your email">

        </div>

        <div class="form-group">

            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Create password">

        </div>

        <div class="form-group">

            <label>Confirm Password</label>

            <input
                type="password"
                name="confirm_password"
                placeholder="Confirm password">

        </div>

        <button type="submit">
            Register
        </button>

    </form>

    <p class="account-text">

        Already have an account?

        <a href="login.php">
            Login
        </a>

    </p>

</div>

</body>

</html>