<?php

$users = [
    ["Rahim", "rahim@gmail.com", "Student"],
    ["Karim", "karim@gmail.com", "Student"],
    ["Mr. Rahim", "rahim.teacher@gmail.com", "Teacher"],
    ["Mr. Karim", "karim.teacher@gmail.com", "Teacher"]
];

$message = "";

if (isset($_POST["add"])) {
    $message = "User added successfully.";
}

if (isset($_POST["update"])) {
    $message = "User updated successfully.";
}

if (isset($_POST["delete"])) {
    $message = "User deleted successfully.";
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Users</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="dashboard-page">

<div class="dashboard-header">
    <h2>Online Quiz</h2>
    <p>Welcome, Admin</p>
</div>

<div class="dashboard-container">

    <div class="dashboard-menu">

        <h3>Admin Panel</h3>

        <a href="dashboard.php">Dashboard</a>
        <a href="users.php">Users</a>
        <a href="courses.php">Courses</a>
        <a href="../profile.php">Profile</a>
        <a href="../login.php">Logout</a>

    </div>

    <div class="dashboard-content">

        <h1>Users</h1>

        <?php if ($message != ""): ?>
            <p class="enrolled-text"><?php echo $message; ?></p>
        <?php endif; ?>

        <div class="course-card">

            <h2>Add User</h2>

            <form method="POST">

                <p>Name</p>
                <input type="text" name="name" required>

                <p>Email</p>
                <input type="email" name="email" required>

                <p>Role</p>

                <select name="role" required>
                    <option value="">Select Role</option>
                    <option>Student</option>
                    <option>Teacher</option>
                </select>

                <br><br>

                <button name="add" class="start-button">
                    Add User
                </button>

            </form>

        </div>

        <div class="dashboard-section">

            <h2>Users</h2>

            <table>

                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>

                <?php foreach ($users as $user): ?>

                <tr>

                    <td><?php echo $user[0]; ?></td>
                    <td><?php echo $user[1]; ?></td>
                    <td><?php echo $user[2]; ?></td>

                    <td>

                        <button
                            class="start-button"
                            onclick="alert('Edit User')">

                            Edit

                        </button>

                        <form method="POST" style="display:inline">

                            <button
                                name="delete"
                                class="drop-button"
                                onclick="return confirm('Delete this user?')">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                <?php endforeach; ?>

            </table>

        </div>

    </div>

</div>

</body>

</html>