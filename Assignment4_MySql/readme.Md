## Database assignment questions
1. Database Creation:
-Create a database named student_management.

2. Table Creation:
-Create the following tables with appropriate data types and constraints:
--students: student_id (PK), name, email, phone
--courses: course_id (PK), course_name, credits
--enrollments: enrollment_id (PK), student_id (FK), course_id (FK), enroll_date

3. Insert Data:
-Insert at least 5 students and 3 courses.
-Enroll at least 2 students in multiple courses using the enrollments table.

4. Queries:
-Display all students and their enrolled courses.
-Find students who are not enrolled in any course.
-Update a student’s phone number.
-Delete one enrollment record.


## Answer starts here

## Create database
CREATE DATABASE student_management;

## Create students table
CREATE TABLE students(
    student_id int(6) PRIMARY KEY,
    name varchar(20) NOT null,
    email varchar(20) NOT null,
    phone int(15) NOT null
    );

## Create courses table
CREATE TABLE courses (
    course_id int PRIMARY key,
    course_name varchar(20) NOT null,
    credit float(4,2) NOT null
    );

## Create enrollments table
CREATE TABLE enrollments(
    enrollment_id int(10) PRIMARY KEY,
    student_id int(6) NOT null,
    course_id int(6) NOT null,
    enrollment_date date NOT null
    );

## Insert data into students table
INSERT INTO students(student_id,name,email,phone) VALUES
    (1,"Rahad",'rahad@gmail.com',1701010101),
    (2,'Partho','partho@gmail.com',1802020202),
    (15,'sojun','sojun@gmail.com',1715151515),
    (17,'sourov','sourov@gmail.com',1817171717),
    (37,'sohan','sohan@gmail.com',1937373737);

## Insert data into courses table
INSERT INTO courses(course_id,course_name,credit) VALUES 
(3101,'Database',3.00),
(3102,'Database Lab',1.50),
(3205,'Software Engineering',3.00),
(3206,'Software Engineering Lab',1.50);

## Insert data into enrollment table
INSERT INTO enrollments(enrollment_id,student_id,course_id,enrollment_date) VALUES
(101,15,3101,'2025-07-30'),
(102,15,3102,'2025-07-30'),
(103,17,3105,'2025-07-31'),
(104,17,3106,'2025-07-31');

## The enrollment courses name
SELECT courses.course_name 
FROM courses
INNER JOIN enrollments ON courses.course_id = enrollments.course_id;

## Find students who are not enrolled in any course.
SELECT students.name
FROM students
LEFT JOIN enrollments ON students.student_id = enrollments.student_id
WHERE enrollments.student_id IS NULL;


## Update a specific student’s phone number. 
UPDATE students
SET phone = 1862341515
WHERE student_id=15;


## Delete one specific enrollment record. 
DELETE FROM enrollments
WHERE enrollment_id=102;