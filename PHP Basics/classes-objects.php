<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Classes & Objects</title>
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
           
            class Book{ // classes are a template of an object with certain attributes, defining a new data type
                var $title;
                var $author;
                var $pages;

            }
            
            $book1 = new Book; // an object is an instance of a class, in this case a book object
            $book1->title = "Harry Pooter";
            $book1->author = "JK Rowling";
            $book1->pages = 400;

            echo $book1->author;

            $book2 = new Book;
            $book2->title = "Lord of The Rings";
            $book2->author = "Tolkien";
            $book2->pages = 750;

            echo $book2->pages;

            

            
        ?>

    </body>

</html>