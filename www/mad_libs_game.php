<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mad Libs Game</title>
    </head>
    <body>
        <form action="mad_libs_game.php" method="get">
            color: <input type="text" name="color"><br>
            plural noun: <input type="text" name="pluralNoun"><br>
            celebrity: <input type="text" name="celebrity"><br>
            <input type="submit">
        </form>
        <br><br>

        <?php 
            if(empty($_GET['color']) && empty($_GET['pluralNoun']) && empty($_GET['celebrity'])){
                $color = "";
                $pluralNoun = "";
                $celebrity = "";

            } elseif(isset($_GET['color']) && isset($_GET['pluralNoun']) && isset($_GET['celebrity'])){
                $color = $_GET["color"];
                $pluralNoun = $_GET["pluralNoun"];
                $celebrity = $_GET["celebrity"];

            } else {
                $color = "";
                $pluralNoun = "";
                $celebrity = "";
            }
            
            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        ?>
    </body>
</html>