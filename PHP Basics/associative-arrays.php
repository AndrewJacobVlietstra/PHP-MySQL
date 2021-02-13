<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Associative Arrays</title>
    </head>


    <body>
        

        <form action="associative-arrays.php" method="POST">
           
           <input type="text" name="student">
           <input type="submit">
        
        </form>

        <?php // Key value => (mapped to some value)
                // Key values must be unique, mapped values can be the same
            $grades = array("Mark" => "A-", "Angela" => "B+", "Josh" => "C+");
            // echo $grades["Mark"];
            echo $grades[$_POST["student"]];
        ?>


    </body>

</html>