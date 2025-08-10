<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Student{
        public $studentsFile = __DIR__.'/../json_data/students.json';
        public $usersFile = __DIR__.'/../json_data/user.json';

        public function getAll(){
            return json_decode(file_get_contents($this->studentsFile),true); 
        }

        public function getUser(){
            return json_decode(file_get_contents($this->usersFile),true); 
        }

        public function addStudent($data){
            $students = $this-> getAll();
            $students[] = $data;
            file_put_contents($this-> studentsFile,json_encode($students,JSON_PRETTY_PRINT));
        }

        public function signupStudent($data){
            $students = $this-> getUser();
            $students[] = $data;
            file_put_contents($this-> usersFile,json_encode($students,JSON_PRETTY_PRINT));
        }

        public function findById($id) {
            $courses = [];
            foreach ($this->getAll() as $student) {
                if ($student['id'] == $id){
                    $courses[] = $student; 
                }
            }
            return $courses;
        }

        public function update($id, $newData) {
            $students = $this->getAll();
            foreach ($students as &$student) {
                if ($student['id'] == $id) {
                    $student = $newData;
                    break;
                }
            }
            file_put_contents($this->studentsFile, json_encode($students, JSON_PRETTY_PRINT));
        }

        public function delete($id){
            $students = $this -> getAll();
            $students = array_filter($students,function($student) use($id){
                return $student['id'] != $id;
            });
            file_put_contents($this->studentsFile,json_encode(array_values($students),JSON_PRETTY_PRINT));
        }
    }
    ?>
</body>
</html>