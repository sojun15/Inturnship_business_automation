<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // declare an array of students with name, id, and gpa
    $students = [["name" => "sojun", "id" => 15, "gpa" => 3.33],
    ["name" => "sourov", "id" => 17, "gpa" => 3.66],
    ["name" => "mogammel", "id" => 31, "gpa" => 3.45],
    ["name" => "emon", "id" => 36, "gpa" => 3.70],
    ["name" => "sohan", "id" => 37, "gpa" => 3.47]];
    // use sorting based on GPA
    usort($students, function($a, $b){
        return $b['gpa'] <=> $a['gpa'];
    });
    // use i for ranking
    $i = 1;
    // print gpa and name of each student with their rank
    foreach($students as $student){
        echo "Rank {$i}: {$student['name']} (GPA: {$student['gpa']})<br>";
        $i++;
    }
    ?>
</body>
</html>