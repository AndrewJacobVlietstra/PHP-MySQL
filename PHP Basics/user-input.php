<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User-Input</title>
    </head>


    <body>
        

        

    <form action="user-input.php" method="get">

        <label for="name">Enter Name: </label>
        <input type="text" name="username" id="name"> <br>
        <label for="age">Enter age: </label>
        <input type="number" name="age" id="age">
        <input type="submit" value="Submit">
    
    </form>
    <br>

    Your name is <?php echo($_GET["username"]); ?> <br>
    Your age is <?php echo($_GET["age"]); ?>


    </body>

</html>