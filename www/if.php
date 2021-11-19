<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>If Statement</title>
    </head>
    <body>
        <?php 
            $isMale = false;
            $isTall = true;

            if ($isMale && $isTall) {
                echo "Yuo are a tall male";
            } elseif ($isMale && !$isTall) {
                echo "Yuo are a short male";
            } elseif (!$isMale && $isTall) {
                echo "Yuo are not male but are tall";
            } else {
                echo "You are not male and not tall";
            }
        ?>
        
    </body>
</html>