<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-300">
    <?php
    require_once 'classes/SessionManager.php';
    require_once 'classes/Student.php';
    SessionManager::requireLogin();

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }
?>

<section class="bg-white p-8 rounded-2xl shadow-lg w-80 space-y-6 text-center">
    <h2 class="text-2xl text-green-300">Dashboard</h2>
    <section class="text-blue-600">
        <a href="addStudent.php?id=<?php echo urldecode($_SESSION['user_id']); ?>">Add Courses</a><br>
        <a href="viewStudent.php?id=<?php echo urldecode($_SESSION['user_id']); ?>">View Courses</a><br>
        <a href="editStudent.php?id=<?php echo urlencode($_SESSION['user_id']); ?>">Edit Courses</a><br>
        <a href="deleteStudent.php?id=<?php echo urldecode($_SESSION['user_id']); ?>">Delete Courses</a><br>
        <a href="logout.php">Logout</a>
    </section>
</section>
</body>
</html>