<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Functions</title>
    </head>


    <body>
        


        <?php 

            function sayHi($name, $age){
                echo "Hello $name, you are $age years old! <br>";
            }

            sayHi("Andrew", 25);
            sayHi("Derek", 34);
            sayHi("Angela", 22);




            function getMax($num1, $num2, $num3){

                if($num1 >= $num2 && $num1 >= $num3) {
                    return $num1;
                }
                else if ($num2 >= $num1 && $num2 >= $num3) {
                    return $num2;
                }
                else {
                    return $num3;
                }
            }

            echo getMax(205, 205, 40);

        ?>


    </body>

</html>