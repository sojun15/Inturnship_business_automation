<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getGrade($gpa){
        if($gpa >= 3.75 && $gpa <= 4.00){
            return "A+";
        }
        elseif($gpa >= 3.50 && $gpa < 3.75){
            return "A";
        }
        elseif($gpa >= 3.25 && $gpa < 3.50){
            return "A-";
        }
        elseif($gpa >= 3.00 && $gpa < 3.25){
            return "B";
        }
        elseif($gpa >= 0 && $gpa < 3.00){
            return "F";
        }
        else {
            return "Invalid GPA";
        }
    }
    $students = [
        ["name" => "Rahad", "gpa" => 3.85],
        ["name" => "Drik", "gpa" => 3.15],
        ["name" => "Firoz", "gpa" => 2.90]
    ];
    foreach($students as $student){
        echo "Name: {$student['name']}, GPA: {$student['gpa']}, Gpa:". getGrade($student['gpa']) . "<br>";
    }
    ?>
</body>
</html>