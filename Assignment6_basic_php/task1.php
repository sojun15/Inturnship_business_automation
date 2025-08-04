<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Name = "sojun chandra shill";
    $Id = 210215;
    $Department = "CSE";
    $section = "A";

    echo "Name: $Name <br>";
    echo "Id: $Id <br>";
    echo "Department: $Department <br>";
    echo "Section: $section <br>";

    // based on the current hour, display a greeting
    $hour = 14;
    if($hour>=5 && $hour<=11){
        echo "Good Morning";
    }
    elseif($hour>=12 && $hour<=17){
        echo "Good Afternoon";
    }
    elseif($hour>=18 && $hour<=21){
        echo "Good Evening";
    }
    else{
        echo "Good Night";
    }
    ?>
</body>
</html>