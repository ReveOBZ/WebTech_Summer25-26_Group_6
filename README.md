# EduQuiz

Online Course & Quiz Management System (Admin / Teacher / Student).

Rebuilt on a real MySQL backend, following the same folder/coding
conventions as the reference project (`Control/`, `View/`, `model/`
per role; a `DatabaseConnection` class; session-based login; raw
string-built SQL; plaintext password comparison) — matched
intentionally, including its rough edges, for structural consistency.

## Setup

1. Import the schema:
   ```
   mysql -u root -p < quiz.sql
   ```
   (creates and fills a database named `quiz`)

2. Point `model/DatabaseConnection.php` (in each role folder) at your
   MySQL credentials if they differ from the defaults
   (`localhost` / `root` / no password).

3. Run with PHP's built-in server from the project root:
   ```
   php -S localhost:8000
   ```
   or place the folder in your XAMPP/WAMP `htdocs`.

4. Visit `MainPage.php` to choose a role.

## Demo accounts (seeded in quiz.sql)

| Role    | Email                       | Password       |
|---------|------------------------------|----------------|
| Admin   | admin@eduquiz.com            | Admin1234?#    |
| Teacher | rahim.teacher@eduquiz.com    | Teacher12?#    |
| Student | karim.student@eduquiz.com    | Student12?#    |

(Password rule inherited from the reference project: 8+ characters,
upper + lower case, not fully numeric, must contain `?` and `#`.)

## Structure

```
EduQuiz/
  Admin/    Control/  View/  model/  css/  js/
  Teacher/  Control/  View/  model/  css/  js/
  Student/  Control/  View/  model/  css/  js/
  quiz.sql
  index.php  -> MainPage.php
```

Tested end-to-end against a live MySQL database: registration,
login, course creation, quiz creation with questions, enrollment,
quiz-taking with auto-grading, and result viewing all persist real
rows.
