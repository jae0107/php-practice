<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <form action="user_input.php" method="get">
            Name: <input type="text" name="name">
            <br>
            Age: <input type="number" name="age">
            <br>
            <input type="submit">
        </form>
        <br>
        <?php if(isset($_GET['name']) && isset($_GET['age'])) : ?>
            Your name is <?php echo $_GET["name"] ?>
            <br>
            Your age is <?php echo $_GET["age"] ?>
        <?php endif; ?>
    </body>
</html>