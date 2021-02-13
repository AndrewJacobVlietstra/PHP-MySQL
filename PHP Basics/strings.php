<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strings</title>
    </head>


    <body>
        

        <?php

            $phrase = "Hello this is a String <br>";
            $phrase[0] = "B";
            echo $phrase;
            echo str_replace("Bello", "Goodbye", $phrase);
            echo substr($phrase, 16);
            
        ?>

    </body>

</html>