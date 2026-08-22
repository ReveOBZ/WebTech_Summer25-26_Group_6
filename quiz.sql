-- EduQuiz SQL Dump
-- Structure modeled after sir's pms.sql (separate *_reg table per role)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

CREATE TABLE `admin_reg` (
  `FullName` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin_reg` (`FullName`, `UserName`, `Email`, `Password`) VALUES
('System Admin', 'admin', 'admin@eduquiz.com', 'Admin1234?#');

-- --------------------------------------------------------

CREATE TABLE `teacher_reg` (
  `FullName` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `teacher_reg` (`FullName`, `UserName`, `Email`, `Password`) VALUES
('Rahim Uddin', 'rahimteacher', 'rahim.teacher@eduquiz.com', 'Teacher12?#');

-- --------------------------------------------------------

CREATE TABLE `student_reg` (
  `FullName` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `student_reg` (`FullName`, `UserName`, `Email`, `Password`) VALUES
('Karim Hasan', 'karimstudent', 'karim.student@eduquiz.com', 'Student12?#');

-- --------------------------------------------------------

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseName` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `TeacherEmail` varchar(255) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `courses` (`CourseName`, `Subject`, `TeacherEmail`) VALUES
('Web Programming', 'PHP', 'rahim.teacher@eduquiz.com'),
('Database System', 'MySQL', 'rahim.teacher@eduquiz.com');

-- --------------------------------------------------------

CREATE TABLE `enrollments` (
  `EnrollID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentEmail` varchar(255) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Enrolled',
  PRIMARY KEY (`EnrollID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `enrollments` (`StudentEmail`, `CourseID`, `Status`) VALUES
('karim.student@eduquiz.com', 1, 'Enrolled');

-- --------------------------------------------------------

CREATE TABLE `quizzes` (
  `QuizID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `TotalMarks` int(11) NOT NULL DEFAULT 10,
  PRIMARY KEY (`QuizID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `quizzes` (`Title`, `CourseID`, `TotalMarks`) VALUES
('PHP Basic Quiz', 1, 10),
('MySQL Basic Quiz', 2, 10);

-- --------------------------------------------------------

CREATE TABLE `questions` (
  `QuestionID` int(11) NOT NULL AUTO_INCREMENT,
  `QuizID` int(11) NOT NULL,
  `QuestionText` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `CorrectOption` char(1) NOT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `questions` (`QuizID`, `QuestionText`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `CorrectOption`) VALUES
(1, 'Which symbol starts a PHP variable?', '#', '$', '@', '&', 'B'),
(1, 'Which function outputs text in PHP?', 'print()', 'write()', 'output()', 'display()', 'A'),
(2, 'Which SQL keyword selects data?', 'GET', 'SELECT', 'FETCH', 'PULL', 'B');

-- --------------------------------------------------------

CREATE TABLE `results` (
  `ResultID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentEmail` varchar(255) NOT NULL,
  `QuizID` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`ResultID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;
