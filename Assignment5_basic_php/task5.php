<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    static $a_plus = 0;
    static $a = 0;
    static $a_minus = 0;
    static $b = 0;
    static $f = 0;

    // declare a function to find the grade based on the mark
    function getGrade($mark){
        if($mark >= 80 && $mark <= 100){
            global $a_plus;
            $a_plus++;
        }
        elseif($mark >= 70 && $mark < 80){
            global $a;
            $a++;
        }
        elseif($mark >= 60 && $mark < 70){
            global $a_minus;
            $a_minus++;
        }
        elseif($mark >= 50 && $mark < 60){
            global $b;
            $b++;
        }
        elseif($mark >= 0 && $mark < 50){
            global $f;
            $f++;
        }
    }

    // declare an array of students with name, id, and mark
    $students = [["name" => "Sohan", "id" => "210237", "mark" => 95],
                    ["name" => "Rohan", "id" => "210238", "mark" => 85],
                    ["name" => "Mohan", "id" => "210239", "mark" => 45],
                    ["name" => "Tina", "id" => "210240", "mark" => 65],
                    ["name" => "Rita", "id" => "210241", "mark" => 55]];

            foreach($students as $student){
                getGrade($student['mark']);
            }
        
        // print the total number of students in each grade
        global $a_plus, $a, $a_minus, $b, $f;
        echo "A+: {$a_plus} students <br>A: {$a} students <br>A-: {$a_minus} students <br>B: {$b} students <br>F: {$f} student <br>";

        // print the total number of passed and failed students
        echo "Total passed:".($a_plus + $a + $a_minus + $b) . " students <br>";
        echo "Total failed: {$f} student <br>";
    ?>
</body>
</html>