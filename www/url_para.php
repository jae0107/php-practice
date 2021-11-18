<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>URL Parameters</title>
    </head>
    <body>
        <form action="url_para.php" method="get">
            Name: <input type="text" name="name"><br>
            <input type="submit">
        </form>
        <br><br>

        <?php 
            if(isset($_GET["name"])){
                echo $_GET["name"];
            }
        ?>
    </body>
</html>