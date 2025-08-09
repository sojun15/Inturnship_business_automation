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

// catch user login user id
$id = $_GET['id'];

$student = new Student();
$existing = $student->findById($id);

if (!$id) {
    echo "Student not found.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $id,
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'email' => $_POST['email'],
        'course_id' => $_POST['course_id'],
        'course_name' => $_POST['course_name']
    ];
    $student->update($id, $data);
    header('Location: viewStudent.php');
    exit();
}
?>
<h2>Edit Student</h2>
<form method="post">
    <label>ID: <input disabled type="number" name="id" value="<?= $existing['id'] ?>"></label><br>
    <label>Name: <input type="text" name="name" value="<?= $existing['name'] ?>"></label><br>
    <label>Age: <input type="number" name="age" value="<?= $existing['age'] ?>"></label><br>
    <label>Email: <input type="email" name="email" value="<?= $existing['email'] ?>"></label><br>
    <label>Course ID: <input type="text" name="course_id" value="<?= $existing['course_id'] ?>"></label><br>
    <label>Course: <input type="text" name="course_name" value="<?= $existing['course_name'] ?>"></label><br>
    <button type="submit">Update</button>
</form>
</body>
</html>