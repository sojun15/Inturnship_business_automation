<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class User{
        private $jsonData = __DIR__ .'/../json_data/user.json';

        public function Authentication($userid,$password){
            $users = json_decode(file_get_contents($this-> jsonData),true);

            foreach($users as $user){
                if($user['userid']===$userid && $user['password']===$password){
                    return true;
                }
            }
            return false;
        }
    }
    ?>
</body>
</html>