<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Constructors</title>
        <style>
        
            body {
                background-color: #555;
                color: #f4f4f4;
                font-size: 1.5rem;
            }

        </style>
    </head>


    <body>
        

        <?php
           
            class Book{
                var $title;
                var $author;
                var $pages;

                // Each time we make a new book object, the constructor function is called
                function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle; // this keyword refers to the object being constructed, so this object's title
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }
            
            $book1 = new Book("Harry Pooter", "JK Rowling", 400);

            $book2 = new Book("Lord of The Rings", "Tolkien", 750);

            echo $book1->title;

        ?>

    </body>

</html>