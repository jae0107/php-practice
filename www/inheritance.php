<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inheritance</title>
    </head>
    <body>
        <?php 
            class Chef {
                function makeChicken(){
                    echo "The chef makes chicken <br>";
                }

                function makeSalad(){
                    echo "The chef makes salad <br>";
                }

                function makeSpecialDish(){
                    echo "the chef makes bbq ribs <br>";
                }
            }

            class ItalianChef extends Chef {
                function makePasta(){
                    echo "The chef makes pasta <br>";
                }

                function makeSpecialDish(){
                    echo "The chef makes chicken parm";
                }
            }

            $chef = new Chef();
            $chef -> makeChicken();
            $chef -> makeSpecialDish();

            $italianChef = new ItalianChef();
            $italianChef -> makeChicken();
            $italianChef -> makePasta();
            $italianChef -> makeSpecialDish();
        ?>
    </body>
</html>