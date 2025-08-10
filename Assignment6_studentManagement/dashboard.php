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

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }
?>

<section style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
    <h2>Dashboard</h2>
    <section>
        <a href="addStudent.php?id=<?php echo urldecode($_SESSION['user_id']); ?>">Add Student</a><br>
        <a href="viewStudent.php">View Students</a><br>
        <a href="editStudent.php?id=<?php echo urlencode($_SESSION['user_id']); ?>">Edit info</a><br>
        <a href="deleteStudent.php">Delete Students</a><br>
        <a href="logout.php">Logout</a>
    </section>
</section>
</body>
</html>