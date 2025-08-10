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

    $id = $_GET['id'];

    $student = new Student();
    $student-> delete($id);
    header('Location: viewStudent.php?id' . urldecode($_SESSION['user_id']));
    exit();
    ?>
</body>
</html>