<?php include "../Control/ManageUsers.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Users</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body class="dashboard-page">

<div class="dashboard-header">
    <h2>EduQuiz</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION["Name"]); ?></p>
</div>

<div class="dashboard-container">
    <div class="dashboard-menu">
        <h3>Admin Panel</h3>
        <a href="Dashboard.php">Dashboard</a>
        <a href="Users.php">Users</a>
        <a href="Courses.php">Courses</a>
        <a href="../Control/logout.php">Logout</a>
    </div>

    <div class="dashboard-content">
        <h2>Users</h2>
        <?php if($message!=""): ?><p class="success"><?php echo $message; ?></p><?php endif; ?>

        <h3>Teachers</h3>
        <table class="data-table">
        <tr><th>Name</th><th>Email</th><th>Action</th></tr>
        <?php while($row = $teachers->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row["FullName"]); ?></td>
            <td><?php echo htmlspecialchars($row["Email"]); ?></td>
            <td>
                <form method="post" style="display:inline">
                    <input type="hidden" name="role" value="Teacher">
                    <input type="hidden" name="email" value="<?php echo htmlspecialchars($row["Email"]); ?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
        </table>

        <h3>Students</h3>
        <table class="data-table">
        <tr><th>Name</th><th>Email</th><th>Action</th></tr>
        <?php while($row = $students->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row["FullName"]); ?></td>
            <td><?php echo htmlspecialchars($row["Email"]); ?></td>
            <td>
                <form method="post" style="display:inline">
                    <input type="hidden" name="role" value="Student">
                    <input type="hidden" name="email" value="<?php echo htmlspecialchars($row["Email"]); ?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
        </table>
    </div>
</div>

</body>
</html>