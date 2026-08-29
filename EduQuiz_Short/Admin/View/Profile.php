<?php include "../Control/ProfileValidation.php"; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Profile - EduQuiz</title>
    <link rel="stylesheet" href="../../css/style.css">
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
    <div class="page-title"><h1>My Profile</h1></div>
    <?php if($message!=""){ ?><div class="alert error"><?php echo htmlspecialchars($message); ?></div><?php } ?>
    <?php if($success!=""){ ?><div class="alert success"><?php echo htmlspecialchars($success); ?></div><?php } ?>

    <div class="grid">
        <div class="card">
            <h2>Profile Information</h2>
            <p><b>Name:</b> <?php echo htmlspecialchars($user["name"]); ?></p>
            <p><b>Username:</b> <?php echo htmlspecialchars($user["username"]); ?></p>
            <p><b>Email:</b> <?php echo htmlspecialchars($user["email"]); ?></p>
            <p><b>Role:</b> <?php echo htmlspecialchars(ucfirst($user["role"])); ?></p>
            <p><b>Joined:</b> <?php echo htmlspecialchars($user["created_at"]); ?></p>
        </div>

        <div class="card">
            <h2>Edit Profile</h2>
            <form method="post" action="">
                <input type="hidden" name="mode" value="update">
                <label>Name</label><input name="name" value="<?php echo htmlspecialchars($user["name"]); ?>" required><br><br>
                <label>Phone</label><input name="phone" value="<?php echo htmlspecialchars($user["phone"]); ?>"><br><br>
                <label>Department</label><input name="department" value="<?php echo htmlspecialchars($user["department"]); ?>"><br><br>
                <button class="btn" type="submit">Save Changes</button>
            </form>
        </div>
    </div>

    <div class="card">
        <h2>Delete Account</h2>
        <p class="muted">This permanently deletes your profile and related data.</p>
        <form method="post" action="" onsubmit="return confirm('Delete your account permanently?')">
            <input type="hidden" name="mode" value="delete">
            <div class="inline">
                <input type="password" name="password" placeholder="Enter password to confirm" required>
                <button class="btn danger" type="submit">Delete Account</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>
