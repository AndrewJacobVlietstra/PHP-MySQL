<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>


    <body>
        

        

    <form action="calculator.php" method="get"> <!-- GET method will put passed information from the inputs into the URL, not secure, better to use POST method instead for more security -->

        Number 1 <input type="number" name="num1"> <br>
        Number 2 <input type="number" name="num2"> <br>
        <input type="submit" value="Submit">
    
    </form>
    <br>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"]; ?>



    </body>

</html>