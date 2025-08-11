<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
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
    header('Location: viewStudent.php?id'. urldecode($_SESSION['user_id']));
    exit();
}
?>
<h2 class="bg-green-300 w-1/5 text-center rounded-lg my-1">Edit Student</h2>
<form method="post" class="bg-white p-8 rounded-2xl w-80">
    <?php foreach($existingCourses as $course): ?>
    <section>
        <label class="block font-medium">ID: </label>
        <input class="w-full px-4 py-1 border border-black rounded-lg" disabled type="number" name="id" value="<?= $course['id'] ?>">
    </section>
    <section>
        <label class="block font-medium">Course ID: </label>
        <input class="w-full px-4 py-1 border border-black rounded-lg" type="text" name="course_id" value="<?= $course['course_id'] ?>">
    </section>
    <section>
        <label class="block font-medium">Course Name: </label>
        <input class="w-full px-4 py-1 border border-black rounded-lg" type="text" name="course_name" value="<?= $course['course_name'] ?>">
    </section>
    <button type="submit" class="w-full text-white bg-blue-600 py-1 my-1 rounded-lg font-semibold">Update</button>
    <?php endforeach; ?>
</form>
</body>
</html>