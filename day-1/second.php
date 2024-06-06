<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 10;
    $b = 5;


    $addition = $a + $b;
    $subtraction = $a - $b;
    $multiplication = $a * $b;
    $division = $a / $b;
    $modulus = $a % $b;

    echo "Addition: $a + $b = $addition<br>";
    echo "Subtraction: $a - $b = $subtraction<br>";
    echo "Multiplication: $a * $b = $multiplication<br>";
    echo "Division: $a / $b = $division<br>";
    echo "Modulus: $a % $b = $modulus<br>";


    $power = pow($a, $b);
    echo "$a raised to the power of $b is: $power";
    ?>

</body>

</html>