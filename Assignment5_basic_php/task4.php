<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // declare a function to find the grade based on the mark
    function getGrade($mark){
        if($mark >= 80 && $mark <= 100){
            return "A+";
        }
        elseif($mark >= 70 && $mark < 80){
            return "A";
        }
        elseif($mark >= 60 && $mark < 70){
            return "A-";
        }
        elseif($mark >= 50 && $mark < 60){
            return "B";
        }
        elseif($mark >= 0 && $mark < 50){
            return "F";
        }
        else {
            return "Invalid Mark";
        }
    }

    // declare an array of students with name, id, and mark
    $students = [["name" => "Sohan", "id" => "210237", "mark" => 75],
                    ["name" => "Rohan", "id" => "210238", "mark" => 85],
                    ["name" => "Mohan", "id" => "210239", "mark" => 45],
                    ["name" => "Tina", "id" => "210240", "mark" => 65],
                    ["name" => "Rita", "id" => "210241", "mark" => 55]];

        // use foreach loop to print all students information
        foreach($students as $student){
            echo "Name: {$student['name']}, ID: {$student['id']}, Mark: {$student['mark']}, Grade: " . getGrade($student['mark']) . "<br>";
        }
    ?>
</body>
</html>