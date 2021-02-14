<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Object Functions</title>
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
           
            class Student{
                var $name;
                var $major;
                var $gpa;

                // Each time we make a new object, the constructor function is called
                function __construct($name, $major, $gpa){
                    $this->name = $name; // this keyword refers to the object being constructed, so this object's name
                    $this->major = $major;
                    $this->gpa = $gpa;
                }

                function hasHonors(){
                    if($this->gpa >= 3.5){
                        return "true <br>"; // in real purposes prob better to pass back actual boolean values
                    } 
                    else {
                        return "false <br>";
                    }
                }
            }
            
            $student1 = new Student("Greg", "Art", 3.6);
            $student2 = new Student("Angela", "Marketing", 2.8);

            echo $student1->hasHonors();
            echo $student2->hasHonors();

        ?>

    </body>

</html>