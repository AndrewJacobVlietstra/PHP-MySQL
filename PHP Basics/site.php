<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Intro</title>
    </head>

    <body>
        <!-- Trying out some variables -->
        <!-- in CMD prompt type "php -S localhost:4000" to set up local webserver, then use URL/filename.php to view page -->
        <?php
            $characterName = "Andy";
            $characterAge = 25;
        
            echo("<h1>This is a header </h1>");
            echo("<hr>");
            echo("Hello There <br>");
            echo("Hi $characterName you are $characterAge years old! <br>");
            echo("Do you like your name $characterName more than how old you are, $characterAge? <br>");
            echo("I like your name $characterName and your age $characterAge! <br>");
        ?>

    </body>

</html>