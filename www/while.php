<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While Loop</title>
    </head>
    <body>
        <?php 
            $index = 1;
            echo "while lopp<br>";
            while ($index <= 5) {

                echo"<script>console.log('Debug Objects: " . $index . "' );</script>"; # write on console
                echo "$index <br>";
                $index++;
            }

            echo "<br>do-while lopp<br>";
            $index = 6;
            do {
                echo "$index <br>";
                $index++;
            } while ($index <= 5);
        ?>
    </body>
</html>