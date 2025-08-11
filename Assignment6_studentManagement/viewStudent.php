<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
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
<h1 class="text-2xl font-semibold bg-green-300 w-1/3 rounded-lg text-center my-1">Courses Information</h1>
<table border="1" class="bg-white p-8 rounded-lg w-full max-w-2xl space-y-6">
    <tr class="border border-black flex flex-row">
        <th class="border border-black w-1/4">ID</th>
        <th class="border border-black w-1/4">Course_id</th>
        <th class="border border-black w-1/4">Course_name</th>
        <th class="border border-black w-1/4">Modify Information</th>
    </tr>
    <?php foreach($students as $student): ?>
        <tr class="border border-black flex flex-row items-center">
            <td class="border border-black w-1/4 text-center"><?=$student['id']?></td>
            <td class="border border-black w-1/4 text-center"><?=$student['course_id']?></td>
            <td class="border border-black w-1/4 text-center"><?=$student['course_name']?></td>
            <td class="border border-black w-1/4 text-center text-blue-600">
                <a class="mx-2" href="editStudent.php?id=<?= $student['id'] ?>">Edit</a> 
                <a class="mx-2" href="deleteStudent.php?id=<?= $student['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>