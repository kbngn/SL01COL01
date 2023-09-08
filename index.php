<?php
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Can you make smoothies?</h1>
</body>
</html>

<?php
$mango = 2;

if($mango > 1 ) {
    echo "You have enough mangoes!";
} else {
    echo "You don't have enough mangoes." ;
}

date_default_timezone_set('CET');

$date = date('H:i:s');
echo "<br> The current time: " .$date;


$t = date("H");

if ($t > "6") {
    $backgroundColor = 'black';
}










