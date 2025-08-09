<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'classes/User.php';
    require_once 'classes/SessionManager.php';

    SessionManager::start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_POST['userid'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User();
    if ($user->Authentication($userid, $password)) {
        SessionManager::login();
        $_SESSION['user_id'] = $userid;
        header('Location: dashboard.php');
        exit();
    } else {
        echo "<p>Invalid username or password</p>";
    }
}
?>
<form method="post">
    <label>Userid: <input type="text" name="userid"></label><br>
    <label>Password: <input type="password" name="password"></label><br>
    <button type="submit">Login</button>
    <section>
        <a href="signUp.php">Sign Up</a>
    </section>
</form>
</body>
</html>