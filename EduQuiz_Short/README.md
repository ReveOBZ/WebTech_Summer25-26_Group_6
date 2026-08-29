# EduQuiz Short - Repo Style Structure

This version follows the same folder organization style as the referenced PMS course project:
role folders -> Control, View, model, css, JavaScript when needed, and MainPage.php.

## Users
- Admin
- Instructor
- Student

## Common Features
- Login / Logout
- Registration
- Remember Me using Cookie
- AJAX username check
- View / Edit / Delete Profile
- Change Password
- Reset Password
- Role based dashboard

## Run
1. Copy the `EduQuiz_Short` folder into `C:/xampp/htdocs/`.
2. Start Apache and MySQL.
3. Import `db.sql` in phpMyAdmin.
4. Open `http://localhost/EduQuiz_Short/`.

## Database
Database name: `eduquiz_short`

## Demo Accounts
- Admin: admin@eduquiz.local / admin123
- Instructor: instructor@eduquiz.local / instructor123
- Student: student@eduquiz.local / student123

Passwords are plain text only because this project intentionally follows the basic classroom/demo coding style requested.
