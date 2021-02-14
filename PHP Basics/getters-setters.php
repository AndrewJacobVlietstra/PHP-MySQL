<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Getters & Setters</title>
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
           
            class Movie {
                public $title; // any code can affect this title variable as it is public variable
                private $rating; // only code inside the Movie class can affect the private rating variable

                function __construct($title, $rating){
                    $this->title = $title;
                    $this->setRating($rating);
                }

                function getRating(){ // Getter
                    return $this->rating;
                }

                function setRating($rating){ // Setter
                    if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R"){
                        $this->rating = $rating;
                    }
                    else {
                        $this->rating = "NR";
                    }
                }
            }

            $avengers = new Movie("Avengers", "PG-13");

            // echo $avengers->rating;
            
            echo $avengers->setRating("dog");
            echo $avengers->getRating();

        ?>

    </body>

</html>