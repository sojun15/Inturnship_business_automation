<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-300">
<?php
require_once 'classes/SessionManager.php';
require_once 'classes/Student.php';

SessionManager:: requireLogin();

// catch user login user id
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $data = [
        "id" => $id,
        'course_name' => $_POST['course_name'],
        'course_id' => $_POST['course_id']
    ];

    $student = new Student();
    $student -> addStudent($data);
    header('Location: viewStudent.php?id'. urldecode($_SESSION['user_id']));
    exit();
}
?>
<form method="post" class="bg-white p-8 rounded-2xl shadow-lg w-80 space-y-6">
    <h2 class="text-center text-2xl">Add Course</h2>
    <section>
        <label class="block font-medium">Course ID: </label>
        <input class="w-full px-4 py-2 border border-black rounded-lg" type="number" name="course_id" required min="1">
    </section>
    <section>
        <label class="block font-medium">Course Name: </label>
        <input class="w-full px-4 py-2 border border-black rounded-lg" type="text" name="course_name" required>
    </section>
    <button class="w-full text-white bg-blue-600 py-2 rounded-lg font-semibold" type="submit">Add</button>
</form>
</body>
</html>