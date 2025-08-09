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
    SessionManager::start();
    SessionManager::logout();
    header('Location: login.php');
    exit();
?>
</body>
</html>