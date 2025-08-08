<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once 'classes/SessionManager.php';
require_once 'classes/Student.php';
SessionManager::requireLogin();

$students = new Student();
$students = $students->getAll();
?>
<h1>student info</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Course_id</th>
        <th>Course_name</th>
    </tr>
    <?php foreach($students as $student): ?>
        <tr>
            <td><?=$student['name']?></td>
            <td><?=$student['age']?></td>
            <td><?=$student['email']?></td>
            <td><?=$student['course_id']?></td>
            <td><?=$student['course_name']?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>