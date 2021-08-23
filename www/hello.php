<?php 

// variables are started with a '$' and can be used later on
$message = 'Hey how are you?';
$count = 3;
$price = 1.99;
$is_admin = true;
$data = null;
$day = 'Monday';
$articles = ['First Post', 'Second Post', 'Third Post'];

// var_dump($message);
echo("$count $price Dang pretty good eh");
echo "<br>";

// var_dump($is_admin, $data);

// echo($price * $count);
// echo "Today is $day";

// var_dump($price . $message);
// echo $articles[0];

$values = [
    "message" => "Hello World",
    "count" => 150,
    "pi" => 3.1415,
    "status" => false,
    "result" => null,
];

foreach ($articles as $index => $article) {
    echo $index . '-' . $article, ", ";
}

if ($is_admin) {
    echo 'You are an admin of this website.';
} else {
    echo 'You are not an admin.';
}

?>