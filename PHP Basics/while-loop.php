<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While Loops</title>
        <style>
        
            body {
                background-color: #555;
                color: #f4f4f4;
            }

        </style>
    </head>


    <body>
        

        <?php
            // while loop checks condition is true FIRST, then runs through the code, and goes back to checking condition after all code is run!
            $index = 1;
            while ($index <= 10){ //as long as loop condition is true, loop will continue
                echo "$index <br>";
                $index += 1; // this will allow loop to exit, this is the exit condition
            }


            // do while loop will run the body of code FIRST, then check if the condition is true. Good for if you dont want to check
            // if the condition of the loop is true right away!
            $num = 6;
            do {
                echo "$num <br>";
                $num += 1;
            } while ($num < 5);
            
        ?>

    </body>

</html>