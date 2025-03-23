<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php
    define("PI", 3.14159);
     
    $radius = 4;

    $area = PI * ($radius * $radius);

    echo "The Area of the Circle with Radius " .  $radius . "metres" . " is " . $area . "metre-squared.";
    ?>
</body>
</html>