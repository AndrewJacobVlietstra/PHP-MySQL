<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>For Loops</title>
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
           
            
            $index = 1;
            while ($index <= 5){
                echo "$index <br>";
                $index += 1;
            }


            $luckyNumbers = array(21, 14, 87, 42, 75, 62);
            // echo count($luckyNumbers);

            for ($num = 0; $num < count($luckyNumbers); $num += 1){
                // echo "$num <br>";
                echo "$luckyNumbers[$num] <br>";
            }

            
        ?>

    </body>

</html>