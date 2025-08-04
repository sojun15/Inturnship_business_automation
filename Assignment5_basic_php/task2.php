<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $books = [["title" => "Physics", "author" => "Topan sir", "year" => 2010],
              ["title" => "Mathematics", "author" => "Rafiq sir", "year" => 2012],
              ["title" => "Grammer", "author" => "Abdur sir", "year" => 2015]];

              foreach($books as $book){
                echo "$book[title] by $book[author] ($book[year]) <br>";
              }
    ?>
</body>
</html>