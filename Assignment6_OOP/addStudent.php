<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
<?php
require_once 'classes/SessionManager.php';
require_once 'classes/Student.php';

SessionManager:: requireLogin();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $data = [
        "name" => $_POST['name'],
        'age' => $_POST['age'],
        'email' => $_POST['email'],
        'course_name' => $_POST['course_name'],
        'course_id' => $_POST['course_id']
    ];

    $student = new Student();
    $student -> add($data);
    header('Location: viewStudent.php');
    exit();
}
?>
<h2>Add Student</h2>
<form method="post">
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Age: <input type="number" name="age" required min="1"></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Course ID: <input type="number" name="course_id" required min="1"></label><br>
    <label>Course Name: <input type="text" name="course_name" required></label><br>
    <button type="submit">Add</button>
</form>
</body>
</html>