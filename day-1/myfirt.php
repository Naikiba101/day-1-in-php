<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    define('PI', 3.14159);


    function calculateCircleArea($radius)
    {
        return PI * $radius * $radius;
    }


    $radius = 5;
    $area = calculateCircleArea($radius);
    echo "The area of a circle with radius $radius is: $area";
    ?>

</body>

</html>