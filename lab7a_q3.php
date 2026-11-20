<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
</head>
<body>
    <?php
    // Function definition
    function calculateArea($width, $height) {
        $area = $width * $height;
        return $area;
    }

    // Callingfunction 
    $w = 4;
    $h = 2;
    $result = calculateArea($w, $h);

    // Displaying the result 
    echo "The area of a rectangle with a width of $w and $h is $result";
    ?>
</body>
</html>