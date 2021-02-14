<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inheritance</title>
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
            // Inheritance allows a class to inherit all functionality (functions) from another class
            class Chef {
                function makeChicken(){
                    echo "The Chef made some chicken. <br>";
                }

                function makeSalad(){
                    echo "The Chef made a salad. <br>";
                }

                function makeSpecialDish(){
                    echo "The Chef made their special dish. <br>";
                }
            }

            class ItalianChef extends Chef { // extends is a keyword that will extend all of a class's functionality to another
                function makePasta(){
                    echo "The Italian Chef made some pasta. <br>";
                }

                function makeSpecialDish(){ // function override
                    echo "The Italian Chef made their special dish. <br>";
                }
            }

            $chef = new Chef();
            $chef->makeSpecialDish();

            $ItalianChef = new ItalianChef();
            $ItalianChef->makeSpecialDish();

        ?>

    </body>

</html>