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
        public $variable = __DIR__.'/../json_data/students.json';

        public function getAll(){
            return json_decode(file_get_contents($this->variable),true); 
        }

        public function addStudent($data){
            $students = $this-> getAll();
            $students[] = $data;
            file_put_contents($this-> variable,json_encode($students,JSON_PRETTY_PRINT));
        }

        public function findById($id) {
            foreach ($this->getAll() as $student) {
                if ($student['id'] == $id) return $student;
            }
            return null;
        }

        public function update($id, $newData) {
            echo $newData;
            $students = $this->getAll();
            foreach ($students as &$student) {
                if ($student['id'] == $id) {
                    $student = $newData;
                    break;
                }
            }
            file_put_contents($this->studentsFile, json_encode($students, JSON_PRETTY_PRINT));
        }
    }
    ?>
</body>
</html>