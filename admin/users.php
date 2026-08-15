<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <p>Manage students and teachers.</p>

            <div class="dashboard-section">

                <h2>Students</h2>

                <table>

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>Rahim</td>
                        <td>rahim@gmail.com</td>
                        <td>
                            <button class="drop-button"
                                onclick="return confirm('Delete this student?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Karim</td>
                        <td>karim@gmail.com</td>
                        <td>
                            <button class="drop-button"
                                onclick="return confirm('Delete this student?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                </table>

            </div>

            <div class="dashboard-section">

                <h2>Teachers</h2>

                <table>

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>Mr. Rahim</td>
                        <td>rahim.teacher@gmail.com</td>
                        <td>
                            <button class="drop-button"
                                onclick="return confirm('Delete this teacher?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Mr. Karim</td>
                        <td>karim.teacher@gmail.com</td>
                        <td>
                            <button class="drop-button"
                                onclick="return confirm('Delete this teacher?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

</body>

</html>