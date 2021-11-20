<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Constructor</title>
    </head>
    <body>
        <?php 
            class Book {
                var $title;
                var $author;
                var $pages;

                function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }

            $book1 = new Book("Harry Potter", "JK Rowling", 400); // object
            echo $book1->title;
            
            $book1->title = "Hunger Games"; //edit
            $book2 = new Book("Lord of the Rings", "Tolkien", 700); // object

            echo $book1->title;
        ?>
    </body>
</html>