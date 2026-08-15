<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
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

            <h1>Courses</h1>
            <p>Manage courses.</p>

            <div class="course-card">

                <h2>Add New Course</h2>

                <form method="POST">

                    <p>
                        <label>Course Name</label><br>
                        <input type="text" name="course_name" placeholder="Enter course name">
                    </p>

                    <p>
                        <label>Subject</label><br>
                        <input type="text" name="subject" placeholder="Enter subject">
                    </p>

                    <button type="submit" class="start-button">
                        Add Course
                    </button>

                </form>

            </div>

            <div class="dashboard-section">

                <h2>Course List</h2>

                <table>

                    <tr>
                        <th>Course</th>
                        <th>Subject</th>
                        <th>Instructor</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>Web Programming</td>
                        <td>PHP</td>
                        <td>Mr. Rahim</td>
                        <td>
                            <button class="drop-button"
                                onclick="return confirm('Are you sure you want to delete this course?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Database System</td>
                        <td>MySQL</td>
                        <td>Mr. Karim</td>
                        <td>
                            <button class="drop-button"
                                onclick="return confirm('Are you sure you want to delete this course?')">
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