<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Switch Statement</title>
    </head>
    <body>
        <form action="switch.php" method="post">
            What was your grade?
            <input type="text" name="grade">
            <input type="submit">
        </form>

        <?php 
            
            if(isset($_POST["grade"])){
                $grade = $_POST["grade"];
                
                switch (strtoupper($grade)) {
                    case 'A':
                        echo "You did amazing!";
                        break;
                    case 'B':
                        echo "You did pretty good.";
                        break;
                    case 'C':
                        echo "You did poorly.";
                        break;
                    case 'D':
                        echo "You did very bad.";
                        break;
                    case 'F':
                        echo "YOU FAIL!";
                        break;
                    default:
                        echo "Invalid Grade";
                        break;
                }
            }
        ?>
    </body>
</html>