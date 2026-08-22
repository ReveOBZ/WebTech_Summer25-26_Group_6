<?php include "../Control/UpdateProfile.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Profile</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body class="login-page">

<div class="login-container">
    <h1>My Profile</h1>
    <?php if($message!=""): ?><p class="success"><?php echo $message; ?></p><?php endif; ?>

    <form method="post">
        <div class="form-group"><label>Full Name</label><input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION["Name"]); ?>"></div>
        <div class="form-group"><label>Email</label><input type="text" value="<?php echo htmlspecialchars($_SESSION["Email"]); ?>" disabled></div>
        <div class="form-group"><label>New Password</label><input type="password" name="password" placeholder="Leave blank to keep current"></div>
        <button type="submit" name="update">Update Profile</button>
    </form>

    <h3>My Results</h3>
    <table class="data-table">
    <tr><th>Quiz</th><th>Score</th><th>Status</th></tr>
    <?php $results->data_seek(0); while($row = $results->fetch_assoc()): ?>
    <tr><td><?php echo htmlspecialchars($row["Title"]); ?></td><td><?php echo $row["Score"]; ?></td><td><?php echo $row["Status"]; ?></td></tr>
    <?php endwhile; ?>
    </table>

    <p class="account-text"><a href="Dashboard.php">Back to Dashboard</a></p>
</div>

</body>
</html>