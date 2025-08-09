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
$existingCourses = $student->findById($id);

if (!$existingCourses) {
    echo "No courses found for this student.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $id,
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
    <?php foreach($existingCourses as $course): ?>
    <label>ID: <input disabled type="number" name="id" value="<?= $course['id'] ?>"></label><br>
    <label>Course ID: <input type="text" name="course_id" value="<?= $course['course_id'] ?>"></label><br>
    <label>Course Name: <input type="text" name="course_name" value="<?= $course['course_name'] ?>"></label><br>
    <button type="submit">Update</button>
    <?php endforeach; ?>
</form>
</body>
</html>