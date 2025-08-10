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

$id = $_SESSION['user_id'];

$students = new Student();
$students = $students->getAll();
$students = array_filter($students,function($student) use($id){
    return $student['id'] === $id;
});
?>
<h1>student info</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Course_id</th>
        <th>Course_name</th>
        <th>Modify Information</th>
    </tr>
    <?php foreach($students as $student): ?>
        <tr>
            <td><?=$student['id']?></td>
            <td><?=$student['course_id']?></td>
            <td><?=$student['course_name']?></td>
            <td>
                <a href="editStudent.php?id=<?= $student['id'] ?>">Edit</a> 
                <a href="deleteStudent.php?id=<?= $student['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>