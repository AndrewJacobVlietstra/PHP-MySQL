<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
        <style>
            input {
                line-height: 1.6;
                margin: 0.5rem;
                text-align: right;
            }
        </style>
    </head>


    <body>
        

        
     <!-- GET method will put passed information from the inputs into the URL, not secure, better to use POST method instead for more security -->
    <!--
    <form action="calculator.php" method="get">

        Number 1 <input type="number" name="num1"> <br>
        Number 2 <input type="number" name="num2"> <br>
        <input type="submit" value="Submit">
    
    </form>
    <br>
    -->

    <?php //echo $_GET["num1"] + $_GET["num2"]; ?>


        <form action="calculator.php" method="post">
        
        First Number: <input type="number" step="0.1" name="num1"> <br>
        Operator: <input type="text" name="operator"> <br>
        Second Number: <input type="number" step="0.1" name="num2"> <br>
        <input type="submit">
        
        </form>

        <?php 
        
        $num1 = $_POST["num1"]; //POST is getting the input data for the num1 variable and storing it in memory
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        if($operator == "+"){
            echo $num1 + $num2;
        }
        else if ($operator == "-"){
            echo $num1 - $num2;
        }

        else if ($operator == "*"){
            echo $num1 * $num2;
        }

        else if ($operator == "/"){
            echo $num1 / $num2;
        }
        else {
            echo "Invalid Operator!";
        }
        
        ?>

    </body>

</html>