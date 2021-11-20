<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert PHP</title>
    </head>
    <body>
        <?php 
            $title = "My First Post";
            $author = "Jae";
            $wordCount = 400;
            include "article-header.php";
            
            echo "<br><br>";
            include "./useful-tools.php";
            sayHi("Jae");
            echo "<br>";
            echo $feetInMile;
        ?>
    </body>
</html>