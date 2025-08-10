<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class SessionManager{
        public static function start(){
            if(session_status() === PHP_SESSION_NONE){
                session_start();
            }
        }

        public static function isLoggedIn(){
            return (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true);
        }

        public static function login(){
            $_SESSION['logged_in'] = true;
        }

        public static function logout(){
            session_destroy();
        }

        public static function requireLogin(){
            self:: start();
            if(!self::isLoggedIn()){
                header('Location: login.php');
                exit();
            }
        }
    }
    ?>
</body>
</html>